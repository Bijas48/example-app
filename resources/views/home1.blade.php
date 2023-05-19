@extends('layout.utama')

@section('isi')

<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://phinemo.com/wp-content/uploads/2016/01/sri-baduga.jpg" class="d-block w-100" alt="Image 1" width="714" height="450">
      <div class="carousel-caption d-none d-md-block">
        <h5>Image 1</h5>
        <p>Description of image 1</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/id/240/100/100" class="d-block w-100" alt="Image 2" width="500px" height="500px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Image 2</h5>
        <p>Description of image 2</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/id/23/100/100" class="d-block w-100" alt="Image 3" width="500px" height="500px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Image 3</h5>
        <p>Description of image 3</p>
      </div>
    </div>
  </div>
  {{-- <button class="carousel-controlprev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> --}}
</div>

<!-- Div 2 - Card with Title -->
<div class="container my-5">
  <h1 class="text-center text-white">Public Service In Purwakarta</h1>
  <div class="row">
    <div class="col-sm-3 col-md-4">
      <div class="card">
        <a href="#">
          <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
        </a>
      </div>
    </div>
    <div class="col-sm-3 col-md-4">
      <div class="card">
        <a href="#">
          <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
        </a>
      </div>
    </div>
    <div class="col-sm-3 col-md-4">
      <div class="card">
        <a href="#">
          <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
        </a>
      </div>
    </div>
  </div>
</div>


<div id="wisata my-5">
  <div class="container my-5">
    <h1 class="text-center text-white">Popular Place In Purwakarta</h1>
    <div class=" row">
      <div class="col-sm-3 col-md-3">
        <div class="card">
          <a href="">
            <img src="https://picsum.photos/id/90/100/100" class="card-img-top" alt="Image">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <h5 class="card-title">Image Test</h5>
              <p class="card-text">Description of image</p>
              <div id="rate" class="d-flex align-items-center">
                <i class="bi bi-star-fill"></i>
                <p class="mb-0 ml-1"> 5</p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-3 col-md-3">
        <div class="card">
          <a href="">
            <img src="https://picsum.photos/id/393/100/100" class="card-img-top" alt="Image">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <h5 class="card-title">Image Test</h5>
              <p class="card-text">Description of image</p>
              <div id="rate" class="d-flex align-items-center">
                <i class="bi bi-star-fill"></i>
                <p class="mb-0 ml-1"> 5</p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-3 col-md-3">
        <div class="card">
          <a href="">
            <img src="https://picsum.photos/id/78/100/100" class="card-img-top" alt="Image">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <h5 class="card-title">Image Test</h5>
              <p class="card-text">Description of image</p>
              <div id="rate" class="d-flex align-items-center">
                <i class="bi bi-star-fill"></i>
                <p class="mb-0 ml-1"> 5</p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-3 col-md-3">
        <div class="card">
          <a href="">
            <img src="https://picsum.photos/id/100/100/100" class="card-img-top" alt="Image">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <h5 class="card-title">Image Test</h5>
              <p class="card-text">Description of image</p>
              <div id="rate" class="d-flex align-items-center">
                <i class="bi bi-star-fill"></i>
                <p class="mb-0 ml-1"> 5</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<hr class="text-white my-5">

<div class="container my-5 testi">
  <div class="row">
    <div class="col-md-12">
      <div id="testimonial-slider" class="owl-carousel">
        <div class="testimonial">
          <h3 class="title">Williamson
            <span class="post">- Web Developer</span>
          </h3>
          <p class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eum excepturi incidunt laudantium nesciunt omnis, provident repudiandae rerum sed! Amet blanditiis eaque eu!
          </p>
        </div>
        <div class="testimonial">
          <h3 class="title">Kristina
            <span class="post">- Web Designer</span>
          </h3>
          <p class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eum excepturi incidunt laudantium nesciunt omnis, provident repudiandae rerum sed! Amet blanditiis eaque eu!
          </p>
        </div>
        <div class="testimonial">
          <h3 class="title">Steve Thomas
            <span class="post">- Web Developer</span>
          </h3>
          <p class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eum excepturi incidunt laudantium nesciunt omnis, provident repudiandae rerum sed! Amet blanditiis eaque eu!
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection