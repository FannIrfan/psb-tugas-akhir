<?php

namespace App\Controllers;

use App\Models\UserModel;

class AdminController extends BaseController
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function manageUsers()
    {
        $userModel = new UserModel();
        $users = $userModel->findAll();
        return view('admin/manage_users', ['users' => $users]);
    }

    public function editProfile()
    {
        return view('admin/edit_profile');
    }
}

