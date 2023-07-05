<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelloRequest;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Validator as ValidationValidator;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->query(),[
            'id' => 'required',
            'pass' => 'required',
        ]);
        if($validator->fails()){
            $msg = 'クエリに問題があります';
        } else {
            $msg = 'ID, PASSを受け付けました。フォームを入力してください。';
        }
        return view('hello.index', ['msg' => $msg]);
    }

    public function post(HelloRequest $request)
    {
        return view('hello.index', ['msg'=>'正しくちゃんと入力されました']);
    }
}
