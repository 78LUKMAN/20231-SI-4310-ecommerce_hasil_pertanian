<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    function __construct()
    {
        helper(['form']);
        $this->validation = \Config\Services::validation();
    }
    public function signup()
    {
        $validator = $this->validation;
        if ($this->request->is('post')) {
            $rules = [
                'name' => 'required|min_length[4]|max_length[50]',
                'username' => 'required|min_length[6]|max_length[10]|is_unique[users.username]',
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
                    'role' => "guest",
                    'created_at' => date('Y-m-d H:i:s')
                ];

                $userModel->save($data);
                return redirect("auth/signin")->with("success", "horeeee");
            } else {
                return view('pages/signup/signup', ['validation' => $validator]);
            }
        }
        return view('pages/signup/signup', ['validation' => $validator]);

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
                    $this->setSession($user);
                    return redirect()->to('/');
                } else {
                    $session->setFlashdata('feedback', 'Username or Password is incorrect.');
                    return redirect()->to('auth/signin');
                }
            } else {
                $session->setFlashdata('feedback', 'Username does not exist.');
                return redirect()->to('auth/signin');
            }
        }
        $data['title'] = "sign in";
        return view('pages/signin/signin', $data);
    }

    public function setSession($user) {
        $session = session();
        $session_data = [
            'username' => $user['username'],
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
            'address' => $user['address'],
            'phone' => $user['phone'],
            'role' => $user['role'],
            'img' => $user['img'],
            'isLoggIn' => TRUE,
        ];
        $session->set($session_data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}

