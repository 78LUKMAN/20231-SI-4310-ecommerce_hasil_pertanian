<?php

namespace App\Controllers;

class ActivityController extends BaseController
{
    function __construct() {
        helper(['form']);
    }
    public function cart(): string
    {
        return view('pages/cart/cart');
    }
    public function history(): string
    {
        return view('pages/history/history');
    }
}
