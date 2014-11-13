@extends('layouts.default')

@title('En construcción')

@section('content')
<div class="top col-xs-12 col-md-12 col-lg-12"></div>
<div class="banner col-xs-12 col-md-12 col-lg-12">
    <img  class="imgBanner" src="{{ URL::asset('assets/images/montana2.jpg') }}" style="margin: 0px"/>
    <div class="row upper-row">

        <div class="logo col-xs-3 col-md-3 col-sm-3 col-lg-2 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
            <img class="imgBanner" src="{{ URL::asset('assets/images/logo.PNG') }}" style="width: 100%;margin: 0px"/>
        </div>

        <div class="col-lg-7 col-md-6 col-sm-7 col-xs-3 menu-horizontal col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-2" >
            <a href="#" class="btn-menu-horizontal col-lg-2 col-md-2 col-sm-2  col-xs-12 ui-corner-all active">INICIO</a>
            <a href="#" class="btn-menu-horizontal col-lg-2 col-md-2 col-sm-2 col-xs-12 ui-corner-all">NOSOTROS</a>
            <a href="#" class="btn-menu-horizontal col-lg-2 col-md-2 col-sm-2 col-xs-12 ui-corner-all">COMENTARIOS</a>
            <a href="#" class="btn-menu-horizontal col-lg-2 col-md-2 col-sm-2 col-xs-12 ui-corner-all">CONTACTO</a>
        </div>
    </div>


</div>
<div class="row bottom-row" >
    <div class="col-lg-4 col-lg-offset-1">
        Cultural and adventure!!
    </div>
</div>
@stop