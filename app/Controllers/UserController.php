<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function login()
    {
        return view('user/login');
    }

    public function authenticate()
    {
        $userModel = new UserModel();

        // Validasi input login
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cek apakah user ada di database
        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Set session user jika login berhasil
            session()->set([
                'user_id' => $user['id'],
                'username' => $user['username'],
                'logged_in' => true
            ]);

            // Redirect ke dashboard setelah login
            return redirect()->to('/user/dashboard');
        } else {
            // Jika login gagal
            session()->setFlashdata('error', 'Username atau password salah');
            return redirect()->to('/login');
        }
    }

    public function dashboard()
    {
        // Cek apakah pengguna sudah login
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        return view('user/dashboard');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
