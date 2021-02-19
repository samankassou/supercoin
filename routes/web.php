<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;

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
Route::get('redirects', [HomeController::class, 'index']);
Route::get('/admin/dashboard',[AdminController::class, 'index'])->name('admins.dashboard');
Route::get('/admin/users',[AdminController::class, 'users'])->name('admins.users.index');
Route::get('dashboard', [UserController::class, 'index'])->name('users.dashboard');
Route::get('deposits', [UserController::class, 'deposits'])->name('users.deposits');
Route::get('withdrawals', [UserController::class, 'withdrawals'])->name('users.withdrawals');
Route::get('transactions', [UserController::class, 'transactions'])->name('users.transactions');
Route::get('profile', [UserController::class, 'profile'])->name('users.profile');