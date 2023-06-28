@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ ※セクション(menubar)
@endsection

@section('content')
    <p>本文のコンテンツ ※セクション(content)</p>
    <p>必要なだけ記述できる ※セクション(content)</p>

    @component('components.message')
        @slot('msg_title')
        CAUTION!
        @endslot

        @slot('msg_content')
        これはメッセージの表示です。
        @endslot
    @endcomponent
@endsection

@section('footer')
    copyright 2023 ※セクション(footer)
@endsection
