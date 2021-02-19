<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.dashboard');
    }
    public function transactions()
    {
        $user = User::find(auth()->user()->id);
        $transactions = $user->transactions()->get();
        return view('users.transactions', [
            'transactions' => $transactions
        ]);
    }
    public function deposits()
    {
        $user = User::find(auth()->user()->id);
        $deposits = $user->transactions()->where('type', 'deposit')->get();
        return view('users.deposits', [
            'deposits' => $deposits
        ]);
    }

    public function withdrawals()
    {
        $user = User::find(auth()->user()->id);
        $withdrawals = $user->transactions()->where('type', 'withdrawal')->get();
        return view('users.withdrawals', [
            'withdrawals' => $withdrawals
        ]);
    }

    public function profile()
    {
        return view('users.profile');
    }
}
