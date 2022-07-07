<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function login()
    {
        return view("pages.login");
    }

    public function auth(Request $request)
    {   
        $data = [
            "channel_id" => $request->email,
            "password" => $request->password
        ];
        $response = Http::accept('application/json')->post('http://localhost:3000/auth/login', $data);
        $jsonResponse = json_decode($response);
        dd($jsonResponse); 
    }

    public function register(Request $request)
    {   
        $data = [
            "channel_id" => $request->email,
            "password" => $request->password
        ];
        $response = Http::accept('application/json')->post('http://localhost:3000/auth/login', $data);
        $jsonResponse = json_decode($response);
        dd($jsonResponse); 
    }
}
