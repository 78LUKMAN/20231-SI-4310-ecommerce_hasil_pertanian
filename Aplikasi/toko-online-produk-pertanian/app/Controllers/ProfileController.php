<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class ProfileController extends BaseController
{
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->userModel = new UserModel();
    }
    public function index()
    {
        $userId = session('id');
        $userData = $this->userModel->find($userId);

        $data['userData'] = $userData;
        return view("pages/profile/profile", $data);
    }

    public function updatePassword()
    {
        $validationRules = [
            'currentPassword' => 'required',
            'newPassword' => 'required|min_length[6]',
            'renewPassword' => 'required|matches[newPassword]'
        ];

        if ($this->validate($validationRules)) {
            $currentPassword = $this->request->getPost('currentPassword');
            $newPassword = $this->request->getPost('newPassword');

            // Mendapatkan ID pengguna dari data pengguna
            $userData = session('userData');
            if (!$userData) {
                return redirect()->back()->with('pwd-error', 'User data not found in session.');
            }

            $userId = $userData['id'];


            // Mendapatkan data pengguna dari database berdasarkan ID
            $user = $this->userModel->find($userId);

            if (!$user) {
                return redirect()->back()->with('pwd-error', 'User not found.');
            }

            // Memverifikasi password saat ini
            if (md5($currentPassword) != $user['password']) {
                return redirect()->back()->with('pwd-error', 'Incorrect current password.');
            }

            // Mengubah password baru
            $data = [
                'password' => md5($newPassword)
            ];
            $upPwd = $this->userModel->update($userId, $data);
            if ($upPwd) {
                return redirect()->to('profile')->with('pwd-success', 'Password successfully updated.');
            }
        } else {
            return redirect()->back()->withInput()->with('pwd-errors', $this->validator->getErrors());
        }
    }


    public function edit()
    {

        // Get the user ID from the user data in the session
        $userId = session('id');
        $userData = $this->userModel->find($userId);
        $validationRules = [
            'username' => 'required',
            'email' => 'required|valid_email',
            'phone' => 'required|numeric',
            'address' => 'required',
        ];

        if ($this->validate($validationRules)) {
            $username = $this->request->getPost('username');
            $email = $this->request->getPost('email');
            $phone = $this->request->getPost('phone');
            $address = $this->request->getPost('address');
            $image = $this->request->getFile('image');

            if ($image->isValid()) {
                if (!empty($userData['img']) && file_exists('assets/img/profile/' . $userData['img'])) {
                    unlink('assets/img/profile/' . $userData['img']);
                }
                $randFileName = $image->getRandomName();
                $image->move('assets/img/profile/', $randFileName);
            }
            ;

            if (!$userData) {
                return redirect()->back()->with('pro-error', 'User data not found in session.');
            }

            if (!$userData) {
                return redirect()->back()->with('pro-error', 'User not found.');
            }

            // Update the user data
            $userData['username'] = $username;
            $userData['email'] = $email;
            $userData['phone'] = $phone;
            $userData['address'] = $address;
            $userData['img'] = $randFileName;

            $updated = $this->userModel->save($userData);

            if ($updated) {
                return redirect()->to('activity/profile')->with('pro-success', 'Profile data successfully updated.');
            } else {
                return redirect()->to('profile')->with('pro-failed', 'Failed to update profile data.');
            }
        } else {
            return redirect()->back()->withInput()->with('pro-errors', $this->validator->getErrors());
        }
    }
}
