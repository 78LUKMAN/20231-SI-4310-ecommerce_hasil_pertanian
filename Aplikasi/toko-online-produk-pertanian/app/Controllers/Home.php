<?php

namespace App\Controllers;
use App\Models\ProductModel;

class Home extends BaseController
{
    function __construct()
    {
        helper(['form', 'number' , 'text']);
    }
    
    public function index()
    {
        $productModel = new ProductModel();
        $products = $productModel->findAll();
        $data['products'] = $products;
        
        return view('pages/main/main', $data);
    }
}
