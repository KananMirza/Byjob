<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class AuthController extends Controller
{
    public function getUser(){
        $user = User::all();
        return response()->json($user,Response::HTTP_OK);
    }
}
