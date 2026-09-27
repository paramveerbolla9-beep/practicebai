<?php

namespace App\Controllers;
use App\Models\TaskModel;

class Pages extends BaseController
{
    public function index(): string
    {
        $TaskModel = new TaskModel();
        $data['tasks'] = $TaskModel->findAll();

        return view('welcome', $data);
    }
}
