<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }
    public function userLogout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
    public function register(){
        return view('register');
    }
    public function login_post(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $login = $request->only(['email', 'password']);
        $user = User::where([['status','1'],['email',$request->email]])->first();
        if ($user){
            if (Auth::attempt($login)){
                return redirect()->route('profileIndex');
            }else{
                return redirect()->back()->withInput()->with('password',true);
            }
        }else{
            return redirect()->back()->withInput()->with('non_user',true);
        }
    }
}
