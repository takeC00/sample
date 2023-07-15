@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
    Person.index
@endsection

@section('content')
    <table border="solid">
        <tr>
            <th>PERSON</th>
            <th>BOARD</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{$item->getData()}}</td>
            <td>
                @if($item->boards != null)
                <table>
                    @foreach ($item->boards as $obj)
                        <tr>
                            <td>{{$obj->getData()}}</td>
                        </tr>
                    @endforeach
                </table>
                @endif
            </td>
        </tr>
        @endforeach
    </table>
@endsection
