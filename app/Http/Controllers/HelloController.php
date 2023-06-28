<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        //$idは
        //ルートパラメータを/hello?id=hogeで渡せる
        $data = [
            'msg' => 'message',
            'id' => $request->id
        ];

        return view('hello.index', $data);
    }
}
