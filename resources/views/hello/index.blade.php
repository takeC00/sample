@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ ※セクション(menubar)
@endsection

@section('content')
    <form action="/hello" method="post">
        <table>
            @csrf
            @if(count($errors) > 0)
            <p>入力に問題があります。</p>
            @endif

            @error('name')
            <tr>
                <th>ERROR</th>
                <td>{{ $message }}</td>
            </tr>
            @enderror
            <tr>
                <th>name: </th>
                <td><input type="text" name="name" value={{old('name')}}></td>
            </tr>

            @error('mail')
            <tr>
                <th>ERROR</th>
                <td>{{ $message }}</td>
            </tr>
            @enderror
            <tr>
                <th>mail: </th>
                <td><input type="text" name="mail" value={{old('mail')}}></td>
            </tr>

            @error('age')
            <tr>
                <th>ERROR</th>
                <td>{{ $message }}</td>
            </tr>
            @enderror
            <tr>
                <th>age: </th>
                <td><input type="text" name="age" value={{old('age')}}></td>
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
