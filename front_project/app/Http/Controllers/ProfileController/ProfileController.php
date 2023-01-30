<?php

namespace App\Http\Controllers\ProfileController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profileIndex(){
        return view('profile.dashboard');
    }
}
