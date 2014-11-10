@extends('layouts.default')

@section('title')
View user
@stop

@section('content')
    <h1>Hello, {{ $user->username }}</h1>
@stop