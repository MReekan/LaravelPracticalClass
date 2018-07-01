<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    //

    function login(){
        return view("login");
    }

    function login_post(Request $request){

        $validatedData =$request->validate([
             'username' =>'required',
             'password' =>'required',
        ],[
            'username.required'=>'no username',
              'password.required'=>'no password' ,
        ]);

        $inputs = $request ->input();
       //dd($inputs);
        $username   = $inputs["username"];
        $password   = $inputs["password"];

        $user=new User();
        $user->username=$username;
        $user->password=bcrypt($password);



        if (Auth::attempt(['username'=>$username,'password'=>$password])){
          // dd("success");
            return redirect('/home');
        } else{
           // dd($inputs);
            return redirect('/login');
        }






    }
}
