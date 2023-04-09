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
                <img src="https://picsum.photos/id/237/100/100" class="d-block w-100" alt="Image 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Image 1</h5>
                    <p>Description of image 1</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/id/240/100/100" class="d-block w-100" alt="Image 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Image 2</h5>
                    <p>Description of image 2</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/id/23/100/100" class="d-block w-100" alt="Image 3">
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
        <h1>Documenter</h1>
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


    {{-- bawahnya --}}
<div id="wisata">
    <div class="container my-5">
        <h1>Wisata Populer</h1>
        <div class="row">
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

    
    <!-- Div 3 - Search Bar -->
    <div class="container my-5">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <img src="" alt="">
          </div>
          <div class="col-sm-6 col-md-9">
            <h3 class="text-center">Temukan Destinasi Wisata Anda</h3>
            <div class="input-group mb-3">
                <button type="button" class="btn btn-outline-secondary" id="basic-addon2">
                    <i class="bi bi-search"></i>
                  </button>
              <input type="text" class="form-control" placeholder="Masukan Nama Wisata" aria-label="Masukan Nama Wisata" aria-describedby="basic-addon1">
            </div>
          </div>
        </div>
      </div>
    

    <!-- Div 4 - Carousel Gallery -->
    <div class="container">
        <div id="carouselGallery" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <img src="https://picsum.photos/id/120/100/100" class="d-block w-100" alt="Gallery 1">
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <img src="https://picsum.photos/id/130/100/100" class="d-block w-100" alt="Gallery 2">
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <img src="https://picsum.photos/id/203/100/100" class="d-block w-100" alt="Gallery 3">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <img src="https://picsum.photos/id/123/100/100" class="d-block w-100" alt="Gallery 4">
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <img src="https://picsum.photos/id/321/100/100" class="d-block w-100" alt="Gallery 5">
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <img src="https://picsum.photos/id/210/100/100" class="d-block w-100" alt="Gallery 6">
                        </div>
                    </div>
                </div>
            </div>
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselGallery" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselGallery" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> --}}
        </div>
    </div>

    <!-- Div 5 - Comments -->
    <div id="coment" class="container my-5">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur, ipsum eu congue posuere, velit velit convallis velit, euismod consectetur arcu sapien non nibh.</p>
                    </div>
                    <div class="card-img">
                      <img src="https://via.placeholder.com/100" class="rounded-circle mx-auto my-3 " alt="User Avatar">
                    </div>
                  </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card text-center second-card">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur, ipsum eu congue posuere, velit velit convallis velit, euismod consectetur arcu sapien non nibh.</p>
                    </div>
                    <div class="card-img">
                        <img src="https://via.placeholder.com/100" class="rounded-circle mx-auto my-3 " alt="User Avatar">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur, ipsum eu congue posuere, velit velit convallis velit, euismod consectetur arcu sapien non nibh.</p>
                    </div>
                    <div class="card-img">
                      <img src="https://via.placeholder.com/100" class="rounded-circle mx-auto my-3 " alt="User Avatar">
                    </div>
                  </div>
            </div>
        </div>
    </div>

@endsection