<?php

namespace App\Controllers;

use App\Models\TaskModel;

class TaskController extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        // Kukuha ng lahat ng tasks na ordered by task_date
        $data['tasks'] = $taskModel->getAllTasksOrderedByDate();

        return view('tasks/index', $data);
    }
}