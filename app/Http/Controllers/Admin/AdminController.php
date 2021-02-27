<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $total_users = count(User::all());
        $total_deposits = count(Transaction::where('type', 'deposit')->get());
        $total_withdrawals = count(Transaction::where('type', 'withdrawal')->get());
        return view('admin.dashboard', [
            'total_users' => $total_users,
            'total_deposits' => $total_deposits,
            'total_withdrawals' => $total_withdrawals
        ]);
    }
    public function users()
    {
        $users = User::with('transactions')->latest()->get();
        return view('admin.users.index', [
            'users' => $users
        ]);
    }

    public function deposits()
    {
        $deposits = Transaction::where('type', 'deposit')->with('owner')->get();
        return view('admin.users.deposits', [
            'deposits' => $deposits
        ]);
    }

    public function withdrawals()
    {
        $withdrawals = Transaction::where('type', 'withdrawal')->with('owner')->get();
        return view('admin.users.withdrawals', [
            'withdrawals' => $withdrawals
        ]);
    }

    public function settings()
    {
        return view('admin.users.settings');
    }
}
