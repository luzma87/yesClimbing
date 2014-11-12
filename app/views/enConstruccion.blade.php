@extends('layouts.default')

@title('En construcción')

@section('content')
<div class="top"></div>
    <div class="" style="margin: 50px;border:1px solid black">
        <i class="fa fa-warning fa-2x" style="margin-right: 10px;"></i>
        Sitio en construcción 
        <img src="{{ URL::asset('assets/images/working.GIF') }}" alt="En construcción"/>
    </div>
@stop