@extends("theme.$theme.layout")
@section('titulo')
Visió
@endsection
@section('content')

@section('titulo1')
Oficina de Relaciones Interinstitucionales e Internacionales
@endsection

<div class="wrapper">
    <!-- Inicio Header -->
    @include("theme.$theme.headertitulo")
    <!-- Fin Header -->
</div>

{{-- Contenido --}}

@include("theme.$theme.menuinformacion")

<div class="container conte nt profile">
    <div class="row">

            <div class="col-md-12 col-sm-8 mb-margin-bottom-30">
                    <div class="row">
                            <div class="col-md-12">
                                    <div class="headline">
                                        <h5>
                                            <p>{{$presentacion->vision}}</p>
                                    </div>

                            </div>

                    </div>
            </div>
    </div>
    <div class="wrapper">
                    <!-- Inicio Header Noticia-->
                    @include("noticia/footerultimasnoticia")
                    <!-- Fin Header Noticias-->
            </div>
    </div>

</div>

@endsection