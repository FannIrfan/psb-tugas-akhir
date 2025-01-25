<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('user/login');
    }

    public function loginProcess()
{
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $userModel = new UserModel();
    $user = $userModel->where('username', $username)->first();

    if ($user && password_verify($password, $user['password'])) {
        // Set session data based on the user's role
        $sessionData = [
            'username' => $user['username'],
            'role' => $user['role'], // Assuming there's a 'role' field in the database
            'logged_in' => true
        ];
        session()->set($sessionData);

        // Redirect based on the role
        if ($user['role'] === 'admin') {
            return redirect()->to('/admin/dashboard');
        } elseif ($user['role'] === 'user') {
            return redirect()->to('/user/dashboard');
        } else {
            // Optional: handle unknown roles
            session()->remove(['username', 'role', 'logged_in']);
            return redirect()->back()->with('error', 'Role tidak dikenali.');
        }
    } else {
        // Redirect back with error message if login fails
        return redirect()->back()->with('error', 'Username atau password salah.');
    }
}

    public function register()
    {
        return view('user/register');
    }

    public function registerProcess()
{
    $data = $this->request->getPost();

    // Validasi input
    if ($data['password'] !== $data['confirm_password']) {
        return redirect()->back()->with('error', 'Password dan konfirmasi password tidak cocok.');
    }

    // Simpan data ke database (contoh menggunakan UserModel)
    $userModel = new UserModel();
    $userData = [
        'username' => $data['username'],
        'full_name' => $data['full_name'],
        'birthplace' => $data['birthplace'],
        'birthdate' => $data['birthdate'],
        'gender' => $data['gender'],
        'address' => $data['address'],
        'email' => $data['email'],
        'password' => password_hash($data['password'], PASSWORD_DEFAULT),
    ];

    $userModel->insert($userData);

    return redirect()->to('/login')->with('success', 'Registrasi berhasil. Silakan login.');
}


    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
