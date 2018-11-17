<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Passport;

class PassportController extends Controller
{
    //
    public function index(){
        $users = Passport::with('user')->get()->toArray();
        //dd($passports);
        return view('passports.index', ['users' => $users]);
    }
}
