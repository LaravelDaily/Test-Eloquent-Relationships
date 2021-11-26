<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function ()
{
    return view('welcome');
});

Route::get('tasks', [TaskController::class, 'index']); // done
Route::post('tasks', [TaskController::class, 'store'])->middleware('auth'); // done

Route::get('users', [\App\Http\Controllers\UserController::class, 'index']); // done
Route::get('users/{user}', [\App\Http\Controllers\UserController::class, 'show']); // done

Route::get('roles', [\App\Http\Controllers\RoleController::class, 'index']); // done

Route::get('teams', [\App\Http\Controllers\TeamController::class, 'index']); // done

Route::get('countries', [\App\Http\Controllers\CountryController::class, 'index']); // done

Route::get('attachments', [\App\Http\Controllers\AttachmentController::class, 'index']); // done

Route::post('projects', [\App\Http\Controllers\ProjectController::class, 'store'])->middleware('auth'); // done
