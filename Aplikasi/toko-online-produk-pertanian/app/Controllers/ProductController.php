<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    function __construct()
    {
        $this->productModel = new ProductModel();
        helper(['form', 'number', 'text']);
        $this->validation = \Config\Services::validation();
    }

    public function products()
    {
        $data = [
            'products' => $this->productModel->findAll(),
            'page_title' => "Product Management"
        ];
        return view('pages/admin/product_management/products', $data);
    }

    public function detailproduct($id)
    {
        $data['product'] = $this->productModel->find($id);
        return view('pages/product/detail', $data);

    }
    public function addproduct()
    {
        $validator = $this->validation;

        if ($this->request->is('post')) {
            $rules = [
                'name' => 'required',
                'price' => 'required|max_length[10]|numeric',
                'discount' => 'required|max_length[2]|numeric',
                'stock' => 'required|max_length[3]|numeric',
                'description' => 'required',
                'image' => 'uploaded[image]|max_size[image,3024]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
                'label' => 'required|max_length[30]|min_length[6]',
            ];
            if ($this->validate($rules)) {

                $price = $this->request->getPost('price');
                $discount = $this->request->getPost('discount');
                $data = [
                    'name' => $this->request->getPost('name'),
                    'price' => $price,
                    'discount' => $discount,
                    'disprice' => $price - ($price * ($discount / 100)),
                    'stock' => $this->request->getPost('stock'),
                    'description' => $this->request->getPost('description'),
                    'label' => $this->request->getPost('label'),
                ];

                $image = $this->request->getFile('image');

                if ($image->isValid()) {
                    if (!empty($data['image']) && file_exists('assets/img/products/' . $data['image'])) {
                        unlink('assets/img/products/' . $data['image']);
                    }
                    $randFileName = $image->getRandomName();
                    $image->move('assets/img/products/', $randFileName);
                }
                ;

                $data['image'] = $randFileName;
                $this->productModel->insert($data);
                return redirect('admin/products')->with('success', 'Berhasil menambahkan produk');

            } else {
                session()->setFlashdata('input_data', $this->request->getPost());
                return redirect('admin/products')->withInput()->with('failed', $validator->getErrors());

            }
        }
    }

    public function editproduct($id)
    {
        $validator = $this->validation;

        if ($this->request->is('post')) {
            $rules = [
                'name' => 'required',
                'price' => 'required|max_length[10]|numeric',
                'discount' => 'required|max_length[2]|numeric',
                'stock' => 'required|max_length[3]|numeric',
                'description' => 'required',
                'image' => 'max_size[image,3024]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
                'label' => 'required|max_length[30]|min_length[6]',
            ];

            if ($this->validate($rules)) {
                $price = $this->request->getPost('price');
                $discount = $this->request->getPost('discount');
                $data = [
                    'name' => $this->request->getPost('name'),
                    'price' => $price,
                    'discount' => $discount,
                    'disprice' => $price - ($price * ($discount / 100)),
                    'stock' => $this->request->getPost('stock'),
                    'description' => $this->request->getPost('description'),
                    'label' => $this->request->getPost('label'),
                ];

                $image = $this->request->getFile('image');

                if ($image->isValid()) {
                    $existingImage = $this->productModel->find($id)['image'];
                    if (!empty($existingImage) && file_exists('assets/img/products/' . $existingImage)) {
                        unlink('assets/img/products/' . $existingImage);
                    }

                    $randFileName = $image->getRandomName();
                    $image->move('assets/img/products/', $randFileName);
                    $data['image'] = $randFileName;
                }

                $this->productModel->update($id, $data);
                return redirect('admin/products')->with('success', 'Berhasil mengedit produk');
            } else {
                return redirect()->back()->withInput()->with('failed', $validator->getErrors());
            }
        }
    }

    public function deleteproduct($id)
    {
        $dataProduk = $this->productModel->find($id);
        $imgPath = "assets/img/products/" . $dataProduk['image'];
        if (file_exists($imgPath)) {
            unlink($imgPath);
        }

        $this->productModel->delete($id);

        return redirect('admin/products')->with('success', 'Data Berhasil Dihapus');
    }

    public function showbylabel($label)
    {
        $data = [
            'products' => $this->productModel->getByLabel($label),
            'title' => 'Produk Serupa "' . $label . '"',
            'null' => 'Produk Serupa Tidak Ditemukan'
        ];
        return view('pages/product/product', $data);
    }

    public function search()
    {
        $keyword = $this->request->getPost('keyword');

        if (empty($keyword)) {
            $data = ['result'] == null;
            return redirect()->back()->with('error', 'Kolom pencarian tidak boleh kosong');
        }

        $produkModel = new ProductModel();
        $data['products'] = $produkModel->search($keyword);

        $data['null'] = empty($data['result']) ? 'Produk tidak ditemukan.' : '';
        $data['title'] = "hasil pencarian '" . $keyword . "'";

        return view('pages/product/search_result', $data);
    }

    public function reduceProductStockById($productId, $quantity)
    {
        $productModel = new ProductModel();
        $product = $productModel->find($productId);

        if ($product) {
            $newStock = max(0, $product['stock'] - $quantity);
            $productModel->update($productId, ['stock' => $newStock]);
        }
    }
    public function increaseSold($productId, $quantity)
    {
        $productModel = new ProductModel();
        $product = $productModel->find($productId);

        if ($product) {
            $newSold = $product['sold'] + $quantity;
            $productModel->update($productId, ['sold' => $newSold]);
        }
    }



}
