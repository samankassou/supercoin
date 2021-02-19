<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if(auth()->user()->role == 'admin'){
            return redirect()->route('admins.dashboard');
        }elseif(auth()->user()->role == 'user'){
            return redirect()->route('users.dashboard');
        }
    }
}
