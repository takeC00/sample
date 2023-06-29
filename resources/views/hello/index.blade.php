@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ ※セクション(menubar)
@endsection

@section('content')
    <p>本文のコンテンツ</p>
    <p>これは、<middleware>google.com</middleware>へのリンクです</p>
    <p>これは、<middleware>yahoo.com</middleware>へのリンクです</p>
@endsection

@section('footer')
    copyright 2023 ※セクション(footer)
@endsection
