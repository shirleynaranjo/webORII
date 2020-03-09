@extends("theme.form.layout")
@section('titulo')
Eventos
@endsection

@section('content')
@section('style')
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{{asset("assets/lte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css")}}">
<!-- daterange picker -->
<link rel="stylesheet" href="{{asset("assets/lte/bower_components/bootstrap-daterangepicker/daterangepicker.css")}}">
<!-- Bootstrap time Picker -->
<link rel="stylesheet" href="{{asset("assets/lte/plugins/timepicker/bootstrap-timepicker.min.css")}}">
@endsection
<div class="row">
    <div class="col-lg-12">
        {{-- @include('includes.error_form')
        @include('includes.mensaje') --}}
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title"> Crear Evento </h3>
                <div class="box-tools with-border">
                   {{-- <a href="{{route('pais')}}" class="btn btn-block btn-info btn-sm"> --}}
                      <i class="fa fa-fw fa-reply-all"></i>
                      Volver al listado
                   </a>
                </div>
            </div>
            <form class="form-horizontal">
            {{-- <form action="{{route('guardar_pais')}}" id="form-general" class="form-horizontal" 
              method="POST" autocomplete="off"> --}}
            @csrf
                 <div class="box.body">
                     @include('evento.form')
                 </div>
                 <div class="box-footer">
                     <div class="col-lg-3"></div>
                     <div class="col lg-6">
                        {{-- @include('includes.button_form_crear') --}}
                     </div>   
                 </div>
            </form>     
        </div>
    </div>    
</div>

@section('script')
<!-- bootstrap datepicker -->
<script src="{{asset("assets/lte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js")}}"></script>
<script src="{{asset("assets/lte/bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.es.min.js")}}" charset="UTF-8"></script>
<!-- bootstrap time picker -->
<script src="{{asset("assets/lte/plugins/timepicker/bootstrap-timepicker.min.js")}}"></script>
<!-- CK Editor -->
<script src="{{asset("assets/lte/bower_components/ckeditor/ckeditor.js")}}"></script>
<script>
     //Date picker
     $('#datepicker').datepicker({
      autoclose: true,
      language:'es'     
    })    
    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
</script>
@endsection

@endsection