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
        helper("form");
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
        $userId = session('id');
        $validationRules = [
            'currentPassword' => 'required',
            'newPassword' => 'required|min_length[6]',
            'renewPassword' => 'required|matches[newPassword]'
        ];

        if ($this->validate($validationRules)) {
            $currentPassword = $this->request->getPost('currentPassword');
            $newPassword = $this->request->getPost('newPassword');

            // Mendapatkan ID pengguna dari data pengguna
            if (!$userId) {
                return redirect()->to('activity/profile')->with('pro-errors', 'User data not found in session.');
            }

            // Mendapatkan data pengguna dari database berdasarkan ID
            $user = $this->userModel->find($userId);

            if (!$user) {
                return redirect()->to('activity/profile')->with('pro-errors', 'User not found.');
            }

            // Memverifikasi password saat ini
            if (!password_verify($currentPassword, $user['password'])) {
                return redirect()->to('activity/profile')->with('pro-errors', 'Incorrect current password.');
            }

            // Mengubah password baru
            $data = [
                'password' => password_hash($newPassword, PASSWORD_BCRYPT)
            ];

            $upPwd = $this->userModel->update($userId, $data);
            if ($upPwd) {
                return redirect()->to('activity/profile')->with('pro-success', 'Password successfully updated.');
            }
        } else {
            return redirect()->to('activity/profile')->with('pro-errors', $this->validator->getErrors());
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
            $randFileName = $userData['img'];

            if ($image->isValid()) {
                if (!empty($userData['img']) && file_exists('assets/img/profile/' . $userData['img'])) {
                    unlink('assets/img/profile/' . $userData['img']);
                }
                $randFileName = $image->getRandomName();
                $image->move('assets/img/profile/', $randFileName);
            };

            if (!$userData) {
                return redirect()->back()->with('pro-errors', 'User data not found in session.');
            }
            

            if (!$userData) {
                return redirect()->back()->with('pro-errors', 'User not found.');
            }

            // Update the user data
            $userData = [
                'username' => $username,
                'email' => $email,
                'phone' => $phone,
                'address' => $address,
                'img' => $randFileName,
            ];

            $updated = $this->userModel->update($userId, $userData);

            if ($updated) {
                return redirect()->to('activity/profile')->with('pro-success', 'Profile data successfully updated.');
            } else {
                return redirect()->to('activity/profile')->with('pro-failed', 'Failed to update profile data.');
            }
        } else {
            return redirect()->back()->withInput()->with('pro-errors', $this->validator->getErrors());
        }
    }
}
