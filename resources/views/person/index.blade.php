@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
    Person.index
@endsection

@section('content')
    <table>
        @foreach($items as $item)
        <tr>
            <td>{{$item->getData()}}</td>
        </tr>
        @endforeach
    </table>
@endsection
