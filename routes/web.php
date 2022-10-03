<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\TeacherController;

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

Route::get('/', [AuthenticatedSessionController::class, 'create']);

Route::get('/dashboard', [DashboardController::class, 'show'])->middleware(['auth']);

Route::get('/tasks_manager', [TaskController::class, 'index'])->name('tasks.index')->middleware(['auth']);

Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index')->middleware(['auth']);

Route::get('/settings', function() {
    return view('settings');
})->middleware(['auth']);

require __DIR__.'/auth.php';
