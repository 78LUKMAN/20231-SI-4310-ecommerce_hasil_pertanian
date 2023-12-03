<?php

namespace App\Controllers;

use App\Models\ProductModel;

class SearchController extends BaseController
{
    public function __construct() {
        helper(["form", "text", "number"]);
    }
    public function search()
    {
        $keyword = $this->request->getPost('keyword');

        if (empty($keyword)) {
            $data = ['result'] == null;
            return redirect()->back()->with('error','Kolom pencarian tidak boleh kosong');
        }

        $produkModel = new ProductModel();
        $data['result'] = $produkModel->search($keyword);

         // Tambahkan pesan jika produk tidak ditemukan
         $data['pesan'] = empty($data['result']) ? 'Produk tidak ditemukan.' : '';
         $data['title'] = "hasil pencarian '" . $keyword . "'";

        return view('pages/product/search_result', $data);
    }
}
