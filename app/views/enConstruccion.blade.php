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
    <div class="row info-row hidden-xs "   >
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-10  col-lg-offset-1  col-md-offset-1 col-sm-offset-1 col-xs-offset-1 info-text">
            Cumbre Illiniza Sur 5248 msnm, Ciudad Encantada
        </div>
        <div class="col-lg-3 col-md-3  col-sm-3  hidden-xs  info-icos">
            <img src="{{ URL::asset('assets/images/iconos.PNG') }}"  style="height: 90%" >
        </div>
    </div>

</div>

<div class="row bottom-row" >
    <div class="col-lg-3 col-xs-12  col-lg-offset-1 col-xs-offset-1" style="text-align: left;padding-left: 0px">
        Cultural and adventure!!!
    </div>
    <div class="col-lg-6  col-lg-offset-1  hidden-xs" style="text-align: right">
        Ecuador and South America Tour Operator
    </div>
</div>
@stop