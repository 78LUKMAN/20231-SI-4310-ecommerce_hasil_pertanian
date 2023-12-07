<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\FeedbackModel;

class Home extends BaseController
{
    function __construct()
    {
        helper(['form', 'number', 'text']);
    }

    public function index()
    {
        $productModel = new ProductModel();
        $feedbackModel = new FeedbackModel();
        $products = $productModel->findAll();
        $feedback = $feedbackModel->findAll();
        $data = [
            'products' => $products,
            'feedbacks' => $feedback,
        ];

        return view('pages/main/main', $data);
    }
}
