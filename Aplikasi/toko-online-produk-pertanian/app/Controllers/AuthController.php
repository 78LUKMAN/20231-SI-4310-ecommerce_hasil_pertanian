<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    function __construct()
    {
        helper(['form']);
    }
    public function signup()
    {
        helper(['form']);
        $validation = \Config\Services::validation();
        if ($this->request->is('post')) {
            $rules = [
                'name' => 'required|min_length[4]|max_length[50]',
                'username' => 'required|min_length[6]|max_length[10]',
                'email' => 'required|min_length[4]|max_length[100]|valid_email',
                'password' => 'required|min_length[4]|max_length[50]',
                'confirm_password' => 'required|matches[password]',
            ];

            if ($this->validate($rules)) {
                $userModel = new UserModel();
                $data = [
                    'name' => $this->request->getVar('name'),
                    'username' => $this->request->getVar('username'),
                    'email' => $this->request->getVar('email'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    'role' => "guest"
                ];
                $userModel->save($data);
                return redirect("auth/signin")->with("success", "horeeee");
            } else {
                return view('pages/signup/signup', ['validation' => $validation]);
            }
        }
        return view('pages/signup/signup', ['validation' => $validation]);

    }
    public function signin()
    {
        if ($this->request->getPost()) {
            $session = session();
            $userModel = new UserModel();

            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $user = $userModel->where('username', $username)->first();
            if ($user) {
                $dataPassword = $user['password'];
                $authUserPassword = password_verify($password, $dataPassword);
                if ($authUserPassword) {
                    $session_data = [
                        'username' => $user['username'],
                        'name' => $user['name'],
                        'isLoggin' => TRUE
                    ];
                    $session->set('userData', $session_data);
                    return redirect()->to('/');
                } else {
                    $session->setFlashdata('feedback', 'Password is incorrect.');
                    return redirect()->to('auth/signin');
                }
            } else {
                $session->setFlashdata('feedback', 'Username does not exist.');
                return redirect()->to('auth/signin');
            }
        }
        return view('pages/signin/signin');
    }
}

