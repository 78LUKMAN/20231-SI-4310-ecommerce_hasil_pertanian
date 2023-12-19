<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;
use \App\Models\TransactionModel;
use \App\Models\DetailTransactionModel;

class CartController extends BaseController
{
    protected $cart;
    private $url = "https://api.rajaongkir.com/starter/";

    public function __construct()
    {
        $this->apiKey = getenv("RAJA_ONGKIR_KEY");
        helper('number');
        helper('form');
        $this->cart = Services::cart();
    }

    public function cart()
    {
        $data['items'] = $this->cart->contents();
        $data['total'] = $this->cart->total();
        return view('pages/cart/cart', $data);
    }

    public function countItem()
    {
        $count = count($this->cart->contents());
        return $this->response->setJSON(['count' => $count]);
    }

    public function add()
    {
        $productController = new ProductController();
        $cartData = [
            'id' => $this->request->getPost('id'),
            'qty' => 1,
            'price' => $this->request->getPost('price'),
            'disprice' => $this->request->getPost('disprice'),
            'name' => $this->request->getPost('name'),
            'options' => ['image' => $this->request->getPost('image')],
        ];

        $getStock = $productController->getStock($cartData['id']);
        if ($getStock == 0) {
            session()->setFlashdata('error', 'Stok ' . strtolower($cartData['name']) . ' sudah habis');
        } else {
            $this->cart->insert($cartData);
            session()->setFlashdata('success', 'Barang berhasil ditambahkan ke keranjang');
        }

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
        $productController = new ProductController();
        $i = 1;
        foreach ($this->cart->contents() as $item) {
            $cartData = [
                'rowid' => $item['rowid'],
                'qty' => $this->request->getPost('qty' . $i++),
            ];

            $getStock = $productController->getStock($item['id']);
            if ($cartData['qty'] > $getStock) {
                session()->setFlashdata('failed', 'Stok barang hanya tersedia ' . $getStock . ' item');
            } else {
                $this->cart->update($cartData);
                session()->setFlashdata('success', 'Keranjang berhasil diperbarui');
            }
        }

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

        curl_setopt_array(
            $curl,
            array(
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
                    "key: " . $this->apiKey,
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

        curl_setopt_array(
            $curl,
            array(
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

            $transaksiModel = new TransactionModel();
            $transaksiDetailModel = new DetailTransactionModel();


            $id_order = time();
            $dataForm = [
                'order_id' => $id_order,
                'name' => $this->request->getPost('name'),
                'username' => $this->request->getPost('username'),
                'total' => $this->request->getPost('price_total'),
                'address' => $this->request->getPost('address'),
                'email' => $this->request->getPost('email'),
                'fare' => $this->request->getPost('fare'),
                'created_by' => $this->request->getPost('username'),
                'created_date' => date("Y-m-d H:i:s")
            ];


            $itemsData = array();
            foreach ($this->cart->contents() as $value) {
                $itemData = [
                    'transaction_id' => $id_order,
                    'product_id' => $value['id'],
                    'name' => $value['name'],
                    'quantity' => $value['qty'],
                    'discount' => 0,
                    'subtotal' => $value['qty'] * $value['disprice'],
                    'price' => $value['disprice'],
                    'created_by' => $this->request->getPost('username'),
                    'created_date' => date("Y-m-d H:i:s"),
                ];

                $itemsData[] = $itemData;
                $transaksiDetailModel->insert($itemData);
            }

            $paymentData = [
                'id_order' => $id_order,
                'poscode' => $this->request->getPost('poscode'),
                'city' => $this->request->getPost('city'),
                'total' => $dataForm['total'],
                'fare' => $dataForm['fare'],
                'name' => $dataForm['name'],
                'email' => $dataForm['email'],
                'address' => $dataForm['address'],
                'items' => $itemsData,
            ];

            $paymentController = new PaymentController();
            $getToken = $paymentController->snapToken($paymentData);
            $initialStatus = $paymentController->checkStatus($id_order);

            $dataForm['token'] = $getToken;
            $dataForm['status'] = $initialStatus;

            $transaksiModel->insert($dataForm);
            $this->cart->destroy();

            session()->setflashdata('success', 'Pesanan berhasil dibuat');
            return redirect()->to(base_url('activity/history'));
        }
    }
}
