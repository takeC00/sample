@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
    Person.index
@endsection

@section('content')
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Mail</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <th>{{$item->name}}</th>
            <th>{{$item->age}}</th>
            <th>{{$item->mail}}</th>
        </tr>
        @endforeach
    </table>
@endsection
