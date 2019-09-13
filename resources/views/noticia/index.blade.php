@extends("theme.$theme.layout")
@section('titulo')
Noticia
@endsection
@section('content')

@section('titulo1')
Listado Noticias
@endsection

<div class="wrapper">
   <!-- Inicio Header Noticia-->
   @include("theme/$theme/headertitulo")
   <!-- Fin Header Noticias-->
</div>
<!--=== Content Part ===-->
<div class="container content profile">
   <div class="row">
      <div class="col-md-9">
         <!--CONTENIDO-->
         <div class="box">
            <!--<div class="box-header">
                         
                          <div class="box-tools">
                              <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
      
                                  <div class="input-group-btn">
                                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                  </div>
                              </div>
                          </div>
                      </div>-->

            <div class="box-body">
               <table class="table table-bordered">
                  <thead>
                     <tr>
                        <th style="width: 10%">No</th>
                        <th style="width: 30%">Titulo</th>
                        <th>Descripción</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($noticias as $noticia)
                     <tr>
                        <td>{{$noticia->idNoticia}}</td>
                        <td>
                           <a href="{{route('noticia_completa', ['idNoticia'=> $noticia->idNoticia])}}">
                              {{$noticia->nombreNoticia}}
                           </a>
                        </td>
                        <td>{{$noticia->descripcionNoticia}}</td>

                     </tr>
                     @endforeach

                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>

</div>

@endsection