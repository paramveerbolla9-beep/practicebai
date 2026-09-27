<?php

namespace App\Controllers;
use App\Models\UserModel;

class Profile extends BaseController
{
    public function index(): string
    {
        $UserModel = new UserModel();
        $data['users'] = $UserModel->first();

        return view('profile', $data);
    }
}
