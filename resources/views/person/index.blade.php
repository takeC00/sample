@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
    Person.index
@endsection

@section('content')
    <table>
        <tr>
            <th>PERSON</th>
            <th>BOARD</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{$item->getData()}}</td>
            <td>
                @if($item->board != null)
                    {{$item->board->getData()}}
                @endif
            </td>
        </tr>
        @endforeach
    </table>
@endsection
