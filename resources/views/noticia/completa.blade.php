@extends("theme.$theme.layout")
@section('titulo')
Noticia
@endsection
@section('content')

@section('titulo1')
Noticias
@endsection

<div class="wrapper">
        <!-- Inicio Header Noticia-->
        @include("theme/$theme/headertitulo")
        <!-- Fin Header Noticias-->
</div>
<!--=== Content Part ===-->
<div class="container content profile">
        <div class="row">

                <!--CONTENIDO-->

                <div class="col-md-12 col-sm-8 mb-margin-bottom-30">
                        <div class="row">
                                <div class="col-md-10">
                                        <div class="headline">
                                                <h1 style="color:#555;">{{$noticia->tituloNoticia}}</h1>
                                        </div>
                                </div>
                                <div class="col-md-12">
                                        <div class="news-v3 bg-color-white col-md-6 col-sm-12 col-xs-12">
                                                <!-- video -->
                                                <div class="margin-bottom-20">
                                                </div>

                                                <!-- VIDEO-->
                                                <div class="news-v3 bg-color-white">
                                                        <div class="responsive-video">
                                                                <iframe src="https://www.youtube.com/embed/JPeM8a5oVNs"
                                                                        frameborder="0" allowfullscreen></iframe>
                                                        </div>
                                                </div>
                                        </div>
                                        <!-- End Imagen -->
                                        <div class="text-right">
                                                <em>
                                                        <h6 style="color:#aa1916;">
                                                                <i class="fa fa-calendar"></i> Publicado el día
                                                                {{$noticia->fechaPublicacion}} / No. {{$noticia->idNoticia}} </h6>
                                                </em>
                                        </div>

                                        <div class="box-body">
                                                {{$noticia->descripcionNoticia}}
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

@endsection
