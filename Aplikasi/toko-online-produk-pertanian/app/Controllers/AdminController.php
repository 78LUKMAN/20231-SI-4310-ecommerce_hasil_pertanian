<?php

namespace App\Controllers;

use App\Models\UserModel;

class AdminController extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->userModel = new UserModel();
        $this->validation = \Config\Services::validation();
    }
    public function accounts()
    {
        $data = [
            'users' => $this->userModel->findAll(),
            'page_title' => "Account Management"
        ];

        return view('pages/admin/account_management/accounts', $data);
    }

    public function adduser()
    {
        $validator = $this->validation;
        if ($this->request->is('post')) {
            $rules = [
                'name' => 'required|min_length[4]|max_length[50]',
                'username' => 'required|min_length[6]|max_length[10]|is_unique[users.username]',
                'password' => 'required|min_length[4]|max_length[50]',
                'confirm_password' => 'required|matches[password]',
            ];

            if ($this->validate($rules)) {
                $data = [
                    'name' => $this->request->getVar('name'),
                    'username' => $this->request->getVar('username'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    'role' => "guest",
                ];

                $this->userModel->insert($data);
                return redirect("admin/accounts")->with("success", "Berhasil menambahkan user baru");
            } else {
                session()->setFlashdata('input_data', $this->request->getPost());
                return redirect("admin/accounts")->withInput()->with("error", $validator->getErrors());
            }
        }
    }

    public function edituser($id)
    {
        $user = $this->userModel->find($id);
        if ($this->request->is("post")) {

            $username = $this->request->getVar("username");
            $rules = [
                "username" => 'required',
                "password" => 'required|min_length[4]',
                "confirm_password" => 'required|matches[password]',
            ];

            $data = [
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];

            if ($username === $user['username']) {
                session()->setFlashdata('input_data', $this->request->getPost());
                if ($this->validate($rules)) {
                    $this->userModel->update($id, $data);
                    return redirect('admin/accounts')->with('success', 'Password berhasil di perbarui');
                } else {
                    return redirect('admin/accounts')->with('error', $this->validator->getErrors());
                }
            } else {
                return redirect('admin/accounts')->with('failed', 'Pengguna tidak ditemukan');
            }

        }
    }

    public function deleteuser($id)
    {
        $delete = $this->userModel->delete($id);
        if ($delete) {
            return redirect('admin/accounts')->with('success', 'Akun berhasil dihapus');
        }
    }
}
