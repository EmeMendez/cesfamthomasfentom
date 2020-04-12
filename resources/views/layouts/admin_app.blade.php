<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin | {{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand text-secondary" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            @can('admin.categories.index')
                            <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.categories.index')}}">Categorías</a>
                            </li> 
                            @endcan
                            @can('admin.tags.index')  
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.tags.index')}}">Etiquetas</a>
                            </li>
                            @endcan
                            @can('admin.posts.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.posts.index')}}">Posts</a>
                            </li> 
                            @endcan
                            @can('admin.users.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.users.index')}}">Usuarios</a>
                            </li> 
                            @endcan
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">
                                        Mi cuenta
                                     </a>                                      
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                 
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="py-4">
            {{-- start info message --}}
            <div class="container">
                <div class="col-10 mx-auto px-0">
                    @if(session('info'))
                    <div class="alert alert-success" role="alert">
                        {!! session('info') !!}
                      </div>                    
                    @endif
                </div>
            </div>
            {{-- end info message --}}

            {{-- start errors --}}
            <div class="container">
                <div class="col-10 mx-auto">
                    @if(count($errors))
                    <div class="alert alert-danger px-4" role="alert">
                       <ul>
                           @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                           @endforeach
                       </ul>
                      </div>                    
                    @endif
                </div>
            </div>
            {{-- end errors --}}
        </div>
        <div id="app">
            @yield('content')
        
        </div>
    </div>
</body>
</html>





<script src="{{ asset('js/app.js') }}"></script>
<script  src="/ckeditor/ckeditor.js"></script>
<script>
 try{
  if(document.getElementById('body').value!=null) {
  CKEDITOR.config.height = 400;
  CKEDITOR.replace("body");
  }
}catch(err){
    //can't find element with id "body"
}
</script>
