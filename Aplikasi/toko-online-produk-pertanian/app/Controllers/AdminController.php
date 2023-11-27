<?php

namespace App\Controllers;

use App\Models\UserModel;

class AdminController extends BaseController
{
    public function __construct() {
        helper("[form]");
        $this->userModel = new UserModel();
    }
    public function index()
    {
        return view('pages/admin/admin_dashboard/main');
    }

    public function accounts() {
        $data['users'] = $this->userModel->findAll();
        return view('pages/admin/account_management/accounts', $data);
    }
}
