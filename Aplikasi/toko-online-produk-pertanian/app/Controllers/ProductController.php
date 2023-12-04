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
                'price' => 'required|max_length[10]',
                'stock' => 'required|max_length[3]',
                'description' => 'required',
                'image' => 'uploaded[image]|max_size[image,1024]|is_image[image]',
                'label' => 'required|max_length[30]',
            ];
            if ($this->validate($rules)) {

                $data = [
                    'name' => $this->request->getPost('name'),
                    'price' => $this->request->getPost('price'),
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
                return redirect('admin/products')->with('failed', $validator->getErrors());

            }
        }
    }



    public function editproduct($id)
    {
        $validator = $this->validation;

        if ($this->request->is('post')) {
            $rules = [
                'name' => 'required',
                'price' => 'required|max_length[10]',
                'stock' => 'required|max_length[3]',
                'description' => 'required',
                'image' => 'max_size[image,1024]|is_image[image]',
            ];

            if ($this->validate($rules)) {
                $data = [
                    'name' => $this->request->getPost('name'),
                    'price' => $this->request->getPost('price'),
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
        unlink("assets/img/products/" . $dataProduk['image']);

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

}
