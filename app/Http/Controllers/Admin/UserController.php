<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return Inertia::render('Admin/Users/AllUser', [
            'users' => $users
        ]);
    }
    public function create()
    {
        return Inertia::render('Admin/Users/CreateUser');
    }

    public function store()
    {
        // dd(request()->all());
        User::create([
            'name' => request()->name,
            'email' => request()->email,
            'password' => Hash::make(request()->password),

        ]);
        return to_route('admin.users.index');
    }
    public function edit(User $user)
    {
        return Inertia::render('Admin/Users/UpdateUserInfo', [
            'user' => $user
        ]);
    }

    public function update(User $user)
    {
        // dd(request()->all(), request()->has('password'));

        $user->name = request()->name;
        $user->email = request()->email;
        if (request()->has('password')) {
            $user->password = Hash::make(request()->password);
        } else {
            $user->password = $user->password;
        }
        $user->update();
        return to_route('admin.users.index');

    }

    public function delete(User $user){
      $user->delete();
      return to_route('admin.users.index');

    }
}
