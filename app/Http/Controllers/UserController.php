<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $users = User::get();
        return view('user.index', compact('users'));
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return back();
    }

    public function delete(User $user): \Illuminate\Http\RedirectResponse
    {
        $user->delete();
        return back();
    }
}
