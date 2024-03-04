<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{

    public function index(){
        $tasks = Task::all  ();
        return view("tasks.index", ['tasks' => $tasks]);
    }
 public function create(){
        return view("tasks.create");
    }

    public function store(Request $request){
        $tasks = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $newTask = Task::create($tasks);
        return redirect(route('tasks.index'))->with('success','');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', ['task'=> $task]);
    }

    public function update(Request $request, Task $task)
    {
        $tasks = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $task->update($tasks);
        return redirect(route('tasks.index'))->with('success','');
    }

    public function destroy(Task $task){
        $task->delete();
        return redirect(route('tasks.index'))->with('success','');
    }
}