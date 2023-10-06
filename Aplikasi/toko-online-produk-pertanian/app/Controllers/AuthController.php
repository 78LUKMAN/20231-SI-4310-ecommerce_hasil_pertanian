<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    public function signup(): string
    {
        return view('pages/signup/signup');
    }
    public function signin(): string
    {
        return view('pages/signin/signin');
    }
}
