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
})->name('home');
Route::get('redirects', [HomeController::class, 'index']);
Route::middleware(['auth'])->group(function(){

    Route::middleware(['admin'])->group(function(){
        //admins routes
        Route::get('/admin/dashboard',[AdminController::class, 'index'])->name('admins.dashboard');
        Route::get('/admin/users',[AdminController::class, 'users'])->name('admins.users.index');
        Route::get('/admin/users/create',[AdminController::class, 'create'])->name('admins.users.create');
        Route::get('/admin/deposits',[AdminController::class, 'deposits'])->name('admins.users.deposits');
        Route::get('/admin/withdrawals',[AdminController::class, 'withdrawals'])->name('admins.users.withdrawals');
        Route::get('/admin/settings',[AdminController::class, 'settings'])->name('admins.users.settings');
        Route::get('/admin/users/show/{user}', [AdminController::class, 'show'])->name('admins.users.show');
        Route::get('/admin/users/edit/{user}', [AdminController::class, 'edit'])->name('admins.users.edit');
        Route::delete('/admin/users/destroy/{user}', [AdminController::class, 'delete'])->name('admins.users.destroy');
        Route::get('/admin/users/list', [AdminController::class, 'getUsers'])->name('admins.users.list');
    });
    Route::middleware(['user'])->group(function(){
        //users routes
        Route::get('dashboard', [UserController::class, 'index'])->name('users.dashboard');
        Route::get('deposits', [UserController::class, 'deposits'])->name('users.deposits');
        Route::get('withdrawals', [UserController::class, 'withdrawals'])->name('users.withdrawals');
        Route::get('transactions', [UserController::class, 'transactions'])->name('users.transactions');
        Route::get('profile', [UserController::class, 'profile'])->name('users.profile');
    });
});


//guest routes
Route::get('/about_us', function(){
    return view('about_us', ['title' => 'About']);
})->name('about_us');
Route::get('/faq', function(){
    return view('faq');
})->name('faq');
Route::get('/getting_started', function(){
    return view('getting_started');
})->name('getting_started');
Route::get('/refferal_program', function(){
    return view('refferal_program');
})->name('refferal_program');
Route::get('/support', function(){
    return view('support');
})->name('support');
Route::get('/our_rules_agreement', function(){
    return view('our_rules_agreement');
})->name('our_rules_agreement');