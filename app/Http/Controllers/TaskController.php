<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Tasks\TaskService;

class TaskController extends Controller
{
    public function create(Request $request)
    {
        $task = TaskService::CreateTask($request->input('name'));

        return response()->json($task);
    }
}
