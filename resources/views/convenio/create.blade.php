@extends("theme.$theme.layout")
@section('titulo')
Paises
@endsection
@section('content')
@section('titulo1')
Convenios
@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset("assets/ufps/plugins/fancybox/css/jquery.fancybox.min.css")}}">
<link rel="stylesheet" href="{{asset("assets/lte/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset("assets/lte/bower_components/font-awesome/css/font-awesome.min.css")}}">
<!-- Ionicons -->
<link rel="stylesheet" href="{{asset("assets/lte/bower_components/Ionicons/css/ionicons.min.css")}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset("assets/lte/dist/css/AdminLTE.min.css")}}">
<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="{{asset("assets/lte/dist/css/skins/_all-skins.min.css")}}">
@endsection

<div class="wrapper">
        <!-- Inicio Header Noticia-->
        @include("theme/$theme/headertitulo")
        <!-- Fin Header Noticias-->
</div>
<!--=== Content Part ===-->
<div class="container conte nt profile">
        <div class="row">
                <!--CONTENIDO-->
                <div class="col-md-12 col-sm-8 mb-margin-bottom-30">

                        <div class="row">
                                <div class="col-md-12">
                                        <div class="headline">
                                                <h1 style="color:#555;">Agregar Convenio</h1>
                                        </div>
                                </div>
                        </div>

                        <div class="row">
                                <div class="col-md-10">
                                        @if ( session('mensaje') )
                                        <div class="alert alert-success">{{ session('mensaje') }}</div>
                                        @endif

                                        <form  method="POST" action="{{route('store')}}">
                                                @csrf

                                                <input type="text" name='codigoConvenio' class="form-control"
                                                        placeholder="codigo">
                                                <label></label>
                                                <input type="text" name='tituloConvenio' class="form-control"
                                                        placeholder="titulo">
                                                <label></label>
                                                <input type="text" name='objetoConvenio' class="form-control"
                                                        placeholder="objeto">
                                                <label></label>
                                                <input type="text" name='vigenciaConvenio' class="form-control"
                                                        placeholder="vigencia">
                                                <label></label>
                                                <input type="text" name='fechaExpedicion' class="form-control"
                                                        placeholder="expedicion">
                                                <label></label>
                                                <input type="text" name='fechaTerminacion' class="form-control"
                                                        placeholder="terminacion">
                                                <label></label>

                                                <select name="idPais" class="form-control">
                                                        <option value=""> Seleccione..</option>
                                                        @foreach ($paises as $pais)

                                                        <option value="{{$pais->idPais}}">
                                                                       {{$pais->nombrePais}}</option>

                                                        @endforeach
                                                </select>

                                                <div class="box-footer">
                                                        <button type="submit" class="btn btn-primary">Agregar</button>
                                                </div>
                                        </form>
                                </div>

                        </div>

                </div>

        </div>
</div>

@endsection