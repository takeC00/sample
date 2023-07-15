@extends('layouts.helloapp')

@section('title', 'Board.Index')

@section('menubar')
    @parent
    boardページ
@endsection

@section('content')
    <table>
        <tr>
            <th>DATA</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{$item->getData()}}</td>
        </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2023 ※セクション(footer)
@endsection
