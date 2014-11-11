@extends('layouts.default')

@section('title')
Create user
@stop

@section('content')
    <h1>Create new user</h1>
    {{ Form::open(['route' => 'users.store']) }}
        <div>
            {{Form::label('email', 'Email')}}
            {{Form::text('email')}}
            {{$errors->first('email', '<span class=error>:message</span>')}}
        </div>
        <div>
            {{Form::label('password', 'Password')}}
            {{Form::password('password')}}
            {{$errors->first('password', '<span class=error>:message</span>')}}
        </div>
        <div>
            {{Form::submit('Create user')}}
        </div>
    {{ Form::close() }}
@stop