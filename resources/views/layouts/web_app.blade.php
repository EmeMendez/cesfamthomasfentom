@include('web.partials.head')
@include('web.partials.logotype')
@include('web.partials.header')
<div class="container py-3 mb-5  bg-white ">
    <div class="row mt-4 mb-5">
        <div class="col-12 col-md-9 px-3 px-md-5">
                @yield('content')
        </div>
        <div class="col-12 col-md-3">
        <form action="{{route('web.fenton.news')}}" method="GET" class="form-inline mb-3">
        <input  @if (isset($search)) value="{{old('search',$search)}}"   @endif name="search" class="mr-sm-2 col-12 mb-2 mt-0" type="text" placeholder="Buscar" aria-label="Search">
                <button class="col-12 py-2 wow fadeIn" type="submit">Buscar</button>
        </form>
            <div>
                <img class="w-100 mb-3 wow fadeIn" src="https://i0.wp.com/complejohospitalariosanjose.cl/wp-content/uploads/2019/12/BotonOirs.jpg?resize=242%2C66" alt="">
                <img class="w-100 mb-3 wow fadeIn" src="https://i0.wp.com/complejohospitalariosanjose.cl/wp-content/uploads/2019/12/BotonOirs.jpg?resize=242%2C66" alt="">
                <img class="w-100 mb-3 wow fadeIn" src="https://i0.wp.com/complejohospitalariosanjose.cl/wp-content/uploads/2019/12/BotonOirs.jpg?resize=242%2C66" alt="">
                <img class="w-100 mb-3 wow fadeIn" src="https://i0.wp.com/complejohospitalariosanjose.cl/wp-content/uploads/2019/12/BotonOirs.jpg?resize=242%2C66" alt="">
                <img class="w-100 mb-3 wow fadeIn" src="https://i0.wp.com/complejohospitalariosanjose.cl/wp-content/uploads/2019/12/BotonOirs.jpg?resize=242%2C66" alt="">
                <img class="w-100 mb-3 wow fadeIn" src="https://i0.wp.com/complejohospitalariosanjose.cl/wp-content/uploads/2019/12/BotonOirs.jpg?resize=242%2C66" alt="">
                <img class="w-100 mb-3 wow fadeIn" src="https://i0.wp.com/complejohospitalariosanjose.cl/wp-content/uploads/2019/12/BotonOirs.jpg?resize=242%2C66" alt="">
                <img class="w-100 mb-3 wow fadeIn" src="https://i0.wp.com/complejohospitalariosanjose.cl/wp-content/uploads/2019/12/BotonOirs.jpg?resize=242%2C66" alt="">          
            </div>    
        </div>
    </div>
</div>
<script src="/js/wow.min.js" type="text/javascript"></script>
<script>
    new WOW().init();
</script>
@include('web.partials.footer')
