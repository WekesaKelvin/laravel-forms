<?php

namespace App\Http\Controllers;
use hash;
error_reporting(E_ALL);
ini_set('display_errors', 1);

use Illuminate\Http\Request;
use App\Models\user;

class musifyAuthController extends Controller
{
    public function login (){
        return view("auth.login");
    }
    public function registration(){
        return view ("auth.registration");

    }
    public function registeruser(Request $request)
    {
        $request -> validate([
            'name'=>'required',
            'email'=>'required|unique:users,email',
            'password'=>'required|min:4|max:12',
        ]);
        $user = new User();
        $user-> name =$request->name;
        $user-> email = $request->email;
        $user-> password =$request -> password;
        $res = $user ->save();
        if($res){
            return back ()->with('success','you have registered successfully');
        }else{
            return back()->with ('fail','Check your details');
        }
    }
}
