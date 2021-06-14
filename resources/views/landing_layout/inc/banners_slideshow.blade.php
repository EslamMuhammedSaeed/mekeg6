
<div id="demo" class="carousel slide" data-ride="carousel">
  
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    @foreach ($slides as $key => $slide)
      
      @if ($slide->active == 1)
        @if ($key == 0)
            <?php $active = 'active'; ?>
        @else
            <?php $active = ''; ?>
        @endif
        <div class="carousel-item {{$active}}">
          <img src="{{ filter_var($slide->path, FILTER_VALIDATE_URL) ? $slide->path : Voyager::image( $slide->path ) }}" class="d-block w-100 img-fluid" alt="...">
        </div>   
      @endif
      
    
    @endforeach
    {{-- <div class="carousel-item active">
      <img src="../images/heading-2.png" class="d-block w-100 img-fluid" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/slide1.jpg" class="d-block w-100 img-fluid" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/heading-3.png" class="d-block w-100 img-fluid" alt="...">
    </div> --}}
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

{{-- <header>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../images/heading-2.png" class="d-block w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../images/Heading-1.jpg" class="d-block w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../images/heading-3.png" class="d-block w-100 img-fluid" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev border-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" style="background-color:rgb(239, 239, 239,0)">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              
            </button>
            <button class="carousel-control-next border-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" style="background-color:rgb(239, 239, 239,0)">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              
            </button>
          </div>
    </header> --}}