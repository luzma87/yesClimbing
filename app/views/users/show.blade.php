@extends('layouts.default')

@section('title')
View user
@stop

@section('content')
    <h1>Hello, {{ $user->email }}</h1>
@stop