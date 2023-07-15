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
        @foreach($hasItems as $hasItem)
        <tr>
            <td>{{$hasItem->getData()}}</td>
            <td>
                <table>
                    @foreach ($hasItem->boards as $obj)
                        <tr>
                            <td>{{$obj->getData()}}</td>
                        </tr>
                    @endforeach
                </table>
            </td>
        </tr>
        @endforeach
    </table>
    <table>
        <th>
        投稿のないperson
        </th>
        @foreach ($noItems as $noItem)
            <tr>
                <td>{{$noItem->getData()}}</td>
            </tr>
        @endforeach
    </table>
@endsection
