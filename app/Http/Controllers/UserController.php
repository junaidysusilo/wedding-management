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

        return redirect(route('users.index'))->with('success', 'New user has been added');
    }

    public function edit(User $user)
    {
        return view('users.edit', [
            'user' => $user,
            'users' => User::all()
        ]);
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required'
        ];

        $validatedData = $request->validate($rules);

        User::where('id', $user->id)
            ->update($validatedData);

        return redirect(route('users.index'))->with('success', 'User has been updated');
    }

    public function destroy(User $user)
    {

        User::destroy($user->id);
        return redirect(route('users.index'))->with('success', 'User has been deleted!');
    }
}
