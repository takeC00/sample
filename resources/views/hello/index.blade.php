@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ ※セクション(menubar)
@endsection

@section('content')
    <p>本文のコンテンツ ※セクション(content)</p>
    <p>必要なだけ記述できる ※セクション(content)</p>
@endsection

@section('footer')
    copyright 2023 ※セクション(footer)
@endsection
