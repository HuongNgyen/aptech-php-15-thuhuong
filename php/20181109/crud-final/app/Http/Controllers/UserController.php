<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }
    public function show($id){
        $user = User::find($id);
        return view('users.show', ['user' => $user]);
    }
    public function destroy($id)
    {

        $user = User::destroy($id);
        
        return redirect()->route('users.index');
    }
    public function create()
    {
        return view('users.create');
    }

    // function luu tru nguoi dung
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        // $user = DB::table('users')->insert([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);
        return redirect()->route('users.index');
    }
    public function edit($id) //gia tri so lay id do de chinh sua
    {
        $user = User::find($id);
        return view('users.edit', ['users' => $user]);
    }
   
    public  function update(Request $request,$id){

        //dd($id, $request->all();)
        /*
        $user = User::find($id)
        $user->update([
            $user->name=$request->name;
            $user->email=$request->email;
            $user->password=$request->password;
        ])
        khong can save();
        */
        $user = User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();
        return redirect('/users');
    }

}
