<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function login()
    {
        // Menampilkan halaman login
        return view('user/login');
    }

    public function authenticate()
    {
        $userModel = new UserModel();

        // Mendapatkan data dari form login
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cek apakah user ada di database
        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Menyimpan session jika login berhasil
            session()->set([
                'user_id' => $user['id'],
                'username' => $user['username'],
                'logged_in' => true
            ]);

            // Redirect ke dashboard setelah login
            return redirect()->to('/user/dashboard');
        } else {
            // Jika login gagal, beri pesan error dan alihkan ke login
            session()->setFlashdata('error', 'Username atau password salah');
            return redirect()->to('/login');
        }
    }

    public function register()
    {
        // Menampilkan halaman registrasi
        return view('user/register');
    }

    public function save()
    {
        $userModel = new UserModel();

        // Validasi input registrasi
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required|is_unique[users.username]',
            'password' => 'required|min_length[6]',
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->to('/register')->withInput();
        }

        // Menyimpan data user ke database
        $userModel->save([
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ]);

        // Redirect ke halaman login setelah registrasi berhasil
        session()->setFlashdata('success', 'Registrasi berhasil. Silakan login.');
        return redirect()->to('/login');
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
