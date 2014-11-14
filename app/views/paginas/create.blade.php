@extends('layouts.default')

@section('header')
 {{ HTML::style('assets/css/dashboard.css') }}
 <meta name="_token" content="{{ csrf_token() }}"/>
@stop

@title('Página')

@section('content')

    {{ navbar();  }}

    <div class="container-fluid">
        <div class="row">

        {{ sidebar($paginas);  }}

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Crear página</h1>

                 {{ Form::open(['route' => 'paginas.store', 'class'=>'form-horizontal', 'id'=>'frmCreate']) }}
                  <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control required" name="nombre" />
                    </div>
                       {{$errors->first('nombre', '<span class=error>:message</span>')}}
                  </div>
                  <div class="form-group">
                    <label for="descripcion" class="col-sm-2 control-label">Descripción</label>
                    <div class="col-sm-10">
                      <textarea name="descripcion" class="form-control" id="descripcion"></textarea>
                    </div>
                    {{$errors->first('descripcion', '<span class=error>:message</span>')}}
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                       <a href="#" id="btnSubmit" class="btn btn-success btn-submit"
                                       data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Guardando...">
                                      <i class="fa fa-save"></i> Guardar
                                  </a>
                    </div>
                  </div>
                {{ Form::close() }}

            </div>
        </div>
    </div>
@stop

@section('scripts')

{{ HTML::script('assets/js/plugins/jquery-validation-1.13.1/dist/jquery.validate.min.js') }}
{{ HTML::script('assets/js/plugins/jquery-validation-1.13.1/dist/localization/messages_es.min.js') }}

<script type="text/javascript">

    var $form = $("#frmCreate");

    function doSubmit() {
        if($form.valid()) {
            $("#btnSubmit").button('loading');
            $form.submit();
        }
    }
    $(function() {
          $.ajax({
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
            type: "POST",
//            url : base_url+"/paginas/validarNombre",
            url:"{{ action('PaginasController@validarNombre') }}",
            data : {
                id:"id",
                nombre: "nombre"
            },
            success : function(data){
                console.log(data);
            }
        });

        $form.validate({
            errorElement:"div",
            errorClass: "label label-danger",
            errorPlacement: function(error, element) {
                if(element.parent().hasClass("input-group")) {
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element);
                }
            },
            highlight: function(element, errorClass) {
                $(element).parents(".form-group").addClass("has-error");
            },
            unhighlight: function(element, errorClass) {
                $(element).parents(".form-group").removeClass("has-error");
            }
        });
        $("#btnSubmit").click(function() {
            doSubmit();
            return false;
        });
        $("input").keyup(function(ev) {
            if(ev.keyCode == 13) {
                doSubmit();
            }
        });
    })
</script>
@stop