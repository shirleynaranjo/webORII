@extends("theme.$theme.layout")
@section('titulo')
Noticia
@endsection
@section('content')

@section('titulo1')
Listado Noticias
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
<!--=== Content Part ===-->
<div class="container content profile">
   <div class="row">
      <div class="col-md-12">
         <div class="box-body table-responsive no-padding">
            <table id="table_noticia" class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th>Titulo</th>
                     <th>Fecha</th>                     
                  </tr>
               </thead>
               <tbody>
                  @foreach ($noticias as $noticia)
                  <tr>
                     <td>
                        <h3>
                        <a href="{{route('noticia_completa', ['idNoticia'=> $noticia->idNoticia])}}">
                           {{$noticia->tituloNoticia}}
                        </a>
                     </h3>
                     </td>   
                     <td><i style="text-transform: none; color: #AA1916;">{{$noticia->fechaPublicacion}}</i></td>                  
                  </tr>
                  @endforeach

               </tbody>
            </table>
         </div>
      </div>
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