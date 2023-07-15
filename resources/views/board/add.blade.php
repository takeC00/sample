@extends('layouts.helloapp')

@section('title', 'Add')

@section('menubar')
    @parent
    新規ページ
@endsection

@section('content')
    <form action ="/board/add" method="post">
    <table>
        @csrf
        <tr>
            <th>person id:</th>
            <td><input type="number" name="person_id"></td>
        </tr>
        <tr>
            <th>title:</th>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <th>message:</th>
            <td><input type="text" name="message"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="追加"></td>
        </tr>
    </table>
    </form>
@endsection
