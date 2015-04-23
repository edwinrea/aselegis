@include('includes.master')
  <div class="wrapper">
    <div class="section-header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="animated slideInLeft"><span>Noticias</span></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="timeline-block">
          <!-- First blog post -->
            <div class="blog-summary">
              <h4><a href="{{URL::asset('assets/pdf/disposiciones/providencia0032.pdf')}}">Entrada en vigencia de la Prov. N° 0032</a></h4>
              <time datetime="2014-08-06" class="timestamp hidden-xs">07 Ene, 2015</time>
              <p class="blog-text" style="text-align:justify">
                El 1° de Enero de 2015 entra en vigencia la <a href="{{URL::asset('assets/pdf/disposiciones/providencia0032.pdf')}}">Providencia administrativa n° 0032</a> que regula la utilización de medios distintos para la emisión de facturas y otros documentos por los prestadores de servicios masivos.
              </p>
            </div>
            <div class="blog-summary">
              <h4><a>Pr&oacute;rroga de la Providencia N&deg; 0078 hasta el 01-06-2015</a></h4>
              <time datetime="2014-08-06" class="timestamp hidden-xs">06 Ago, 2014</time>
              <p class="blog-text" style="text-align:justify">
                En la Gaceta Oficial N° 40.469 del miércoles 6 de agosto de 2014, publica el Ministerio del Poder                     Popular de Economía , Finanzas y Banca Pública y el Ministerio para el Transporte Aéreo una                           Providencia conjunta donde prorrogan la entrada en vigencia de la Providencia Nº SNATE /2013-0078 Y                   PREC/CJU-479-13, donde se establecen la Normas para la emisión de facturas, boletos y otros                           documentos <strong>hasta el 1 de junio de 2015</strong>, entrando en vigencia la pr&oacute;rroga de providencia N&deg; 0078 desde el 1 de agosto de 2014, fecha en la cual se terminaba la pr&oacute;rroga anterior.
              </p>
            </div>
          </div>
          <!-- Pagination -->
          <!--<ul class="pagination push-right">
            <li class="disabled"><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>-->
        </div>
        {{--<div class="col-sm-4 push-right">
          <!-- Social Links -->
          <h3 class="hl">Siguenos!!</h3>
          <hr>
          <div class="social-icons social-icons-default">
            <ul>
                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
        </div>--}}
      </div>
    </div>
  </div>

<!-- Foooter
================== -->
@include('includes.footer')