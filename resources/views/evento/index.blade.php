@extends("theme.$theme.layout")
@section('titulo')
Eventos
@endsection
@section('content')

@section('titulo1')
Eventos
@endsection
@section('style')
<link rel="stylesheet" type="text/css"
    href="{{asset("assets/ufps/plugins/dataTables/css/dataTables.bootstrap.min.css")}}">
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
                            <th>Titulo</th>
                            <th style="width: 20%">Lugar</th>
                            <th style="width: 20%">Fecha</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($eventos as $evento)
                        <tr>
                            <td>
                                <a href="{{route('evento_completa', ['idEvento'=> $evento->idEvento])}}">
                                    {{$evento->tituloEvento}}
                                </a>
                            </td>
                            <td>{{$evento->lugarEvento}}</td>
                            <td>{{$evento->fechaEvento}}</td>
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