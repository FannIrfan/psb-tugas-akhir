<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AccountController extends BaseController
{
    // Halaman profil
    public function profile()
    {
        return view('admin/profile'); // Mengarah ke file view 'admin/profile.php'
    }

    // Halaman ganti password
    public function changePassword()
    {
        return view('admin/change_password'); // Mengarah ke file view 'admin/change_password.php'
    }

    // Fungsi logout
    public function logout()
    {
        // Logika logout, misalnya menghancurkan session
        session()->destroy();
        return redirect()->to('/login'); // Redirect ke halaman login
    }

    public function updatePassword()
    {
    $userModel = new \App\Models\UserModel();
    $currentPassword = $this->request->getPost('current_password');
    $newPassword = $this->request->getPost('new_password');
    $confirmPassword = $this->request->getPost('confirm_password');
    
    // Validasi dan logika ganti password
    if ($newPassword === $confirmPassword) {
        $userId = session()->get('user_id'); // Ambil user_id dari session
        $userModel->updatePassword($userId, $newPassword);
        return redirect()->to('/admin/profile')->with('success', 'Password berhasil diubah.');
    } else {
        return redirect()->back()->with('error', 'Password baru tidak cocok.');
        }
    }      

}
