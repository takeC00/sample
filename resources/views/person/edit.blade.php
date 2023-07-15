@extends('layouts.helloapp')

@section('title', 'Person.add')

@section('menubar')
    @parent
    編集ページ
@endsection

@section('content')
    <form action = "/person/edit" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value={{$person->id}}>
            <tr>
                <th>name:</th>
                <td><input type="text" name="name" value="{{$person->name}}"></td>
            </tr>
            <tr>
                <th>mail:</th>
                <td><input type="text" name="mail" value="{{$person->mail}}"></td>
            </tr>
            <tr>
                <th>age:</th>
                <td><input type="text" name="age" value="{{$person->age}}"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="send"></td>
            </tr>
        </table>
    </form>
@endsection
