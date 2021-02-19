<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function users()
    {
        $users = User::with('transactions')->latest()->get();
        return view('admin.users.index', [
            'users' => $users
        ]);
    }
}
