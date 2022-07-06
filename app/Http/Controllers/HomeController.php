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
        $response = Http::accept('application/json')->post('http://localhost:3000/auth/login', [
            "channel_id" => $request->email,
            "password" => $request->password
        ]);

        dd($response); 
    }
}
