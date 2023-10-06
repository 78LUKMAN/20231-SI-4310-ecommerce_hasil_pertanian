<?php

namespace App\Controllers;

class CartController extends BaseController
{
    public function cart(): string
    {
        return view('pages/cart/cart');
    }
}
