@include('web.partials.head')
@include('web.partials.logotype')
@include('web.partials.header')
<div class="container mb-5">
    <div class="row mt-4">
        <div class="col-12 col-md-9">
                @yield('content')
        </div>
        <div class="col-12 col-md-3">
            <form class="form-inline mb-3">
                <input class="mr-sm-2 col-12 mb-2 mt-0" type="text" placeholder="Buscar" aria-label="Search">
                <button class="col-12 py-2" type="submit">Buscar</button>
            </form>
            <div>
                <img class="w-100 mb-3" src="https://i0.wp.com/complejohospitalariosanjose.cl/wp-content/uploads/2019/12/BotonOirs.jpg?resize=242%2C66" alt="">
                <img class="w-100 mb-3" src="https://i0.wp.com/complejohospitalariosanjose.cl/wp-content/uploads/2019/12/BotonOirs.jpg?resize=242%2C66" alt="">
                <img class="w-100 mb-3" src="https://i0.wp.com/complejohospitalariosanjose.cl/wp-content/uploads/2019/12/BotonOirs.jpg?resize=242%2C66" alt="">
                <img class="w-100 mb-3" src="https://i0.wp.com/complejohospitalariosanjose.cl/wp-content/uploads/2019/12/BotonOirs.jpg?resize=242%2C66" alt="">
                <img class="w-100 mb-3" src="https://i0.wp.com/complejohospitalariosanjose.cl/wp-content/uploads/2019/12/BotonOirs.jpg?resize=242%2C66" alt="">
                <img class="w-100 mb-3" src="https://i0.wp.com/complejohospitalariosanjose.cl/wp-content/uploads/2019/12/BotonOirs.jpg?resize=242%2C66" alt="">
                <img class="w-100 mb-3" src="https://i0.wp.com/complejohospitalariosanjose.cl/wp-content/uploads/2019/12/BotonOirs.jpg?resize=242%2C66" alt="">
                <img class="w-100 mb-3" src="https://i0.wp.com/complejohospitalariosanjose.cl/wp-content/uploads/2019/12/BotonOirs.jpg?resize=242%2C66" alt="">          
            </div>    
        </div>
    </div>
</div>
@include('web.partials.footer')
