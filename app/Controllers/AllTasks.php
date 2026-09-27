<?php

namespace App\Controllers;
use App\Models\TaskModel;

class AllTasks extends BaseController
{
    public function index(): string
    {
        $TaskModel = new TaskModel();
        $data['tasks'] = $TaskModel->findAll();

        return view('all_tasks', $data);
    }
}
