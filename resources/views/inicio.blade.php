@extends("theme.$theme.layout")
@section('titulo')
INICIO
@endsection

{{-- @section('style')
<link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/owl.carousel.min.css")}}">
@endsection --}}

@section('content')

<div class="row no-margin">
    <div class="col-md-12 no-padding">
        <ul class="pgwSlider">
            @foreach ($noticias as $noticia)
            <li>
                <a href="{{route('noticia_completa', ['idNoticia'=> $noticia->idNoticia])}}">
                    <img src="https://ww2.ufps.edu.co/public/imagenes/noticia/d287e266298bc4a49e0bd4b56b8f07dd.jpg"
                        alt="{{$noticia->tituloNoticia}}">
                    <span style="font-family: inherit; font-weight: bold;"> {{$noticia->tituloNoticia}} </span> </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>

<div style="background-color: #e8e8e8; ">
    <div class="container content-prin profile">
        <div class="row margin-top-10">
            <div class="headline-center-v2 headline-center-v2-dark margin-bottom-10">
                <h1 style="font-size: 30px;"><b>Eventos</b></h1>
                <span class="bordered-icon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
            </div>
            <div class="col-md-12">
                <div class="row equal-height-columns margin-bottom-10">
                    <div class="container">
                        <ul class="row block-grid-v2">
                            @foreach ($eventos as $evento)

                            <a href="{{route('evento_completa', ['idEvento'=> $evento->idEvento])}}"  style="text-align: center;">
                            <li class="col-md-3 col-sm-6 md-margin-bottom-30" style="padding-left: 14px;">
                                <div class="easy-block-v1-badge rgba-red" style="color:#fff; padding: 5px;">
                                    {{$evento->fechaEvento}}</div>
                                <em class="overflow-hidden">
                                    <img class="img-responsive"
                                        src="https://ww2.ufps.edu.co/public/imagenes/noticia/4af2356e60829f570d05261bf9aa72ec.jpg"
                                        alt="Imagen de eventos">
                                </em>
                                <div class="block-grid-v2-info rounded-bottom bloques_eventos">
                                    <span>
                                        <strong>{{$evento->tituloEvento}}</strong><br>
                                        <i>Lugar: {{$evento->fechaEvento}}</i>
                                    </span>
                                </div>
                            </li>
                            </a>

                            @endforeach
                        </ul>
                        <a href="{{route('evento')}}" class="btn-u btn-u-sm pull-right tooltips"
                            data-toggle="tooltip" data-placement="left"
                            data-original-title="Ver m&aacute;s novedades">Ver más <i class="fa fa-chevron-circle-right"
                                aria-hidden="true"></i></a>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection