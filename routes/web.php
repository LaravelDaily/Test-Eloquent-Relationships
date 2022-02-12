<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AttachmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('tasks', [TaskController::class, 'index']);
Route::post('tasks', [TaskController::class, 'store'])->middleware('auth');

Route::get('users', [UserController::class, 'index']);
Route::get('users/{user}', [UserController::class, 'show']);

Route::get('roles', [RoleController::class, 'index']);

Route::get('teams', [TeamController::class, 'index']);

Route::get('countries', [CountryController::class, 'index']);

Route::get('attachments', [AttachmentController::class, 'index']);

Route::post('projects', [ProjectController::class, 'store'])->middleware('auth');

