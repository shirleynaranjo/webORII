<header class="main-header">
        
        <!--=== Header v6 ===-->
             <div id="menu-principal" class="header-v6 header-white-transparent header-sticky" 
                  style="position: relative;">
                  <div id="barra-superior" class="header-v8">
                  <!-- Topbar blog -->
                       <div class="blog-topbar">
                            <div class="topbar-search-block">
                                 <div class="container">
                                      <form action="">
                                            <input type="text" class="form-control" placeholder="Buscar...">
                                            <div class="search-close"><i class="icon-close"></i></div>
                                      </form>
                                 </div>
                            </div>
                            <div class="container">
                                 <div class="row">
                                      <div class="col-sm-7 col-xs-7">
                                           <div class="topbar-toggler" 
                                                style="font-size: 10px; color: #eee; letter-spacing: 1px; text-transform: uppercase;">
                                                <span class="fa fa-angle-down"></span> PERFILES</div>
                                                <ul class="topbar-list topbar-menu">
                                                    <li>
                                                        <a href="/universidad/perfiles/aspirantes/952">
                                                           <i class="fa fa-users"></i> Aspirantes</a>
                                                    </li>
                                                    <li>
                                                        <a href="/universidad/perfiles/estudiantes/953">
                                                           <i class="fa fa-user"></i> Estudiantes</a>
                                                    </li>
                                                    <li>
                                                        <a href="/universidad/perfiles/egresados/954">
                                                           <i class="fa fa-graduation-cap"></i> Egresados</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-user-secret"></i> Docentes</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-briefcase"></i> Administrativos</a>
                                                    </li>
                                                    <li class="cd-log_reg hidden-sm hidden-md hidden-lg">
                                                        <strong><a class="cd-signup" href="javascript:void(0);">Lenguaje</a></strong>
                                                        <ul class="topbar-dropdown">
                                                            <li><a href="#">Inglés</a></li>
                                                            <li><a href="#">Español</a></li>
                                                            <li><a href="#">Frances</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="cd-log_reg hidden-sm hidden-md hidden-lg">
                                                        <strong>
                                                               <a class="cd-signin" href="javascript:void(0);">
                                                                  <i class="fa fa-reply"></i> Versión Anterior</a>
                                                        </strong>
                                                    </li>
                                             </ul>
                                        </div>
                                        <div class="col-sm-5 col-xs-5 clearfix">
                                             <i class="fa fa-search search-btn pull-right"></i>
                                                <ul class="topbar-list topbar-log_reg pull-right visible-sm-block visible-md-block visible-lg-block">
                                                    <li class="cd-log_reg home" style="padding: 0px 12px;">
                                                        <div id="google_translate_element"></div>
                                                        <script type="text/javascript">
                                                          function googleTranslateElementInit() {
                                                                   new google.translate.TranslateElement({pageLanguage: 'es', includedLanguages: 'en,fr,it', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
                                                          }
                                                        </script>
                                                        <script type="text/javascript" 
                                                                src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                                                        </script>
                                                    </li>
                                                    <li class="cd-log_reg home">
                                                        <a href="http://www.ufps.edu.co/ufps/index.php">
                                                           <i class="fa fa-reply"></i> Versión Anterior</a>
                                                    </li>
                                                </ul>
                                        </div>
                                </div><!--/end row-->
                            </div><!--/end container-->
                        </div><!-- End Topbar blog -->
                    </div>

                    <div class="header-v8 img-logo-superior" style="background-color: #aa1916;">
                         <!--=== Parallax Quote ===-->
                         <div class="parallax-quote parallaxBg" style="padding: 30px 30px;">
                              <div class="parallax-quote-in" style="padding: 0px;">
                                   <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-5">
                                             <a href="#">
                                                <img id="logo-header"
                                                     src="{{asset("assets/$theme/img/logo_ufps.png")}}" alt="Logo UFPS">
                                             </a>
                                        </div>
                                        <div class="col-md-2 col-ms-1 col-xs-2 pull-right">
                                             <a href="http://www.colombia.co/">
                                                <img class="header-banner" 
                                                     src="{{asset("assets/$theme/img/escudo_colombia.png")}}" alt="Escudo de Colombia">
                                             </a>
                                        </div>
                                    </div>
                               </div>
                         </div><!--=== End Parallax Quote ===-->
                    </div><!--/end header-v8-->

                    <div class="menu-responsive">
                        <!-- Logo -->
                        <a class="logo logo-responsive" href="index.html">
                            <img src="{{asset("assets/$theme/img/horizontal_logo_pequeno.png")}}" alt="Logo">
                        </a><!-- End Logo -->

                         <!-- Toggle get grouped for better mobile display -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-bars"></span>
                        </button><!-- End Toggle -->
                    </div>

<!-- Navbar -->
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
    <div class="container">
        <ul class="nav navbar-nav">
            <!-- Home -->
            <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                    La  UFPS
                </a>
                <ul class="dropdown-menu">
                    <li class="active"><a href="#">Rectoría</a></li>

                    <!-- One Page -->
                    <li class="dropdown-submenu">
                        <a href="javascript:void(0);">Organismos</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url("organismo/consejo-superior-universitario/1035")}}"><i class="fa fa-sitemap" aria-hidden="true"></i> Consejo Superior Universitario</a></li>
                            <li><a href="{{url("organismo/consejo-academico/1037")}}"><i class="fa fa-sitemap" aria-hidden="true"></i> Consejo Académico</a></li>
                            <li><a href="{{url("organismo/consejo-electoral-universitario/1039")}}"><i class="fa fa-sitemap" aria-hidden="true"></i> Consejo Electoral Universitario</a></li>
                            <li><a href="#"><i class="fa fa-sitemap" aria-hidden="true"></i> Consejo Superior Estudiantil</a></li>                          
                        </ul>
                    </li>
                    <!-- End One Page -->

                    <!-- Shop UI Page -->
                    <li class="dropdown-submenu">
                        <a href="javascript:void(0);">Información Institucional</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url("universidad/informacion-institucional/1041")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Presentación</a></li>
                            <li><a href="{{url("universidad/informacion-institucional/1042")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Misión</a></li>
                            <li><a href="{{url("universidad/informacion-institucional/1043")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Visión</a></li>
                            <li><a href="{{url("universidad/informacion-institucional/1044")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Objetivo Retador</a></li>
                            <li><a href="{{url("universidad/informacion-institucional/1045")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Organigrama</a></li>
                            <li><a href="{{url("universidad/informacion-institucional/1046")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Historia</a></li>
                            <li><a href="{{url("universidad/informacion-institucional/1047")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> PEI</a></li>
                            <li><a href="{{url("universidad/informacion-institucional/1048")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sedes</a></li>
                        </ul>
                    </li>
                    <!-- End Shop UI -->

                    <!-- Blog Template -->
                    <li class="dropdown-submenu">
                        <a href="javascript:void(0);">Identidad Corporativa</a>
                        <ul class="dropdown-menu">
                            <li><a target="_blank" href="Blog/index.html">- Logo vertical y horizontal</a></li>
                            <li><a target="_blank" href="Blog/index.html">- Colores corporativos</a></li>
                            <li><a target="_blank" href="Blog/index.html">- Membrete</a></li>
                            <li><a target="_blank" href="Blog/index.html">- Rótulo cd</a></li>
                            <li><a target="_blank" href="Blog/index.html">- Plantilla power point</a></li>
                            <li><a target="_blank" href="Blog/index.html">- Fondo de escritorio</a></li>
                            <li><a target="_blank" href="Blog/index.html">- Plantilla de folleto</a></li>
                            <li><a target="_blank" href="Blog/index.html">- Caja para tesis</a></li>
                            <li><a target="_blank" href="Blog/index.html">- Tipografía</a></li>
                            <li><a target="_blank" href="Blog/index.html">- Agenda</a></li>
                            <li><a target="_blank" href="Blog/index.html">- Carpeta</a></li>
                            <li><a target="_blank" href="Blog/index.html">- Usos indebidos</a></li>
                            <li><a target="_blank" href="Blog/index.html">- Comunico 2d</a></li>
                            <li><a target="_blank" href="Blog/index.html">- Pag de iconografías</a></li>
                            <li><a target="_blank" href="Blog/index.html">- Manual de identidad</a></li>
                            <li><a target="_blank" href="Blog/index.html">- Directorio</a></li>
                        </ul>
                    </li>
                    <!-- End Blog Template -->
                </ul>
            </li>
            <!-- End Home -->

            <!-- Pages -->
            <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                    Vicerrectorias
                </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a href="{{url("vicerrectoria/vicerrectoria-academica/1049")}}">Vice. Académica</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="{{url("vicerrectoria/vicerrectoria-asistente-de-estudios/1053")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Vice. Asistente de estudios</a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Quiénes Somos</a>
                                        <ul style="list-style: none;">
                                            <li><a href="{{url("vicerrectoria/vicerrectoria-asistente-de-estudios/1053")}}" class="dropdown-menu-submenu">Presentación</a></li>
                                            <li><a href="{{url("vicerrectoria/vicerrectoria-asistente-de-estudios/158")}}" class="dropdown-menu-submenu">Funciones</a></li>
                                        </ul></li>
                                    <li><a href="{{url("vicerrectoria/vicerrectoria-asistente-de-estudios/159")}}">Dependencias</a></li>
                                    <li><a href="{{url("vicerrectoria/vicerrectoria-asistente-de-estudios/160")}}">Grupo de Trabajo</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url("vicerrectoria/vicerrectoria-asistente-de-investigacion-y-extension/1056")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Vice. Asist. de investigación y extensión</a></li>
                        </ul>
                    </li>
                    <!-- End Blog Template -->

                    <!-- Service Pages -->
                    <li class="dropdown-submenu">
                        <a href="javascript:void(0);">Vice. Administrativa</a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Quiénes somos</a>
                                <ul style="list-style: none;">
                                    <li><a href="{{url("vicerrectoria/vicerrectoria-administrativa/1057")}}" class="dropdown-menu-submenu"><i class="fa fa-angle-right" aria-hidden="true"></i> Presentación</a></li>
                                </ul></li>
                    </li>
                    <li><a href="{{url("vicerrectoria/vicerrectoria-administrativa/527")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Derechos pecuniarios</a></li>
                    <li><a href="{{url("vicerrectoria/vicerrectoria-administrativa/522")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Normatividad</a></li>
                    <li><a href="{{url("vicerrectoria/vicerrectoria-administrativa/521")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Grupo de Trabajo</a></li>
                    <li><a href="{{url("vicerrectoria/vicerrectoria-administrativa/523")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Formatos</a></li>
                    <li><a href="{{url("vicerrectoria/vicerrectoria-administrativa/719")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Tarifas de servicio de extensión</a></li>
                    <li><a href="{{url("vicerrectoria/vicerrectoria-administrativa/749")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Ejecuciones presupuestales</a></li>
                    <li><a href="{{url("vicerrectoria/vicerrectoria-administrativa/770")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Presupuesto</a></li>
                </ul>
            </li>
            <!-- End Service Pages -->

            <!-- Contacts -->
            <li><a href="http://200.93.148.47/bienestar/">Vice. Bienestar Universitario</a></li>
            <!-- End Contacts -->
        </ul>
        </li>
        <!-- End Pages -->

        <!-- Blog -->
        <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                Dependencias
            </a>
            <ul class="dropdown-menu">
                <li><a href="javascript:void(0);">Secretaría General</a></li>
                <li class="dropdown-submenu">
                    <a href="javascript:void(0);">Oficina de Control Interno</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="javascript:void(0);"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Quienes somos</a>
                             <ul style="list-style: none;">
                                    <li><a href="{{url("universidad/control-interno/1060")}}" class="dropdown-menu-submenu"><i class="fa fa-angle-right" aria-hidden="true"></i> Misión</a></li>
                                    <li><a href="{{url("universidad/control-interno/1061")}}" class="dropdown-menu-submenu"><i class="fa fa-angle-right" aria-hidden="true"></i> Visión</a></li>
                                    <li><a href="{{url("universidad/control-interno/1062")}}" class="dropdown-menu-submenu"><i class="fa fa-angle-right" aria-hidden="true"></i> Objetivos</a></li>
                                </ul>
                        </li>
                        <li><a href="{{url("universidad/control-interno/228")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Fundamentos</a></li>
                        <li><a href="{{url("universidad/control-interno/229")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Elementos</a></li>
                        <li><a href="{{url("universidad/control-interno/230")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Principios</a></li>
                        <li><a href="{{url("universidad/control-interno/231")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Procedimientos</a></li>
                        <li><a href="{{url("universidad/control-interno/232")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Informes</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a href="javascript:void(0);">Oficina de Planeación</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="javascript:void(0);"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Quienes somos</a>
                            <ul style="list-style: none;">
                                <li><a href="{{url("universidad/planeacion/649")}}"><i class="fa fa-angle-right" aria-hidden="true"></i> Propósito principal</a></li>
                                <li><a href="{{url("universidad/planeacion/1064")}}"><i class="fa fa-angle-right" aria-hidden="true"></i> Funciones</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="javascript:void(0);"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Unidades</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url("universidad/planeacion/651")}}">Planeación económico-financiera</a></li>
                                <li><a href="{{url("universidad/planeacion/652")}}">Información y estadística</a></li>
                                <li><a href="{{url("universidad/planeacion/653")}}">Planeación física</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url("universidad/planeacion/654")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Gestión de calidad</a></li>
                        <li><a href="{{url("universidad/planeacion/655")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Plan anticorrupción</a></li>
                        <li><a href="{{url("universidad/planeacion/656")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Plan de desarrollo</a></li>
                        <li><a href="{{url("universidad/planeacion/673")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Estructura orgánica</a></li>
                        <li class="dropdown-submenu">
                            <a href="javascript:void(0);"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Plan de acción institucional</a>
                         <ul class="dropdown-menu">
                                <li><a href="{{url("universidad/planeacion/754")}}">Plan de acción 2014</a></li>
                                <li><a href="{{url("universidad/planeacion/753")}}">Plan de acción 2015</a></li>
                                <li><a href="{{url("universidad/planeacion/951")}}">Plan de acción 2016</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a href="javascript:void(0);">Oficina de Recursos Humanos</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="javascript:void(0);"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Quienes somos</a>
                            <ul style="list-style: none;">
                                <li><a href="{{url("universidad/recursos-humanos/1066")}}">Misión</a></li>
                                <li><a href="{{url("universidad/recursos-humanos/1067")}}">Visión</a></li>
                                <li><a href="{{url("universidad/recursos-humanos/1068")}}">Generalidades</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url("universidad/recursos-humanos/1069")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Normatividad</a></li>
                        <li class="dropdown-submenu">
                            <a href="javascript:void(0);"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Procesos y formatos</a>
                         <ul class="dropdown-menu">
                                <li><a href="{{url("universidad/recursos-humanos/1071")}}">Seguridad y Salud Ocupacional</a></li>
                                <li><a href="http://www.ufps.edu.co/ufpsnuevo/pcontenido/recurso_humano/calculo2.php">Simulación Calculo Puntaje</a></li>
                                <li><a href="{{url("universidad/recursos-humanos/1073")}}">Docentes Planta</a></li>
                                <li><a href="{{url("universidad/recursos-humanos/1074")}}">Docentes Cátedra</a></li>
                                <li><a href="{{url("universidad/recursos-humanos/1075")}}">Evaluación desarrollo Lab. Personal Administrativo</a></li>
                                <li><a href="{{url("universidad/recursos-humanos/1076")}}">Formatos Ingreso</a></li>
                                <li><a href="{{url("universidad/recursos-humanos/1077")}}">Formatos Permisos Por Horas</a></li>
                                <li><a href="{{url("universidad/recursos-humanos/1078")}}">Formatos Permisos Por Días</a></li>
                                <li><a href="{{url("universidad/recursos-humanos/1079")}}">Formato Actualización de Datos Personales</a></li>
                                <li><a href="{{url("universidad/recursos-humanos/1080")}}">Formato Declaración Juramentada de Bienes y Rentas</a></li>
                                <li><a href="{{url("universidad/recursos-humanos/1081")}}">Criterios de Asignación de Puntajes y Reconocimiento de Bonificaciones</a></li>
                                <li><a href="{{url("universidad/recursos-humanos/1082")}}">Requisitos Pago Subsidio Familiar Año 2015</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Convocatorias</a></li>
                        <li><a href="{{url("universidad/recursos-humanos/1083")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Nómina</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a href="javascript:void(0);">Gestión Documental</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url("universidad/gestion-documental/1085")}}">Quienes somos</a></li>
                        <li><a href="{{url("universidad/gestion-documental/1086")}}">Normatividad</a></li>
                        <li><a href="{{url("universidad/gestion-documental/1087")}}">Programa de gestión documental</a></li>
                        <li><a href="{{url("universidad/gestion-documental/1088")}}">Diagnóstico de gestión documental</a></li>
                        <li><a href="{{url("universidad/gestion-documental/1089")}}">Cronograma de actividades del PGD</a></li>
                        <li><a href="{{url("universidad/gestion-documental/1090")}}">Manual de gestión documental</a></li>
                        <li><a href="{{url("universidad/gestion-documental/1091")}}">Tabla de retención documental</a></li>
                        <li><a href="{{url("universidad/gestion-documental/1092")}}">Instructivos</a></li>
                        <li><a href="{{url("universidad/gestion-documental/1093")}}">Formato de gestión de documentos</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a href="javascript:void(0);">Centro de Comunicaciones</a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0);">- Quienes somos</a></li>
                        <li class="dropdown-submenu">
                            <a href="javascript:void(0);">- Dependencias</a>
                            <ul class="dropdown-menu">
                                <li><a target="_blank" href="Blog/blog_page_layouts1.html">Oficina de Prensa</a></li>
                                <li><a target="_blank" href="Blog/blog_page_layouts2.html">UFPS Radio</a></li>
                                <li><a target="_blank" href="Blog/blog_page_layouts3.html">Estudio de TV</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="javascript:void(0);">- Publicaciones</a>
                            <ul class="dropdown-menu">
                                <li><a target="_blank" href="Blog/blog_page_layouts1.html">Oriente Universitario</a></li>
                                <li><a target="_blank" href="Blog/blog_page_layouts2.html">Siente la U</a></li>
                                <li><a target="_blank" href="Blog/blog_page_layouts3.html">Rectoría al día</a></li>
                                <li><a target="_blank" href="Blog/blog_page_layouts3.html">Nuestro norte</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="http://biblioteca.ufps.edu.co/">Biblioteca</a></li>
            </ul>
        </li>
        <!-- End Blog -->

        <!-- Portfolio -->
        <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                Programas
            </a>
            <ul class="dropdown-menu oferta">
                <li>
                    <div class="mega-menu-content disable-icons container" style="padding-left: 20px; padding-right: 20px;">
                        <div class="row equal-height">
                            <div class="col-md-3 equal-height-in">
                                <ul class="list-unstyled equal-height-list">
                                    <li class="title-menu-ofer"><h3>Facultades</h3></li>
                                    <li><a href="{{url("/oferta-academica/facultad-de-ciencias-agrarias-y-del-ambiente")}}">Facultad de Ciencias Agrarias y del Ambiente</a></li>
                                    <li><a href="{{url("/oferta-academica/facultad-de-ciencias-basicas")}}">Facultad de Ciencias Básicas</a></li>
                                    <li><a href="{{url("/oferta-academica/facultad-de-ciencias-empresariales")}}">Facultad de Ciencias Empresariales</a></li>
                                    <li><a href="{{url("/oferta-academica/facultad-de-ciencias-de-la-salud")}}">Facultad de Ciencias de la Salud</a></li>
                                    <li><a href="{{url("/oferta-academica/facultad-de-educacion-artes-y-humanidades")}}">Facultad de Educación, Artes y Humanidades</a></li>
                                    <li><a href="{{url("/oferta-academica/facultad-de-ingenieria")}}">Facultad de Ingeniería</a></li>


                                    <li class="title-menu-ofer margin-top-20"><h3>Programas Tecnológicos</h3></li>

                                    <!-- Common Elements -->
                                    <li><a href="{{url("/oferta-academica/tecnologia-agroindustrial")}}">Tecnología Agroindustrial</a></li>
                                    <li><a href="{{url("/oferta-academica/tecnologia-en-gestion-de-procesos-de-manufactura")}}">Tecnología en Gestión de Procesos de Manufactura</a></li>
                                    <li><a href="{{url("/oferta-academica/tecnologia-en-gestion-y-desarrollo-de-productos-ceramicos")}}">Tecnología en Gestión y Desarrollo de Productos Cerámicos</a></li>
                                    <li><a href="{{url("/oferta-academica/tecnologia-en-obras-civiles")}}">Tecnología en Obras Civiles</a></li>
                                    <li><a href="{{url("/oferta-academica/tecnologia-en-procesos-industriales")}}">Tecnología en Procesos Industriales</a></li>


                                </ul>
                            </div>
                            <div class="col-md-3 equal-height-in">
                                <ul class="list-unstyled equal-height-list">
                                    <li class="title-menu-ofer"><h3>Programas Profesionales</h3>
                                    </li>

                                    <!-- Buttons -->
                                    <li><a href="{{url("/oferta-academica/administracion-de-empresas")}}">Administración de Empresas</a></li>
                                    <li><a href="{{url("/oferta-academica/arquitectura")}}">Arquitectura</a></li>
                                    <li><a href="{{url("/oferta-academica/comercio-internacional")}}">Comercio Internacional</a></li>
                                    <li><a href="{{url("/oferta-academica/comunicacion-social")}}">Comunicación Social</a></li>
                                    <li><a href="{{url("/oferta-academica/contaduria-publica")}}">Contaduría Pública</a></li>
                                    <li><a href="{{url("/oferta-academica/derecho")}}">Derecho</a></li>
                                    <li><a href="{{url("/oferta-academica/enfermeria")}}">Enfermería" alt="Logo Acreditada"></a></li>
                                    <li><a href="{{url("/oferta-academica/ingenieria-agroindustrial")}}">Ingeniería Agroindustrial</a></li>
                                    <li><a href="{{url("/oferta-academica/ingenieria-agronomica")}}">Ingeniería Agronómica</a></li>
                                    <li><a href="{{url("/oferta-academica/ingenieria-ambiental")}}">Ingeniería Ambiental</a></li>
                                    <li><a href="{{url("/oferta-academica/ingenieria-biotecnologica")}}">Ingeniería Biotecnológica</a></li>
                                    <li><a href="{{url("/oferta-academica/ingenieria-civil")}}">Ingeniería Civil</a></li>
                                    <li><a href="{{url("/oferta-academica/ingenieria-de-minas")}}">Ingeniería de Minas</a></li>
                                    <li><a href="{{url("/oferta-academica/ingenieria-de-sistemas")}}">Ingeniería de Sistemas" alt="Logo Acreditada"></a></li>
                                    <li><a href="{{url("/oferta-academica/ingenieria-electromecanica")}}">Ingeniería Electromecánica</a></li>
                                    <li><a href="{{url("/oferta-academica/ingenieria-electronica")}}">Ingeniería Electrónica</a></li>
                                    <li><a href="{{url("/oferta-academica/ingenieria-industrial")}}">Ingeniería Industrial</a></li>
                                    <li><a href="{{url("/oferta-academica/ingenieria-mecanica")}}">Ingeniería Mecánica</a></li>
                                    <li><a href="{{url("/oferta-academica/ingenieria-pecuaria")}}">Ingeniería Pecuaria</a></li>
                                    <li><a href="{{url("/oferta-academica/licenciatura-en-matematicas")}}">Licenciatura en Matemáticas</a></li>
                                    <li><a href="{{url("/oferta-academica/quimica-industrial")}}">Química Industrial</a></li>
                                    <li><a href="{{url("/oferta-academica/seguridad-y-salud-en-el-trabajo")}}">Seguridad y Salud en el Trabajo</a></li>
                                    <li><a href="{{url("/oferta-academica/trabajo-social")}}">Trabajo Social</a></li>
                                    <!-- End Icons -->
                                </ul>
                            </div>
                            <div class="col-md-3 equal-height-in">
                                <ul class="list-unstyled equal-height-list">
                                    <li class="title-menu-ofer"><h3>Programas Técnicos</h3></li>
                                    <!-- Forms -->
                                    <li><a href="{{url("/oferta-academica/tecnico-profesional-en-fabricacion-industrial-de-productos-ceramicos")}}">Técnico Profesional en Fabricación Industrial de Productos Cerámicos</a></li>
                                    <li><a href="{{url("/oferta-academica/tecnico-profesional-en-procesamiento-de-alimentos")}}">Técnico Profesional en Procesamiento de Alimentos</a></li>
                                    <li><a href="{{url("/oferta-academica/tecnico-profesional-en-procesos-de-manufactura-de-calzado-y-marroquineria")}}">Técnico Profesional en Procesos de Manufactura de Calzado y Marroquinería</a></li>
                                    <li><a href="{{url("/oferta-academica/tecnico-profesional-en-produccion-de-ceramica-artesanal")}}">Técnico Profesional en Producción de Cerámica Artesanal</a></li>
                                    <!-- End Forms -->
                                    <li class="title-menu-ofer margin-top-20"><a href="{{url("/oferta-academica/division-de-educacion-a-distancia")}}" class="no-padding"><h5>Programas de Distancia</h5></a></li>
                                    <!-- Forms -->
                                    <li><a href="{{url("/oferta-academica/licenciatura-en-informatica")}}">Licenciatura en Informática</a></li>
                                    <li><a href="{{url("/oferta-academica/tecnologia-comercial-y-financiera")}}">Tecnología Comercial y Financiera</a></li>
                                    <li><a href="{{url("/oferta-academica/tecnologia-en-regencia-de-farmacia")}}">Tecnología en Regencia de Farmacia</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 equal-height-in">
                                <ul class="list-unstyled equal-height-list">
                                    <li class="title-menu-ofer"><a href="{{url("/oferta-academica/division-de-posgrados")}}" class="no-padding"><h3>Programas de Posgrados</h3></a></li>
                                    <!-- Forms -->
                                    <li class="title-menu-ofer"><h5>Especializaciones</h5></li>
                                    <li><a href="{{url("/oferta-academica/especializacion-en-aseguramiento-de-la-calidad")}}">Especialización en Aseguramiento de la Calidad</a></li>
                                    <li><a href="{{url("/oferta-academica/especializacion-en-cuidado-de-enfermeria-al-paciente-critico")}}">Especialización en Cuidado de Enfermería al Paciente Crítico</a></li>
                                    <li><a href="{{url("/oferta-academica/especializacion-en-desarrollo-del-software")}}">Especialización en Desarrollo del Software</a></li>
                                    <li><a href="{{url("/oferta-academica/especializacion-en-educacion-emprendimiento-y-economia-solidaria")}}">Especialización en Educación, Emprendimiento y Economía Solidaria</a></li>
                                    <li><a href="{{url("/oferta-academica/especializacion-en-estructuras")}}">Especialización en Estructuras</a></li>
                                    <li><a href="{{url("/oferta-academica/especializacion-en-gerencia-y-auditoria-de-la-calidad-en-salud")}}">Especialización en Gerencia y Auditoría de la Calidad en Salud</a></li>
                                    <li><a href="{{url("/oferta-academica/especializacion-en-gestion-de-la-seguridad-y-la-salud-en-el-trabajo")}}">Especialización en Gestión de la Seguridad y la Salud en el Trabajo</a></li>
                                    <li><a href="{{url("/oferta-academica/especializacion-en-informatica-educativa")}}">Especialización en Informática Educativa</a></li>
                                    <li><a href="{{url("/oferta-academica/especializacion-en-orientacion-vocacional-y-ocupacional")}}">Especialización en Orientación Vocacional y Ocupacional</a></li>
                                    <li><a href="{{url("/oferta-academica/especializacion-en-practica-pedagogica-universitaria")}}">Especialización en Práctica Pedagógica Universitaria</a></li>
                                    <!-- End Forms -->
                                    <!-- Forms -->
                                    <li class="title-menu-ofer margin-top-20"><h5>Maestrías</h5></li>
                                    <li><a href="{{url("/oferta-academica/maestria-en-ciencia-y-tecnologia-de-materiales")}}">Maestría en Ciencia y Tecnología de Materiales</a></li>
                                    <li><a href="{{url("/oferta-academica/maestria-en-direccion-de-desarrollo-local")}}">Maestría en Direccion de Desarrollo Local</a></li>
                                    <li><a href="{{url("/oferta-academica/maestria-en-educacion-matematica")}}">Maestria en Educación Matemática</a></li>
                                    <li><a href="{{url("/oferta-academica/maestria-en-gerencia-de-empresas")}}">Maestría en Gerencia de Empresas</a></li>
                                    <li><a href="{{url("/oferta-academica/maestria-en-practica-pedagogica")}}">Maestría en Práctica Pedagógica</a></li>
                                    <!-- End Forms -->

                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <!--                    <ul class="dropdown-menu">
                                    <li><a href="portfolio_hover_colors.html">Pregrado</a></li>
                                    <li><a href="portfolio_hover_colors.html">Posgrado</a></li>
                                    <li><a href="portfolio_hover_colors.html">Distancia</a></li>
                                    <li><a href="portfolio_hover_colors.html">Educación contínua</a></li>
                                </ul>-->
        </li>
        <!-- End Portfolio -->

        <!-- Shortcodes -->
        <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                Investigación
            </a>
            <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                    <a href="javascript:void(0);">Quienes somos</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url("vicerrectoria/vicerrectoria-asistente-de-investigacion-y-extension/146")}}">- Misión</a></li>
                        <li><a href="{{url("vicerrectoria/vicerrectoria-asistente-de-investigacion-y-extension/147")}}">- Visión</a></li>
                        <li><a href="{{url("vicerrectoria/vicerrectoria-asistente-de-investigacion-y-extension/148")}}">- Objetivos</a></li>
                        <li><a href="{{url("vicerrectoria/vicerrectoria-asistente-de-investigacion-y-extension/153")}}">- Equipo de trabajo</a></li>
                    </ul>
                </li>
                <li><a href="{{url("vicerrectoria/vicerrectoria-asistente-de-investigacion-y-extension/150")}}">Convocatorias</a></li>
                <li><a href="{{url("vicerrectoria/vicerrectoria-asistente-de-investigacion-y-extension/151")}}">Unidades de investigación</a></li>
                <li><a href="http://www.ufps.edu.co/ufpsnuevo/modulos/contenido/view_content.php?item=118">Unidades de extensión</a></li>
                <li><a href="{{url("vicerrectoria/vicerrectoria-asistente-de-investigacion-y-extension/152")}}">Formatos y documentos</a></li>
                <li><a href="http://revistas.ufps.edu.co/ojs/">Publicaciones</a></li>
                <li><a href="{{url("vicerrectoria/vicerrectoria-asistente-de-investigacion-y-extension/149")}}">Reglamentación</a></li>
                <li><a href="http://www.ufps.edu.co/ufps/IIsemanainternacional_cyt/">Memorias</a></li>
            </ul>
        </li>
        <!-- End Shortcodes -->
            <!-- Features -->
            <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                    Acreditación
                </a>
            </li>
            <!-- End Features -->
        <!-- Misc Pages -->
        <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                Internacionalización
            </a>
            <ul class="dropdown-menu">
                <li><a href="page_misc_blank.html">Convocatorias vigentes</a></li>
                <li><a href="http://cinera.ufps.edu.co/interufps/index.php?option=com_content&view=article&id=46&Itemid=55">Convenios</a></li>
                <li><a href="http://cinera.ufps.edu.co/interufps/index.php?option=com_content&view=article&id=70&Itemid=84">Guías y formatos</a></li>
                <li><a href="http://cinera.ufps.edu.co/interufps/index.php?option=com_content&view=article&id=48&Itemid=60">Movilidad Estudiantíl </a></li>
                <li><a href="http://cinera.ufps.edu.co/interufps/index.php?option=com_content&view=article&id=49&Itemid=61">Movilidad Docente </a></li>
                <li><a href="http://cinera.ufps.edu.co/interufps/">Enlaces de interés</a></li>
                <li><a href="http://cinera.ufps.edu.co/interufps/index.php?option=com_contact&view=contact&id=1&Itemid=83">Contacto</a></li>
            </ul>
        </li>
        <!-- End Misc Pages -->


        </ul>
    </div>
</div><!--/navbar-collapse-->

<!-- End Navbar -->
</div>
    
</header> 

      