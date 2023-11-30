<?php

namespace App\Controllers;

class HistoryController extends BaseController
{
    public function index(): string
    {
        return view('pages/shopping_history/history');
    }
}
