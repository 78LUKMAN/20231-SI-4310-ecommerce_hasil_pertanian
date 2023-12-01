<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductdetailController extends BaseController
{
    public function productdetail()
    {
        return view('pages/product/detail');
    }
}
