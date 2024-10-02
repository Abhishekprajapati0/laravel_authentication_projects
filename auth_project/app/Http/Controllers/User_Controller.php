<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class User_Controller extends Controller
{
    //

    public function Home(){
        return view('front.Home');
    }
    public function register(){
        return view('front.Register');
    }
    public function login(){
        return view('front.Login');
    }

    public function Dash(){

        return view('front.Dashboard');

    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        $data= new User();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);

        $data->save();

        if($data){
            return redirect('/singup');
        }
        else{
            echo 'Please try again';
        }
    }


    public function logindata( Request $request){
        $request->validate([

            'email'=>'required',
            'password'=>'required',
        ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
         return redirect('/das');
        }
        else{
            return redirect('/singup');
        }
    }


    public function logout(Request $request){
        Auth::logout();
        return redirect('/singup');
    }
}
