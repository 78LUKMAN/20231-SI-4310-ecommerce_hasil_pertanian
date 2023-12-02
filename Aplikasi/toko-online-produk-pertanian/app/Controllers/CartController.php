<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class CartController extends BaseController
{
    protected $cart;
    private $url = "https://api.rajaongkir.com/starter/";
    private $apiKey = "a3c309446b489dc246c5693a2536b822";

    public function __construct()
    {
        helper(['number', 'form']);
        $this->cart = Services::cart();
    }

    public function cart()
    {
        $data['items'] = $this->cart->contents();
        $data['total'] = $this->cart->total();
        return view('pages/cart/cart', $data);
    }

    public function add()
    {
        $cartData = [
            'id' => $this->request->getPost('id'),
            'qty' => 1,
            'price' => $this->request->getPost('price'),
            'name' => $this->request->getPost('name'),
            'options' => ['image' => $this->request->getPost('image')],
        ];

        $this->cart->insert($cartData);
        session()->setFlashdata('success', 'Successfully added a product to cart');
        return redirect()->back();
    }

    public function clear()
    {
        $this->cart->destroy();
        session()->setFlashdata('success', 'Cart emptied successfully');
        return redirect()->to('activity/cart');
    }

    public function edit()
    {
        $i = 1;
        foreach ($this->cart->contents() as $item) {
            $cartData = [
                'rowid' => $item['rowid'],
                'qty' => $this->request->getPost('qty' . $i++),
            ];

            $this->cart->update($cartData);
        }

        session()->setFlashdata('success', 'Cart edited successfully');
        return redirect()->to('activity/cart');
    }

    public function delete($rowid)
    {
        $this->cart->remove($rowid);
        session()->setFlashdata('success', 'Cart deleted successfully');
        return redirect()->to(base_url('activity/cart'));
    }


    public function checkout()
    {
        $data['items'] = $this->cart->contents();
        $data['total'] = $this->cart->total();
        $provinsi = $this->rajaongkir('province');
        $data['provinsi'] = json_decode($provinsi)->rajaongkir->results;

        return view('pages/checkout/checkout', $data);
    }

    public function getCity()
    {
        if ($this->request->isAJAX()) {
            $id_province = $this->request->getGet('id_province');
            $data = $this->rajaongkir('city', $id_province);
            return $this->response->setJSON($data);
        }
    }

    public function getCost()
    {
        if ($this->request->isAJAX()) {
            $origin = $this->request->getGet('origin');
            $destination = $this->request->getGet('destination');
            $weight = $this->request->getGet('weight');
            $courier = $this->request->getGet('courier');
            $data = $this->rajaongkircost($origin, $destination, $weight, $courier);
            return $this->response->setJSON($data);
        }
    }

    private function rajaongkircost($origin, $destination, $weight, $courier)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "origin=" . $origin . "&destination=" . $destination . "&weight=" . $weight . "&courier=" . $courier,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded",
                "key: ". $this->apiKey,
            ),
        )
        );

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $response;
    }


    private function rajaongkir($method, $id_province = null)
    {
        $endPoint = $this->url . $method;

        if ($id_province != null) {
            $endPoint = $endPoint . "?province=" . $id_province;
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $endPoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: " . $this->apiKey
            ),
        )
        );

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $response;
    }

    public function buy()
    {
        if ($this->request->getPost()) {
            $data = $this->request->getPost();

            $transaksiModel = new \App\Models\TransaksiModel();
            $transaksiDetailModel = new \App\Models\TransaksiDetailModel();

            $dataForm = [
                'username' => $this->request->getPost('username'),
                'total_harga' => $this->request->getPost('total_harga'),
                'alamat' => $this->request->getPost('alamat'),
                'ongkir' => $this->request->getPost('ongkir'),
                'status' => 0,
                'created_by' => $this->request->getPost('username'),
                'created_date' => date("Y-m-d H:i:s")
            ];

            $transaksiModel->insert($dataForm);

            $last_insert_id = $transaksiModel->getInsertID();

            foreach ($this->cart->contents() as $value) {
                $dataFormDetail = [
                    'id_transaksi' => $last_insert_id,
                    'id_barang' => $value['id'],
                    'jumlah' => $value['qty'],
                    'diskon' => 0,
                    'subtotal_harga' => $value['qty'] * $value['price'],
                    'created_by' => $this->request->getPost('username'),
                    'created_date' => date("Y-m-d H:i:s")
                ];

                $transaksiDetailModel->insert($dataFormDetail);
            }

            $this->cart->destroy();

            session()->setflashdata('success', 'Pesanan berhasil dibuat');
            return redirect()->to(base_url('keranjang'));
        }
    }
}
