@foreach($posts as $post)
    <div class="row py-3">
        <div class="col-12 col-md-4 objetfitcover">
            <img class="img-fluid" src="/{{$post->image}}" alt="">
        </div>
        <div class="col-12 col-md-8">
            <h5 class="text-dark text-uppercase">{{$post->name}}</h5>
            <span>
                <svg class="bi bi-calendar" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                </svg>
                {{$post->created_at->diffForHumans()}}
            </span><br>
            <span>{{Str::limit($post->excerpt,130)}}</span><br>
        <a href="{{route('web.fenton.category',$post->category->url)}}"><span class="bg-fenton-gold text-white mr-2">{{$post->category->name}} </span>                  
                </a>
                @foreach ($post->tags as $tag)
                    <a href="{{route('web.fenton.tag',$tag->url)}}"><span class="bg-secondary text-white mr-2">{{$tag->name}} </span></a>
                @endforeach
                <br>
                <p class="mt-2 font-weight-bold"><a href="#" class=" text-primary">Leer más...</a></p>
        </div>
    </div>
@endforeach