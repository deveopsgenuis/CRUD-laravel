<?php

namespace App\Http\Controllers;

use App\Task; use Illuminate\Http\Request;

class ApiController extends Controller { 
    // GET /api/tasks 
    public function getAllTasks() { 
        $tasks = Task::all(); return response()->json($tasks); 
    }


// POST /api/tasks
public function createTask(Request $request)
{
    $task = new Task();
    $task->name = $request->name;
    $task->description = $request->description;
    $task->completed = false;
    $task->save();
    return response()->json($task);
}

// PUT /api/tasks/:taskId
public function updateTask(Request $request, $taskId)
{
    $task = Task::find($taskId);
    if ($task) {
        $task->completed = $request->completed;
        $task->save();
        return response()->json($task);
    } else {
        return response()->json(['error' => 'Task not found'], 404);
    }
}

// DELETE /api/tasks/:taskId
public function deleteTask($taskId)
{
    $task = Task::find($taskId);
    if ($task) {
        $task->delete();
        return response()->json(['success' => 'Task deleted'], 200);
    } else {
        return response()->json(['error' => 'Task not found'], 404);
    }
}
}