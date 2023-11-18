<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CheckoutController extends BaseController
{
    public function checkout()
    {
        return view('pages/checkout/checkout');
    }
}
