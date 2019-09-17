@extends("theme.$theme.layout")
@section('titulo')
Convocatoria
@endsection
@section('content')

@section('titulo1')
Convocatorias
@endsection

<div class="wrapper">
    <!-- Inicio Header Noticia-->
    @include("theme/$theme/headertitulo")
    <!-- Fin Header Noticias-->
</div>


<div class="container content profile">
    <div class="row">
        <div class="col-md-9">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">Convocatoria</th>
                                <th>Organismo Oferente</th>
                                <th>Fecha de cierre</th>
                                <th style="width: 40px">Vigencia</th>
                                <th>Información</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($convocatorias as $convocatoria)
                            <tr>
                                <td>{{$convocatoria->nombreConvocatoria}}</td>
                                <td>{{$convocatoria->oferenteConvocatoria}}</td>
                                <td>{{$convocatoria->fechaCierre}}</td>
                                <td>{{$convocatoria->vigenciaConvocatoria}}</td>
                                <td>{{$convocatoria->informacion}}</td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection