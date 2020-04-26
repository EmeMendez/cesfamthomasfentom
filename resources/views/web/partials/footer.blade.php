<script src="{{ asset('js/app.js') }}"></script>
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<footer class="bg-fenton-blue pt-5">
    <div class="container">
        <div class="row pb-4 text-fenton-gold">
           <div class="col-12 text-center"> 
               <a style="text-decoration: none; " style="text-decorate:none"  href="https://www.facebook.com/cesfam.thomasfenton" target="_blank"><span class="mx-3"> 
                   <img class="wow zoomIn zoom-effect" height="32" width="32" src="https://cdn4.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-facebook-circle-512.png" alt="">
               </span></a>
              <a style="text-decoration: none; " href="https://www.instagram.com/cesfam_dr_thomas_fenton" target="_blank"><span class="mx-3">
                <img class="wow zoomIn  zoom-effect" height="32" width="32" src="https://www.pngkey.com/png/full/283-2831746_insta-icon-instagram.png" alt="">
              </span></a>
            </div>
        </div>
        <div class="row align-items-between">
            <div class="col-12 col-md-3 text-fenton-light-blue ">
                <h6 class="font-weight-bold">CESFAM DR. THOMAS FENTON</h6>
                <p><img class="col-8 img-fluid wow slideInDown" src="/images/cesfam.jpg" alt=""></p>
                <p class="col-12">Vicente Pérez Barría #0762, Región de Magallanes y La Antártica Chilena</p>
            </div>            
            <div class="col-12 col-md-2 text-fenton-light-blue ">
                <h6 class="text-fenton-gold font-weight-bold  wow fadeInUp ">CESFAN THOMAS FENTON</h6>
                <hr style="border-top: 1px solid gray;">
                <p><a class="text-fenton-light-blue" href="{{route('web.fenton.history')}}">Historia </a></p>
                <p><a class="text-fenton-light-blue" href="{{route('web.fenton.mission-vision')}}">Misión y Visión </a></p>
                <p><a class="text-fenton-light-blue" href="{{route('web.fenton.location')}}">Ubicación </a></p>              
                <p><a class="text-fenton-light-blue" href="{{route('web.fenton.politic')}}">Política de Calidad </a></p>
            </div>
            <div class="col-12 col-md-2 text-fenton-light-blue">
                <h6 class="text-fenton-gold font-weight-bold   wow fadeInUp  ">CECOFS <br>RIO SECO</h6>
                <hr style="border-top: 1px solid gray;">
                <p><a class="text-fenton-light-blue" href="{{route('web.rioseco.history')}}">Historia </a></p>
                <p><a class="text-fenton-light-blue" href="{{route('web.rioseco.mission-vision')}}">Misión y Visión </a></p>
                <p><a class="text-fenton-light-blue" href="{{route('web.rioseco.location')}}">Ubicación </a></p>              
                <p><a class="text-fenton-light-blue" href="{{route('web.rioseco.politic')}}">Política de Calidad </a></p>

            </div>
            {{-- <div class="col-12 col-md-2 text-fenton-light-blue ">
                <h6 class="font-weight-bold text-fenton-gold">M.DENTAL SARA BRAUN</h6>
                <hr style="border-top: 1px solid gray;">
                <p><a class="text-fenton-light-blue" href="{{route('web.sarabraun.history')}}">Historia </a></p>
                <p><a class="text-fenton-light-blue" href="{{route('web.sarabraun.mission-vision')}}">Misión y Visión </a></p>
                <p><a class="text-fenton-light-blue" href="{{route('web.sarabraun.location')}}">Ubicación </a></p>              
                <p><a class="text-fenton-light-blue" href="{{route('web.sarabraun.politic')}}">Política de Calidad </a></p>

            </div> --}}
            <div class="col-12 col-md-2 text-fenton-light-blue">
                <h6 class="text-fenton-gold font-weight-bold wow fadeInUp ">PROGRAMAS <br> &nbsp;</h6>
                <hr style="border-top: 1px solid gray;">
                <p><a class="text-fenton-light-blue" href="#">Salud Mujer</a></p>
                <p><a class="text-fenton-light-blue" href="#">Salud Infantil</a></p>
                <p><a class="text-fenton-light-blue" href="#">Salud Adulto</a></p>
                <p><a class="text-fenton-light-blue" href="#">Salud Mental</a></p>
                <p><a class="text-fenton-light-blue" href="#">Salud Dental</a></p>
                <p><a class="text-fenton-light-blue" href="#">Salud Cardio Vascular</a></p>
            </div>
            <div class="col-12 col-md-2 text-fenton-gold">
                <h6 class="font-weight-bold wow fadeInUp ">TEMAS <br>DE SALUD</h6>
                <hr style="border-top: 1px solid gray;">
                <p> <a class="text-fenton-light-blue" href="#">Promoción</a></p>
                <p> <a class="text-fenton-light-blue" href="#">MAIS</a></p>
                <p> <a class="text-fenton-light-blue" href="#S">Vacunación</a></p>
                <p> <a class="text-fenton-light-blue" href="#">TBC</a></p>
                <hr style="border-top: 1px solid gray;">
                <h6 class="font-weight-bold wow fadeInUp">CALIDAD</h6>
            </div>
        </div>
    </div>
<hr style="border-top: 1px solid gray;">
    <div  class="text-fenton-light-blue text-center pt-3 pb-4 ">
        {{now()->year}} © Todos los derechos reservados. Cesfam Dr. Thomas Fenton
    </div>
</footer>

