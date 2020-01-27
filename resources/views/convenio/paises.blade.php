@extends("theme.$theme.layout")
@section('titulo')
Paises
@endsection
@section('content')
@section('titulo1')
Paises
@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset("assets/ufps/plugins/fancybox/css/jquery.fancybox.min.css")}}">
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
                                                <h1 style="color:#555;">​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​Paises</h1>
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