<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class CartController extends BaseController
{
    protected $cart;

    public function __construct()
    {
        helper(['number', 'form']); // Load multiple helpers at once
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
        session()->setFlashdata('success', 'Produk berhasil ditambahkan ke keranjang. (Lihat)');
        return redirect()->back();
    }

    public function clear()
    {
        $this->cart->destroy();
        session()->setFlashdata('success', 'Keranjang berhasil dikosongkan');
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

        session()->setFlashdata('success', 'Keranjang berhasil diedit');
        return redirect()->to('activity/cart');
    }

    public function delete($rowid)
    {
        $this->cart->remove($rowid);
        session()->setFlashdata('success', 'Keranjang berhasil dihapus');
        return redirect()->to(base_url('activity/cart'));
    }
}
