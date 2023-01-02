<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }
    public function login_post(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $response = Http::withHeaders([
            'X-Static-Token' => 'FYzkwEo9OnWOL2Zre2X9n9CWvud762SH',
        ])->post('http://127.0.0.1:8000/api/v1/login',[
            'email'=>$request->email,
            'password'=>$request->password,
        ])->json();

        $id = $response['user']['id'];
        if(!isset($id)){
            return redirect()->back()->with('error',true);
        }
        $token = $response['authorisation']['token'];
        setcookie('jwt_token', $token, time() + (86400 * 30), "/"); // 86400 = 1 day
        Auth::loginUsingId($id);
        return redirect()->route('profileIndex')->with('success',true);
    }
    public function register(){
        return view('register');
    }
    public function logout(){
        $token = $_COOKIE['jwt_token'];
        $response = Http::withHeaders([
            'JWT-Token' => $token,
        ])->post('http://127.0.0.1:8000/api/v1/logout')->json();
        dd($response);
    }
}
