<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index()
    {
        return Task::all();
    }

    public function store(Request $request)
    {
        return Task::create($request->all());
    }

    public function show(Task $task)
    {
        return $task;
    }

    public function update(Requesst $request, Task $task)
    {
        $task->update($request->all());

        return $task;
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return $task;
    }
}
