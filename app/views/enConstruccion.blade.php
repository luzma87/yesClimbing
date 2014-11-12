@extends('layouts.default')

@title('En construcción')

@section('content')
    <div class="alert alert-warning" style="margin: 50px;">
        <i class="fa fa-warning fa-2x" style="margin-right: 10px;"></i>
        Sitio en construcción 
        <img src="{{ URL::asset('assets/images/working.GIF') }}" alt="En construcción"/>
    </div>
@stop