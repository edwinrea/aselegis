@include('includes.master')
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 block-header">
                <h2>
                    <span class="title">Normas Vigentes</span><span class="decoration"></span><span class="decoration"></span><span class="decoration"></span>
                </h2>
            </div>
        </div>
        <div class="col-md-8 col-sm-3">
            <hr>
            <div class="row faq-cats">
                <div class="col-md-8">
                    <ul>
                        <li><img src="{{URL::asset('assets/img/down_pdf.png')}}"></img> <a href="{{URL::asset('assets/pdf/normas/gaceta6152.pdf')}}">C&oacute;digo Org&aacute;nico Tributario 2014. (Gaceta Extraordinaria N° 6152)</a></li>
                        <li><img src="{{URL::asset('assets/img/down_pdf.png')}}"></img> <a href="{{URL::asset('assets/pdf/normas/decreto_1808_isrl.pdf')}}">Decreto 1808 de Retenciones de I.S.L.R.</a></li>
                        <li><img src="{{URL::asset('assets/img/down_pdf.png')}}"></img> <a href="{{URL::asset('assets/pdf/normas/gaceta6152.pdf')}}">Ley de I.S.L.R. del 2014. (Gaceta Extraordinaria N° 6152).</a></li>
                        <li><img src="{{URL::asset('assets/img/down_pdf.png')}}"></img> <a href="{{URL::asset('assets/pdf/normas/gaceta6152.pdf')}}">Ley de I.V.A. del 2014. (Gaceta Extraordinaria N° 6152).</a></li>
                        <li><img src="{{URL::asset('assets/img/down_pdf.png')}}"></img> <a href="{{URL::asset('assets/pdf/normas/providencia0029.pdf')}}">Providencia 0029 y 0030 de Retenciones de I.V.A.</a></li>
                        <li><img src="{{URL::asset('assets/img/down_pdf.png')}}"></img> <a href="{{URL::asset('assets/pdf/normas/reglamento_isrl.pdf')}}">Reglamento de la ley de I.S.L.R. del 2003.</a></li>
                        <li><img src="{{URL::asset('assets/img/down_pdf.png')}}"></img> <a href="{{URL::asset('assets/pdf/normas/reglamento_iva_1999.pdf')}}">Reglamento de la ley de I.V.A. de 1999</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Foooter
 ================== -->
@include('includes.footer')