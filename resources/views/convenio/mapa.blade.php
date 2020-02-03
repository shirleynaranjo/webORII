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
	$(function () {
            $(".mapcontainer").mapael({
                map: {
                    name: "world_countries"
					, zoom: {
                        enabled: true,
						mousewheel:true,
						touch:true,
                        maxLevel: 15
                    },
                    defaultArea: {
                        attrs: {
                            fill: "#EAE3D8"
                            , stroke: "#EAE3D8"
                        }
                        , attrsHover: {
                            fill: "#A49E91"
                        }
                        , text: {
                            attrs: {
                                fill: "#505444"
                            }
                            , attrsHover: {
                                fill: "#000"
                            }
                        }
                    }
                },
                // Customize some areas of the map

                areas: {
					// "AE" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "AF" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "AL" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "AM" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "AO" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},*/
					// "AR" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Argentina</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "AT" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},*/
					// "AU" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Australia</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "AZ" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "BA" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},*/
					// "BD" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Bangladesh</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "BE" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "BF" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "BG" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "BI" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "BJ" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: "},*/
					// "BN" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Brunéi</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "BO" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Bolivia</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},*/
					// "BR" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Brasil</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "BS" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "BT" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "BW" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "BY" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "BZ" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "CA" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Canada</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "CD" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "CF" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "CG" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "CH" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "CI" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},*/
					// "CL" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Chile</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "CM" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "CN" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>China</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},*/
					// "CO" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Colombia</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "CR" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Costa Rica</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "CU" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Cuba</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "CY" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "CZ" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>República Checa</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "DE" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Alemania</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "DJ" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "DK" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "DO" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>República Dominicana </b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "DZ" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "EC" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Ecuador</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "EE" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "EG" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "ER" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},*/
					// "ES" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>España</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "ET" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "FI" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Finlandia</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "FJ" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Fiji</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "FK" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "FR" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Francia</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "GA" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "GB" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "GE" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Georgia</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "GH" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "GL" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "GM" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "GN" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "GQ" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: "},
					// "GR" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: "},*/
					// "GT" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Guatemala</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "GW" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "GY" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "HK" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Hong Kong</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "HN" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "HR" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: "},
					// "HT" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "HU" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Hungría</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "ID" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Indonesia</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "IE" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "IL" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Israel</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "IN" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>India</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "IQ" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "IR" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Irán</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "IS" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},*/
					// "IT" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Italia</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "JM" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "JO" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "JP" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Japón</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "KE" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "KG" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "KH" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Cambodia</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "KO" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "KP" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "KR" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Corea del Sur</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "KW" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "KZ" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Kazakhstan</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "LA" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "LB" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "LK" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: "},
					// "LR" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "LS" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "LT" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "LU" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "LV" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "LY" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "MA" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "MD" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "ME" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "MG" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "MK" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "ML" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "MM" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "MN" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Mongolia</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "MO" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Macao</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "MR" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "MW" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},*/
					// "MX" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>México</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "MY" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Malasia</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "MZ" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "NA" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "NC" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "NCY" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "NE" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: "},
					// "NG" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "NI" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},*/
					// "NL" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Holanda</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},*/
					// "NO" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "NP" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "NZ" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "OM" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},*/
					// "PA" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Panamá</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},*/
					// "PE" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "PG" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "PH" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Filipinas </b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "PK" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "PL" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Polonia</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "PR" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Puerto Rico</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},*/
					// "PS" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "PT" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Portugal</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "PY" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "QA" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "RO" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Rumania</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "RS" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "RU" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "RW" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "SA" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "SB" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "SD" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "SE" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "SI" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "SK" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "SL" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "SN" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "SO" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "SOL" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "SR" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "SS" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "SV" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "SY" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "SZ" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "TD" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "TF" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "TG" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "TH" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Tailandia</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "TJ" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "TL" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "TM" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "TN" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},*/
					// "TR" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Turquía</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "TT" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "TW" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Taiwan</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "PE" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Perú</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},*/
					// "TZ" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "UA" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "UG" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},*/
					// "US" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Estados Unidos</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "UY" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Uruguay </b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "UZ" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},*/
					// "VE" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Venezuela</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "VN" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Vietnam</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "VU" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "WS" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Samoa</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "YE" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "ZA" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b>Sudáfrica</b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "ZM" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""},
					// "ZW" : {text: {content: "", attrs: {"font-size": 12}},tooltip: {content: "<b></b> <br /> "},attrs: {fill: "#500101"}, attrsHover: {fill: "#800101"}, href: ""}*/	
					}
            });
        });
</script>

@endsection
@endsection