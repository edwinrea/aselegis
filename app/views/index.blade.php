                                                                                                                                                                                                                                                                @include('includes.master')
<div class="wrapper" style="padding-top: 0px;">
    <!-- Showcase-->
    <!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  
  <div class="carousel-inner">
    <div class="item active ">
      <img src="{{URL::asset('assets/img/bg3.jpg')}}" class="img-responsive">
    </div>
    <div class="item">
      <img src="{{URL::asset('assets/img/bg4.png')}}" class="img-responsive">
    </div>
    <div class="item">
      <img src="{{URL::asset('assets/img/bg5.png')}}" class="img-responsive">
    </div>
  </div>
  
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>

</div>
<!-- /.carousel -->

    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="block-header">
                    <h2>
                        <span class="title">Notas Tributarias</span><span class="decoration"></span><span class="decoration"></span><span class="decoration"></span>
                    </h2>
                </div>

                <div class="row">
          
                   <img src="{{URL::asset('assets/img/about.png')}}" class="img-about img-responsive" alt="About" />

                   <p>
                       Resúmenes en aspectos de actualidad en materia Jurídico-Tributario tales como:
                   </p>
                   <ol class="col-md-6 col-md-pull-0">
                       <li>Doctrinas (Emanadas del Seniat y/o provenientes del Sujeto Pasivo)</li>
                       <li>Sentencias</li>
                       <li>Jurisprudencias</li>
                       <li>Avisos Oficiales</li>
                   </ol>

                   <div class="col-md-4">
                         <a href="{{URL::asset('assets/pdf/notas_tributarias/nota_tributaria16.pdf')}}">Ver Nota Tributaria...</a>
                   </div>

                  <div class="block-header col-md-12">
                    <h2><span class="title">Cronograma de Talleres</span><span class="decoration"></span><span class="decoration"></span><span class="decoration"></span></h2>

                    <img src="{{URL::asset('assets/img/cronograma.png')}}" class="img-about img-responsive" alt="About" />
                   <p>
                       Talleres en materia jurídico - tributaria a impartir durante el año 2015.
                   </p>
                   <div class="col-md-4">
                         <a href="{{URL::asset('assets/pdf/cursos/cronograma2015.pdf')}}">Ver Cronograma...</a>
                   </div>

                  </div>

               </div>

            </div>




            <!-- Last updated-->
            <div class="col-md-6">
                <div class="block-header">
                    <h2>
                        <span class="title">Otros Aspectos de Interés</span><span class="decoration"></span><span class="decoration"></span><span class="decoration"></span>
                    </h2>
                </div>
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#blog" data-toggle="tab">Próximos Talleres</a></li>
                    <li><a href="#comments" data-toggle="tab">Disposiciones Recientes</a></li>
                    <li><a href="#events" data-toggle="tab">Alimento para el Espíritu</a></li>
                </ul>
                <div class="tab-content">

                    <div class="tab-pane active" id="blog">
                        <div class="media">
                            <div class="media-body">
                                <h4 class="media-heading">

                                    <a href="#">TALLER DE REFORMA FISCAL 2014 (C.O.T., I.S.L.R. e I.V.A.).</a>

                                </h4>
                                <hr>
                                <i class="fa fa-calendar"></i>
                                &nbsp;&nbsp;8 de Abril 2015 <br />
                                <i class="fa fa-clock-o"></i>
                                &nbsp;&nbsp;8am a 1pm. <br />
                                <i class="fa fa-map-marker"></i>
                                &nbsp;&nbsp;&nbsp;2da Calle con Av. El Mirador, Centro Profesional Sargon Palace, PB, Local A, La Campina - Caracas. <br />
                            </div>
                            <hr>
                            <div class="media-body">
                                <h4 class="media-heading">
     
                                    <a href="#">¿CÓMO REGISTRAR LAS OPERACIONES EN LOS LIBROS FISCALES DE COMPRAS Y VENTAS?.</a>
                                </h4>
                                <hr>
                                <i class="fa fa-calendar"></i>
                                &nbsp;14 de Abril 2015 <br />
                                <i class="fa fa-clock-o"></i>
                                &nbsp;&nbsp;8am a 1pm. <br />     
                                <i class="fa fa-map-marker"></i>
                                &nbsp;&nbsp;&nbsp;2da Calle con Av. El Mirador, Centro Profesional Sargon Palace, PB, Local A, La Campina - Caracas. <br />
     
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="comments">
                        <div class="media">
                            <div class="media-body">
                                <p>En fecha 18/11/2014 se publicó la G.O. Nº <a href="{{URL::asset('assets/pdf/normas/gaceta6152.pdf')}}">6152</a>, contentiva de las reformas del Código Orgánico Tributario, Ley de Impuesto Sobre la Renta, Ley de Reforma de la Ley que Establece el Impuesto al Valor Agregado, Ley de Inversiones Extranjeras y la Ley Orgánica de Turismo.
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="events">
                        <h5 style="text-decoration: underline;">SALMOS 55:</h5>
                        <p>22 Echa sobre Jehová tu carga, y él te sustentará;</p>
                        <p>No dejará para siempre caído al justo;</p>
                        <p>DTB</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recent Works
          =================== -->
        <div class="row">
            <div class="col-md-12 block-header">
                <h2>
                    <span class="title"></span></span><span class="decoration"></span><span class="decoration"></span><span class="decoration"></span>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="{{URL::asset('assets/img/mision.png')}}" class="img-responsive" alt="...">
                    <div class="caption">
                        <h4 style="text-align: center"><a href="{{URL::to('/mision')}}">MISIÓN</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="{{URL::asset('assets/img/vision.png')}}" class="img-responsive" alt="...">
                    <div class="caption">
                        <h4 style="text-align: center"><a href="{{URL::to('/vision')}}">VISIÓN</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="{{URL::asset('assets/img/gaceta.png')}}" class="img-responsive" alt="...">
                    <div class="caption">
                        <h4 style="text-align: center"><a href="{{URL::to('/normas')}}">NORMAS VIGENTES</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="{{URL::asset('assets/img/noticias.png')}}" class="img-responsive" alt="...">
                    <div class="caption">
                        <h4 style="text-align: center"><a href="{{URL::to('/noticias')}}">NOTICIAS</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Foooter
 ================== -->
@include('includes.footer')
