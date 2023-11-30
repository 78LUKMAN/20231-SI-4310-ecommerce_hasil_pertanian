<?php

namespace App\Controllers;

class ActivityController extends BaseController
{
    public function cart(): string
    {
        return view('pages/cart/cart');
    }
    public function history(): string
    {
        return view('pages/shopping_history/history');
    }
}
