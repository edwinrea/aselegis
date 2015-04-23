@include('includes.master')
<div class="wrapper">
    <div class="section-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="animated slideInLeft"><span>Contáctenos</span></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h2 class="hl top-zero">Contáctenos</h2>
                <hr>
                @include('pages.notificaciones')
                <p></p>
                <form role="form" action="{{URL::to('/contact')}}" method="post">
                    {{Form::token()}}
                    <div class="form-group">
                        <label for="email">Tu Correo Electronico</label>
                        <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">

                    </div>
                    <div class="form-group">
                        <label for="name">Tu nombre</label>
                        <input type="text" class="form-control" id="name" placeholder="Nombre y Apellido" name="name">
                    </div>
                    <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea class="form-control" rows="3" id="message" placeholder="Ingrese su mensaje" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-green">Enviar</button>
                </form>
            </div>
            <div class="col-sm-4">
                <h4>Dirección</h4>
                <hr>
                <p>
                    Av. Andr&eacute;s Bello con 3era transversal de Guaicaipuro, Edif Atalaya, piso 9<br />
                    <strong>Telefonos:</strong> (0412) 712.14.22 /
                    (0424) 103.24.61<br />
                    <strong>Email:</strong> <a href="#">edwin.rea33@gmail.com</a> <br />
                    <strong>Email:</strong> <a href="#">aselegisca@gmail.com</a>
                </p>
                <hr>
                <!-- Google Maps -->
                <h4>Google Maps</h4>
                <hr>
                <div class="google-maps">
                    <iframe width="350" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                            src="http://maps.google.es/maps?q=Caracas&output=embed" style="color:#0000FF;text-align:left">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Foooter
================== -->
@include('includes.footer')