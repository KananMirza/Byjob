<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;


class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register']]);
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');

        $token = Auth::attempt($credentials);
        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
            ], Response::HTTP_UNAUTHORIZED);
        }
        $user = Auth::user();
        $user->jwt_token = $token;
        $user->save();
        return response()->json([
            'status' => 'success',
            'user' => $user,
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ], Response::HTTP_OK);
    }
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), Response::HTTP_BAD_REQUEST);
        }
        $user  = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user
        ], Response::HTTP_CREATED);
    }
    public function logout()
    {
        Auth::logout();
        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ], Response::HTTP_OK);
    }
    public function me()
    {
        return response()->json([
            'status' => 'success',
            'user' => Auth::user(),
        ]);
    }
    public function getUser(){
        $user = User::all();
        return response()->json($user,Response::HTTP_OK);
    }
}
