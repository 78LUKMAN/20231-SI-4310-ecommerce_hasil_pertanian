<?php

namespace App\Controllers;
use App\Models\ProductModel;

class Home extends BaseController
{
    function __construct()
    {
        helper('number');
        helper('form');
    }
    
    public function index()
    {
        $productModel = new ProductModel();
        $products = $productModel->findAll();
        $data['products'] = $products;
        
        return view('pages/main/main');
    }
}
