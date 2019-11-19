@extends("theme.$theme.layout")
@section('titulo')
Experiencia
@endsection
@section('content')
@section('titulo1')
Experiencias
@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset("assets/ufps/plugins/fancybox/css/jquery.fancybox.min.css")}}">
<style>
        .thumbnail {
                border: 0px solid #ddd;
        }
</style>
@endsection
<div class="wrapper">
        <!-- Inicio Header Noticia-->
        @include("theme/$theme/headertitulo")
        <!-- Fin Header Noticias-->
</div>
<!--=== Content Part ===-->
<div class="container conte nt profile">
        <div class="row">

                <div class="col-md-12 col-sm-8 mb-margin-bottom-30">
                        <div class="row">
                                <div class="col-md-12">
                                        <div class="headline">
                                                <h1 style="color:#555;">​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​Los estudiantes
                                                        de UFPS que han hecho
                                                        intercambios comparten sus experiencias por medio de estos
                                                        videos, donde nos cuentan todo acerca de los lugares que
                                                        visitaron</h1>
                                        </div>

                                </div>

                        </div>
                        <div class="row">
                                @foreach ($exps as $exp)
                                <div class="col-md-4">
                                        <div class="thumbnail">
                                                <h3 style="text-align: center; color:#aa1916;">{{$exp->descripcion}}
                                                </h3>
                                                <div class="embed-responsive embed-responsive-4by3">
                                                        <iframe class="embed-responsive-item" src="{{$exp->enlace}}"
                                                                frameborder="0" allowfullscreen></iframe>
                                                </div>
                                        </div>
                                </div>
                                @endforeach
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


@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
<script src="{{asset("assets/ufps/plugins/fancybox/js/jquery.fancybox.min.js")}}" charset="utf-8"></script>
<script>
        $('.card-deck a').fancybox({
  caption : function( instance, item ) {
    return $(this).parent().find('.card-text').html();
  }
});
</script>


@endsection
@endsection