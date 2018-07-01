<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\User;

class registercontroller extends Controller
{
    /**
     * @return string
     */
    function register(){
        return view("register");
    }

    function register_post(RegisterRequest $request){

        $inputs = $request ->input();
        $first_name = $inputs{"first_name"};
        $last_name  = $inputs{"last_name"};
        $username   = $inputs{"username"};
        $password   = $inputs{"password"};

        $user = new User();
        $user -> first_name =$first_name;
        $user -> last_name  =$last_name;
        $user -> username   =$username;
        $user -> password   =bcrypt($password);
        $result             =$user->save();

          if ($result){
              return "success";
          }else{
              return "fail";
          }}


          public function home(){
              $users =User::all();
              return view("home")->with(['user_data'=>$users]);
        }

       // dd($first_name,$last_name,$user_name,$password);


}
