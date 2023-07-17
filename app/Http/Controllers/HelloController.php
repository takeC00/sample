<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelloRequest;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Validator as ValidationValidator;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('people')->simplePaginate(5);
        return view('hello.index', ['items'=>$items]);
    }

    public function post(Request $request)
    {
        $validate_rule = [
            'msg' => 'required',
        ];
        $this->validate($request, $validate_rule);
        $msg = $request->msg;

        $response = response()->view('hello.index', [
            'msg' => '「' . $msg . '」をクッキーに保存しました'
        ]);
        $response->cookie('msg', $msg, 100);
        return $response;
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::insert('insert into people (name, mail, age)
            values(:name, :mail, :age)',$param);
        return redirect('/hello');
    }

    public function add(Request $requset)
    {
        return view('hello.add');
    }

    public function edit(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select * from people where id = :id', $param);
        return view('hello.edit', ['form' => $item[0]]);
    }

    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::update('update people set name = :name, mail = :mail, age = :age where id = :id', $param);
        return redirect('/hello');
    }

    public function del(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select * from people where id = :id', $param);

        return view('hello.del', ['form' => $item[0]]);
    }

    public function remove(Request $request)
    {
        $param = ['id' => $request->id];

        DB::delete('delete from people where id = :id', $param);
        return redirect('/hello');
    }

    public function show(Request $request)
    {
        $name = $request->name;
        $items = DB::table('people')->where('name', 'like', '%'.$name.'%')->orWhere('mail', 'like', '%'.$name.'%')->get();

        return view('hello.show', ['items' => $items]);
    }
    public function rest(Request $request)
    {
        return view('hello.rest');
    }

    public function sessionGet(Request $request)
    {
        $sesdata = $request->session()->get('msg');
        return view('hello.session', ['session_data' => $sesdata]);
    }

    public function sessionPut(Request $request)
    {
        $msg = $request->input;
        $request->session()->put('msg', $msg);
        return redirect('/hello/session');
    }
}
