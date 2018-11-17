<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;
use App\User;

class UserPhoneController extends Controller
{
    //
    public function index()
    {
        $phones = Phone::all();
        return view('u-p.index', ['phones' => $phones]);
    }
}
