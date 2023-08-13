<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('users.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('users.create', [
            'users' => User::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create($validatedData);

        return redirect('/users')->with('success', 'New user has been added');
    }
}
