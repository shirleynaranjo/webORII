@extends("theme.$theme.layout")
@section('titulo')
Convocatoria
@endsection
@section('content')

@section('titulo1')
Convocatorias
@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset("assets/ufps/plugins/dataTables/css/dataTables.bootstrap.min.css")}}">
@endsection

<div class="wrapper">
    <!-- Inicio Header Noticia-->
    @include("theme/$theme/headertitulo")
    <!-- Fin Header Noticias-->
</div>


<div class="container content profile">
    <div class="row">
        <div class="col-md-12">
            <div class="box-body table-responsive no-padding">
                <table id="table_noticia" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width: 20%">Convocatoria</th>
                            <th style="width: 10%">Oferente</th>
                            <th>Fecha de cierre</th>
                            <th>Vigencia</th>
                            <th>Información</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($convocatorias as $convocatoria)
                        <tr>
                            <td>{{$convocatoria->nombreConvocatoria}}</td>
                            <td>{{$convocatoria->oferenteConvocatoria}}</td>
                            <td><i style="text-transform: none; color: #AA1916;">{{$convocatoria->fechaCierre}}</i></td>
                            <td>{{$convocatoria->vigenciaConvocatoria}}</td>
                            <td><i style="text-transform: none; color: #AA1916;">{{$convocatoria->informacion}}</i></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <!-- Inicio Header Noticia-->
        @include("noticia/footerultimasnoticia")
        <!-- Fin Header Noticias-->
</div>
</div>

@section('script')
<!-- DataTables-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
<script src="{{asset("assets/ufps/plugins/dataTables/js/main.min.js")}}" charset="utf-8"></script>
<script src="{{asset("assets/ufps/plugins/dataTables/js/jquery.dataTables.min.js")}}" charset="utf-8"></script>
<script src="{{asset("assets/ufps/plugins/dataTables/js/dataTables.bootstrap.min.js")}}" charset="utf-8"></script>

@endsection
@endsection