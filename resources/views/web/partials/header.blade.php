<nav class="navbar navbar-expand-lg navbar-light bg-light container px-md-0 px-3">
  <a class="navbar-brand d-md-none d-block" href="#">Thomas Fenton</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>



  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item {{setActiveLink('web.home')}}">
      <a class="nav-link {{setActiveSubLink('web.home')}} pl-2 link-effect" href="{{route('web.home')}}">
        <svg class="bi bi-house-fill" width="1.6em" height="1.6em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 01-1.5 1.5h-9A1.5 1.5 0 012 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd"/>
          <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 011.414 0l6.647 6.646a.5.5 0 01-.708.708L8 2.207 1.354 8.854a.5.5 0 11-.708-.708L7.293 1.5z" clip-rule="evenodd"/>
        </svg>
      </a>
      </li>
      <li class="nav-item {{setActiveLink('web.covid')}}">
      <a class="nav-link {{setActiveSubLink('web.covid')}} pl-2 link-effect" href="{{route('web.covid')}}">COVID-19</a>
      </li>
      <li class="nav-item {{setActiveLink('web.fenton.*')}} dropdown melon">
        <a class="nav-link dropdown-toggle {{setActiveSubLink('web.fenton.*')}} pl-2 link-effect" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CESFAM  THOMAS FENTON
        </a>
        <div id="dropdown-menu-melon" class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropright strawberry">
              <a class="nav-link dropdown-toggle pl-4 nav-melon" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Desarrollo organizacional
              </a>
              <div id="dropdown-menu-strawberry" class="dropdown-menu  ml-0"  aria-labelledby="navbarDropdown2">
              <a class="dropdown-item" href="{{route('web.fenton.history')}}">Historia</a>
                  <a class="dropdown-item" href="{{route('web.fenton.mission-vision')}}">Misión y Visión</a>
                  <a class="dropdown-item" href="{{route('web.fenton.politic')}}">Política de Calidad</a>
              </div>
          </div>
          <a class="dropdown-item" href="{{route('web.fenton.location')}}">Ubicación</a>
          <a class="dropdown-item" href="{{route('web.fenton.news')}}">Noticias</a>

        </div> 
      </li>

      <li class="nav-item dropdown melon {{setActiveLink('web.rioseco.*')}}">
        <a class="nav-link dropdown-toggle  {{setActiveSubLink('web.rioseco.*')}}  pl-2 link-effect" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CECOFS  RIO SECO
        </a>
        <div id="dropdown-menu-melon" class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropright strawberry">
              <a class="nav-link dropdown-toggle pl-4 nav-melon" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Desarrollo organizacional
              </a>
              <div id="dropdown-menu-strawberry" class="dropdown-menu  ml-0"  aria-labelledby="navbarDropdown2">
                  <a class="dropdown-item" href="{{route('web.rioseco.history')}}">Historia</a>
                  <a class="dropdown-item" href="{{route('web.rioseco.mission-vision')}}">Misión y Visión</a>
                  <a class="dropdown-item" href="{{route('web.rioseco.politic')}}">Política</a>
              </div>
          </div>
          <a class="dropdown-item" href="{{route('web.rioseco.location')}}">Ubicación</a>
        </div> 
      </li>      


      {{-- <li class="nav-item dropdown melon {{setActiveLink('web.sarabraun.*')}}">
        <a class="nav-link dropdown-toggle {{setActiveSubLink('web.sarabraun.*')}}  pl-2 link-effect" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MODULO DENTAL SARA BRAUN
        </a>
        <div id="dropdown-menu-melon" class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropright strawberry">
              <a class="nav-link dropdown-toggle pl-4 nav-melon" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Desarrollo organizacional
              </a>
              <div id="dropdown-menu-strawberry" class="dropdown-menu  ml-0"  aria-labelledby="navbarDropdown2">
                  <a class="dropdown-item" href="{{route('web.sarabraun.history')}}">Historia</a>
                  <a class="dropdown-item" href="{{route('web.sarabraun.mission-vision')}}">Misión y Visión</a>
                  <a class="dropdown-item" href="{{route('web.sarabraun.politic')}}">Política</a>
              </div>
          </div>
          <a class="dropdown-item" href="{{route('web.sarabraun.location')}}">Ubicación</a>

        </div> 
      </li> --}}


      <li class="nav-item dropdown melon {{setActiveLink('web.programs.*')}}">
        <a class="nav-link dropdown-toggle {{setActiveSubLink('web.programs.*')}}  pl-2 link-effect" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PROGRAMAS
        </a>
        <div id="dropdown-menu-melon" class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('web.programs.woman')}}">Salud Mujer</a>
          <a class="dropdown-item" href="{{route('web.programs.childish')}}">Salud Infantil</a>
          <a class="dropdown-item" href="{{route('web.programs.adult')}}">Salud Adulto</a>
          <a class="dropdown-item" href="{{route('web.programs.elderly')}}">Salud Adulto Mayor</a>
          <a class="dropdown-item" href="{{route('web.programs.mental')}}">Salud Mental</a>          
          <a class="dropdown-item" href="{{route('web.programs.dental')}}">Salud Dental</a>
          <a class="dropdown-item" href="{{route('web.programs.cardiovascular')}}">Salud Cardiovascular</a>
        </div>
      </li>


      <li class="nav-item dropdown melon {{setActiveLink('web.healthissues.*')}}">
        <a class="nav-link dropdown-toggle {{setActiveSubLink('web.healthissues.*')}}  pl-2  link-effect" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          TEMAS DE SALUD
        </a>
        <div id="dropdown-menu-melon" class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">EN CONSTRUCCIÓN</a>
          <a class="dropdown-item disabled" {{-- href="{{route('web.healthissues.promotion')}} --}}">Promoción</a>
          <a class="dropdown-item disabled" {{-- href="{{route('web.healthissues.mais')}}" --}}>MAIS</a>
          <a class="dropdown-item disabled" {{-- href="{{route('web.healthissues.vaccination')}} --}}">Vacunación</a>
          <a class="dropdown-item disabled" {{-- href="{{route('web.healthissues.tbc')}} --}}">TBC</a>   
        </div>
      </li>


      <li class="nav-item text-dark {{setActiveLink('web.quality')}} ">
        <a class="nav-link {{setActiveSubLink('web.quality')}}  pl-2  link-effect" href="{{route('web.quality')}}">CALIDAD</a>
      </li>
    </ul>
    <form action="{{route('web.fenton.news')}}" method="GET" class="form-inline my-2 my-lg-0 d-md-none d-block">
      <input  @if (isset($search)) value="{{old('search',$search)}}"   @endif name="search" class="mr-sm-2 col-12 mb-2 mt-0" type="text" placeholder="Buscar" aria-label="Search">
              <button class="col-12 py-2" type="submit">Buscar</button>
      </form>
  </div>
</nav>







