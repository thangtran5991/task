<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return view('list', compact('tasks'));
    }

    public function delete($id) {
        $delete = Task::findOrFail($id);
        $delete->delete();

        return back();
    }

    public function edit($id) {
        $edit = Task::findOrFail($id);

        return view('edit', compact('edit'));
    }

    public function update(Request $request, Task $task) {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        $task->update($request->all());

        return redirect('task/list');
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $request->validate([
            'id'     => 'required',
            'name'   => 'required',
            'status' => 'required',
        ]);

        Task::create($request->all());

        return redirect('task/list');
    }
}
