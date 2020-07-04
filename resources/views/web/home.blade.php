@extends('layouts.web_app')
@section('content')
        <div>
            @include('web.partials.banner')
        </div>
        <hr>
        <div class="col-12" >
            <div>
                <h3 class="text-white"><span class="bg-fenton-dark px-3 py-1">ULTIMAS NOTICIAS</span></h3>
            </div>
            @include('web.posts.partials.card')
        </div>
        
        <script src="https://unpkg.com/@johmun/vue-tags-input/dist/vue-tags-input.js"></script>
@endsection

