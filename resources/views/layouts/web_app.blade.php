@include('web.partials.head')
@include('web.partials.logotype')
@include('web.partials.header')

<style>
    body{
        background-color: #e6e6e6;}
    .shadow{

box-shadow: 0px 5px 5px 3px rgba(191,191,191,1);
    }

</style>



<div class="container py-3 mb-5  bg-white shadow">
    <div class="row mt-4 mb-5 px-0">
        <div class="col-12 col-md-9 px-3 px-md-5">
                @yield('content')
        </div>
        <div class="col-12 col-md-3">
        <form action="{{route('web.fenton.news')}}" method="GET" class="form-inline mb-3 d-md-block d-none">
        <input  @if (isset($search)) value="{{old('search',$search)}}"   @endif name="search" class="mr-sm-2 col-12 mb-2 mt-0" type="text" placeholder="Buscar" aria-label="Search">
                <button class="col-12 py-2 wow fadeIn" type="submit">Buscar</button>
        </form>
        <hr >
            <div class="col-12 px-0">
                <h4 class="text-secondary text-center my-3">Red de Salud</h4>
                <a href="https://cesfam18.cl/" target="_blank" ><img class="w-100 mb-3 wow fadeIn rounded border border-light zoom-effect-soft" src="/images/web/cesfam-18-de-septiembre.png" alt=""></a>
                <a href="http://www.cesfammateobencur.cl/" target="_blank" ><img class="w-100 mb-3 wow fadeIn rounded border border-light zoom-effect-soft" src="/images/web/cesfam-mateo-betancurt.png" alt=""></a>
                <a href="http://www.saludfamiliar.damianovic.cl/" target="_blank" ><img class="w-100 mb-3 wow fadeIn rounded border border-light zoom-effect-soft" src="/images/web/cesfam-dr-juan-damianovic.png" alt=""></a>
                <a href="http://seremi12.redsalud.gob.cl/  " target="_blank" ><img class="w-100 mb-3 wow fadeIn rounded border border-light zoom-effect-soft" src="/images/web/seremi-magallanes.png" alt=""></a>
                <a href="http://www.cormupa.cl/cormupa3/" target="_blank" ><img class="w-100 mb-3 wow fadeIn rounded border border-light zoom-effect-soft" src="/images/web/cormupa.png" alt=""></a>
                <a href="https://www.saludmagallanes.cl/cms/" target="_blank" ><img class="w-100 mb-3 wow fadeIn rounded border border-light zoom-effect-soft" src="/images/web/servicio-salud-magallanes.png" alt=""></a>
                <a href="https://www.fonasa.cl/" target="_blank" ><img class="w-100 mb-3 wow fadeIn rounded border border-light zoom-effect-soft" src="/images/web/fonasa.png" alt=""></a>
                <a href="https://www.registrocivil.cl/" target="_blank" ><img class="w-100 mb-3 wow fadeIn rounded border border-light zoom-effect-soft" src="/images/web/registro-civil.png" alt=""></a>
            </div>    
        </div>
    </div>
</div>
<script src="/js/wow.min.js" type="text/javascript"></script>
<script>
    new WOW().init();
</script>
@include('web.partials.footer')
