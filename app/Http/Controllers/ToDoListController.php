<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    public function clean()
    {
        Task::truncate();

        return view('todoapp.index')->with('tasks', Task::all());
    }
    public function index()
    {
        return view('todoapp.index')->with('tasks', Task::all());
    }

    public function store(Request $request, Task $task)
    {
        $task->setAttribute('content', $request->content);

        $task->save();

        return redirect()->route('todolist.index');
    }
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('todolist.index');
    }
    public function update(Task $task, Request $request)
    {
        $task->content = request('content');
        $task->save();

        return redirect()->route('todolist.index');
    }}
