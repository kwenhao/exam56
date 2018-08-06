@extends('layouts.app')

@section('content')
        <h1>隨機題庫系統</h1>
@endsection

@section('my_menu')
    @parent
    <li><a class="nav-link" href="/add">我的選項</a></li>
@stop