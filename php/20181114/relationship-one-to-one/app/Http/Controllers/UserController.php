<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::with('passport')->get()->toArray();
        return view('users.index', ['users' => $users]);
    }
}
