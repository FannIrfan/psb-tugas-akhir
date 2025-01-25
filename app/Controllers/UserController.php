<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RegistrationModel;

class UserController extends BaseController
{
    public function dashboard()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }
        return view('user/dashboard');
    }

    public function registerForm()
    {
        return view('user/registerForm');
    }

    public function submitRegistration()
    {
        $userModel = new UserModel();
        
        // Validasi input
        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirm_password');
        
        if ($password !== $confirmPassword) {
            return redirect()->back()->with('error', 'Password dan konfirmasi password tidak cocok.');
        }

        $data = [
            'full_name' => $this->request->getPost('full_name'),
            'birthplace' => $this->request->getPost('birthplace'),
            'birthdate' => $this->request->getPost('birthdate'),
            'gender' => $this->request->getPost('gender'),
            'address' => $this->request->getPost('address'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($password, PASSWORD_BCRYPT),
        ];

        $userModel->insert($data);
        return redirect()->to('/login')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }

    public function paymentReceipt()
    {
        $registrationModel = new RegistrationModel();
        $data['registration'] = $registrationModel->where('user_id', session()->get('user_id'))->first();
        return view('user/paymentReceipt', $data);
    }

    public function editProfile()
    {
        return view('user/editProfile');
    }

    public function updateProfile()
    {
        $userModel = new UserModel();
        $data = [
            'full_name' => $this->request->getPost('full_name'),
            'birthplace' => $this->request->getPost('birthplace'),
            'birthdate' => $this->request->getPost('birthdate'),
            'gender' => $this->request->getPost('gender'),
            'address' => $this->request->getPost('address'),
            'email' => $this->request->getPost('email'),
        ];

        $password = $this->request->getPost('password');
        if (!empty($password)) {
            $data['password'] = password_hash($password, PASSWORD_BCRYPT);
        }

        $userModel->update(session()->get('user_id'), $data);
        return redirect()->to('/user/dashboard')->with('success', 'Profil berhasil diperbarui.');
    }
}
