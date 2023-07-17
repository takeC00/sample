@extends('layouts.helloapp')

@section('title', 'Board.Index')

@section('menubar')
    @parent
    boardページ
@endsection

@section('content')
    <table border="solid">
        <tr>
            <th>Title</th>
            <th>Message</th>
            <th>Name</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{$item->title}}</td>
            <td>{{$item->message}}</td>
            <td>{{$item->person->name}}</td>
        </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2023 ※セクション(footer)
@endsection
