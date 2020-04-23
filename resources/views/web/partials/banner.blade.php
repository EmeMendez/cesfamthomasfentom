      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          @foreach ($banners as $index => $banner)
          <div class="carousel-item @if($index == 0) active @endif">
          <a href="{{$banner->link}}" target="_blank" ><img class="img-fluid" src="/{{$banner->path}}" class="d-block w-100 h-45" alt="...">
            </a>
            <div class="carousel-caption text-left">
            <h3>{{$banner->title}}</h3>
              <p class="d-md-block d-none">{{$banner->description}}</p>
            </div>
          </div>
          @endforeach     
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>