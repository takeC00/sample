<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $data = ['msg' => 'message'];
        
        return view('hello.index', $data);
    }
}