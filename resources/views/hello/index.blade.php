@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ ※セクション(menubar)
@endsection

@section('content')
    <p>{{$msg}}</p>
    @if(count($errors) > 0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
            <li> {{$error}} </li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/hello" method="post">
        <table>
            @csrf
            <tr>
                <th>name: </th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>mail: </th>
                <td><input type="text" name="mail"></td>
            </tr>
            <tr>
                <th>age: </th>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="送信"></td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')
    copyright 2023 ※セクション(footer)
@endsection
