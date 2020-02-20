@extends("theme.$theme.layout")
@section('titulo')
Mapa de Convenios
@endsection

@section('style')
<style type="text/css">
	.mapael .map {
		position: relative;
		border-top: solid 0px;
		border-bottom: solid 0px;
	}

	/* For all zoom buttons */
	.mapael .zoomButton {
		background-color: #A4A4A4;
		border: 1px solid #E6E6E6;
		color: #000;
		width: 20px;
		height: 20px;
		line-height: 20px;
		text-align: center;
		border-radius: 0px;
		cursor: pointer;
		position: absolute;
		top: 0;
		font-weight: bold;
		left: 0px;

		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-o-user-select: none;
		user-select: none;
	}

	/*Reset Zoom button first */
	.mapael .zoomReset {
		top: 5px;
	}

	/* Then Zoom In button */
	.mapael .zoomIn {
		top: 25px;
	}

	/*Then Zoom Out button */
	.mapael .zoomOut {
		top: 45px;
	}

	.mapael .mapTooltip {
		position: absolute;
		background-color: #fff;
		moz-opacity: 0.70;
		opacity: 0.70;
		filter: alpha(opacity=70);
		border-radius: 10px;
		padding: 10px;
		z-index: 1000;
		max-width: 200px;
		display: none;
		color: #343434;
	}
</style>
@endsection

@section('content')
@section('titulo1')
Convenios
@endsection
<div class="wrapper">
	<!-- Inicio Header Noticia-->
	@include("theme/$theme/headertitulo")
	<!-- Fin Header Noticias-->
</div>

<div class="container content profile">
	<div class="row">
		<div class="col-sm-11">
			<div class="mapcontainer">
				<div class="map">
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper">
		<div class="row margin-top-60">
			<!-- Inicio Header Noticia-->
			@include("noticia/footerultimasnoticia")
		</div>
		<!-- Fin Header Noticias-->
	</div>

</div>



@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js" charset="utf-8">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>
<script type="text/javascript" src="{{asset("assets/ufps/js/jquery.mapael.js")}}"></script>
<script type="text/javascript" src="{{asset("assets/ufps/js/world_countries.js")}}"></script>

<script type="text/javascript">
var paises = "";
$(function () {
    $.ajax({
        url: "http://matricula.unisimoncucuta.edu.co/websiaa/json.php",
		dataType: "json",		
        success: function (data) {
			paises = JSON.parse(data);		
			console.dir(paises),	
					
                $(".mapcontainer").mapael({
					
                    map: {

                        name: "world_countries",
                        zoom: {
                            enabled: true,
                            mousewheel: true,
                            touch: true,
                            maxLevel: 15
                        },
                        defaultArea: {
                            attrs: {
                                fill: "#EAE3D8",
                                stroke: "#EAE3D8"
                            },
                            attrsHover: {
                                fill: "#A49E91"
                            },
                            text: {
                                attrs: {
                                    fill: "#505444"
                                },
                                attrsHover: {
                                    fill: "#000"
                                }
                            }
                        }
                    },
                    // Customize some areas of the map
                    areas: 		paises			
												
                    
                });
        }
    });
});
</script>

@endsection
@endsection