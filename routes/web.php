<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminRegisterController;
use App\Http\Controllers\Auth\AgentRegisterController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get('register/admin', [AdminRegisterController::class, 'showRegistrationForm'])->name('admin.register');
Route::post('register/admin', [AdminRegisterController::class, 'register']);

Route::get('register/agent', [AgentRegisterController::class, 'showRegistrationForm'])->name('agent.register');
Route::post('register/agent', [AgentRegisterController::class, 'register']);