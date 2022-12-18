<?php

namespace App\Http\Controllers\GeneralController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GeneralController extends Controller
{
    public function index(){
        $response = Http::withHeaders([
            'X-Static-Token' => 'FYzkwEo9OnWOL2Zre2X9n9CWvud762SH',
        ])->get('http://127.0.0.1:8000/api/v1/User');
        dd($response->json());
        return view('index');
    }
}
