<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use DataTables;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index(Request $request)
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

    public function create()
    {

    }
    public function getUsers()
    {
        $data = User::all();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="/admin/users/show/'.$row->id.'" class="show btn btn-primary btn-sm"><i class="fas fa-eye"></i></a> <a href="/admin/users/edit/'.$row->id.'" class="edit btn btn-success btn-sm"><i class="fas fa-pen"></i></a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
    }
    public function users()
    {
        $users = User::with('transactions')->latest()->paginate(5);
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

    public function delete_user($user)
    {

    }

    public function show(User $user)
    {
        $user->load('transactions');
        return view('admin.users.show', [
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', [
            'user' => $user
        ]);
    }

    public function delete(User $user)
    {
        $user->delete();
        return response()->json(['message' => 'user deleted!']);
    }
}
