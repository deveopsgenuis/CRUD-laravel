<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/api/tasks', [ApiController::class, 'getAllTasks']);
Route::post('/api/tasks', [ApiController::class, 'createTask']);
Route::put('/api/tasks/{taskId}', [ApiController::class, 'updateTask']);
Route::delete('/api/tasks/{taskId}', [ApiController::class, 'deleteTask']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
