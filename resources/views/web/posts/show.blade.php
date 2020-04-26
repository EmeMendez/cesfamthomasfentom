@extends('layouts.web_app')
@section('content')
<a href="#modal_image" data-toggle="modal" data-target="#modal_image">
    <div class="col-12">
        <img class="img-fluid" src="/{{$post->image}}"   alt="">
    </div>
</a>
<div class="card bg-white" style="border:0px">
<h2 class="pl-3 mt-4">{{$post->name}}</h2>

<span class="pl-3 d-inline">
    <svg class="bi bi-calendar" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" clip-rule="evenodd"/>
        <path fill-rule="evenodd" d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
    </svg>
    {{$post->created_at->diffForHumans()}}
    <svg class="bi bi-folder ml-3" width="1.1em" height="1.1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M9.828 4a3 3 0 01-2.12-.879l-.83-.828A1 1 0 006.173 2H2.5a1 1 0 00-1 .981L1.546 4h-1L.5 3a2 2 0 012-2h3.672a2 2 0 011.414.586l.828.828A2 2 0 009.828 3v1z"/>
        <path fill-rule="evenodd" d="M13.81 4H2.19a1 1 0 00-.996 1.09l.637 7a1 1 0 00.995.91h10.348a1 1 0 00.995-.91l.637-7A1 1 0 0013.81 4zM2.19 3A2 2 0 00.198 5.181l.637 7A2 2 0 002.826 14h10.348a2 2 0 001.991-1.819l.637-7A2 2 0 0013.81 3H2.19z" clip-rule="evenodd"/>
      </svg>
    <a href="{{route('web.fenton.category',$post->category->url)}}" class="text-primary">{{$post->category->name}}</a>
</span>

<div class="card-body" style="font-size:15px;font-family: 'Quicksand', sans-serif;">
    <!-- start post content -->
    {!! $post->body  !!}
    <!-- end post content -->

    <!-- start post images (gallery) -->
    <div class="row">
      <div class="col-12">
        <p><b>Más imágenes de esta publicación</b></p>
      </div>
    @foreach ($post->images as $img)
        <div class="col-6 col-md-3 pr-2 pb-3">
            <a href="#modal_galery" data-toggle="modal" data-target="#modal_galery">
            <img class="w-100 images-post" src="/{{$img->path}}" alt="">
        </a>
        </div>
    @endforeach
    </div>
    <!-- end post images (gallery) -->

    <!-- start tags -->
    <span><b>Etiquetas : </b></span>
    @foreach ($post->tags as $tag)
      <span>
        <svg class="bi bi-tag" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M.5 2A1.5 1.5 0 012 .5h4.586a1.5 1.5 0 011.06.44l7 7a1.5 1.5 0 010 2.12l-4.585 4.586a1.5 1.5 0 01-2.122 0l-7-7A1.5 1.5 0 01.5 6.586V2zM2 1.5a.5.5 0 00-.5.5v4.586a.5.5 0 00.146.353l7 7a.5.5 0 00.708 0l4.585-4.585a.5.5 0 000-.708l-7-7a.5.5 0 00-.353-.146H2z" clip-rule="evenodd"/>
          <path fill-rule="evenodd" d="M2.5 4.5a2 2 0 114 0 2 2 0 01-4 0zm2-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"/>
        </svg>
      </span>  
      <a href="{{route('web.fenton.tag',$tag->url)}}"><span class="text-fenton-orange mr-3">{{$tag->name}} </span></a>
    @endforeach <!-- end tags -->
    </div>
</div>

<!-- start modal post imag -->
<div class="modal fade col-12" id="modal_image" tabindex="-1" role="dialog" aria-labelledby="modal_imageTitle" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">  
        <div class="text-center mx-auto">
        <img src="/{{$post->image}}" class="img-fluid rounded"  alt="">
        </div>
    </div>
</div>
<!-- end modal post imag -->

<!-- Modal gallery -->
<div class="modal fade col-12" id="modal_galery" tabindex="-1" role="dialog" aria-hidden="true">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">  
      <div class="modal-content">
          <div class="modal-body p-0">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                @foreach ($post->images as $index => $img)                     
                <div class="carousel-item @if($index == 0)  active @endif objetfitcover">
                  <img src="/{{$img->path}}" class="d-md-block img-fluid gallery d-none" alt="...">
                  <div class="col-12 d-md-none  d-block px-0">
                    <img src="/{{$img->path}}" class=" img-fluid" alt="..."  style="height:230px">
                  </div>
                </div>
                @endforeach
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
  </div>
</div>
<!-- end modal gallery  -->


@endsection