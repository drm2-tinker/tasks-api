<?php

namespace App\Services\Tasks;

use App\Models\Task;
use Carbon\Carbon;

class TaskService
{
    public static function CreateTask($name)
    {
        $task = new Task();

        $task->name = $name;
        $task->save();

        return $task;
    }

    public static function CompleteTask($id)
    {
        $task = Task::find($id);

        $task->completed_at = Carbon::now();
        $task->save();

        return $task;
    }
}
