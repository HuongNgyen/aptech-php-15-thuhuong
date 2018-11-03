<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   
        public function index()
    {
        $users = DB::table('users')->get();

        return response() -> json($users);
        //return view('welcome',['users =>$users']);
                                //users ở đây là tên gọi biến bên view     
    }
 }
    

