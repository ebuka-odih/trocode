<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function profile($id)
    {
        $user = User::findOrFail($id);
        return view('admin.profile', compact('user'));
    }

}
