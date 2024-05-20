<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function register(UserRequest $request)
    {
        $user = $request->all();
        User::create($user);
        return redirect('/login');
    }

    // public function login(UserRequest $userRequest)
    // {
    //     $user = $request->only(['email', 'password']);
    // }
}
