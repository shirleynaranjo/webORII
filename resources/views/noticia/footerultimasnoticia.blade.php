
<hr class="devider devider-dotted">
<div class="row margin-top-60">
    <h4 style="color:#aa1916;">Últimas Noticias</h4>

    @foreach ($noticias as $noticia)
           
    <div class="col-md-4">
        <div class="blog-thumb blog-thumb-circle margin-bottom-15">
            <div class="blog-thumb-hover">
                <img class="img-responsive"
                    src="https://ww2.ufps.edu.co/public/imagenes/noticia/44dce39dce5b993c896663626c7f5538.jpg" alt="">
                <a class="hover-grad" href="https://ww2.ufps.edu.co/unoticia/-comunicacion-social-afacom-"><i
                        class="fa fa-link"></i></a>
            </div>
            <div class="blog-thumb-desc">
                <h3>
                    <a href="https://ww2.ufps.edu.co/unoticia/-comunicacion-social-afacom-">{{$noticia->tituloNoticia}}</a>
                </h3>
                <ul class="blog-thumb-info">
                    <li><i class="fa fa-calendar"></i> miércoles, 16 de octubre del 2019</li>

                </ul>
            </div>
        </div>
    </div>

    @endforeach

</div>
