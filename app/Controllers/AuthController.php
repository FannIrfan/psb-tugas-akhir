<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function loginProcess()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set([
                'logged_in' => true,
                'role' => $user['role'],
                'username' => $user['username']
            ]);

            if ($user['role'] === 'admin') {
                return redirect()->to('/admin/dashboard');
            } else {
                return redirect()->to('/user/dashboard');
            }
        } else {
            return redirect()->back()->with('error', 'Username atau password salah.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
