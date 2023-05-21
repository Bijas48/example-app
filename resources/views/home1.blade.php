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
<<<<<<< HEAD
    </div>
    
    <!-- Div 2 - Card with Title -->
    <div class="container my-5">
        <h1>Layanan</h1>
        <div class="row gy-2">
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <a href="#">
                      <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
                    </a>
                  </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <a href="#">
                      <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
                    </a>
                  </div>
            </div>
            <div class="col-sm-12 col-md-4">
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
        <div class="row gy-3">
            <div class="col-sm-6 col-md-3">
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
            <div class="col-sm-6 col-md-3">
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
            <div class="col-sm-6 col-md-3">
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
            <div class="col-sm-6 col-md-3">
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
=======
>>>>>>> 0163fbff0b57b825d734f5412f11d296548435e8
</div>

<!-- Div 2 - Card with Title -->
<div class="container my-5">
  <h1 class="text-center text-white">Public Service In Purwakarta</h1>
  <div class="row">
    <div class="col-sm-3 col-md-4">
      <div class="card">
        <a href="#">
          <img src="https://disipusda.purwakartakab.go.id/wp-content/uploads/2020/02/kantor-sekre.jpg" class="card-img-top" alt="...">
        </a>
      </div>
    </div>
    <div class="col-sm-3 col-md-4">
      <div class="card">
        <a href="#">
          <img src="https://www.mandalapos.co.id/wp-content/uploads/2022/02/kemenag-purwakarta.png" class="card-img-top" alt="...">
        </a>
      </div>
    </div>
    <div class="col-sm-3 col-md-4">
      <div class="card">
        <a href="#">
          <img src="https://cdn0-production-images-kly.akamaized.net/4VHQS7Gfvmvm-LtcsEmtGjczWWE=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2966692/original/029988300_1573650229-image2__7_.jpeg" class="card-img-top" alt="...">
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
            <img src="https://sikidang.com/wp-content/uploads/Taman-Air-Mancur-Sri-Baduga-1.jpg" class="card-img-top" alt="Image">
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
<<<<<<< HEAD
    

    <!-- Div 4 - Carousel Gallery -->
    <div class="container">
        <div id="carouselGallery" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row g-0">
                        <div class="col-sm-6 col-md-3">
                            <img src="https://picsum.photos/id/120/100/100" class="d-block w-100" alt="Gallery 1">
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img src="https://picsum.photos/id/130/100/100" class="d-block w-100" alt="Gallery 2">
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img src="https://picsum.photos/id/203/100/100" class="d-block w-100" alt="Gallery 3">
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img src="https://picsum.photos/id/223/100/100" class="d-block w-100" alt="Gallery 4">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row g-0">
                        <div class="col-sm-6 col-md-3">
                            <img src="https://picsum.photos/id/123/100/100" class="d-block w-100" alt="Gallery 5">
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img src="https://picsum.photos/id/321/100/100" class="d-block w-100" alt="Gallery 6">
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img src="https://picsum.photos/id/210/100/100" class="d-block w-100" alt="Gallery 7">
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img src="https://picsum.photos/id/253/100/100" class="d-block w-100" alt="Gallery 8">
                        </div>
                    </div>
                </div>
=======
      <div class="col-sm-3 col-md-3">
        <div class="card">
          <a href="">
            <img src="https://lh3.googleusercontent.com/p/AF1QipMxLHB8LlpY1aUec8jlEqMYvN2W1FGTHjY295P7=s680-w680-h510" class="card-img-top" alt="Image">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <h5 class="card-title">Image Test</h5>
              <p class="card-text">Description of image</p>
              <div id="rate" class="d-flex align-items-center">
                <i class="bi bi-star-fill"></i>
                <p class="mb-0 ml-1"> 5</p>
              </div>
>>>>>>> 0163fbff0b57b825d734f5412f11d296548435e8
            </div>
          </a>
        </div>
<<<<<<< HEAD
    </div>

    <!-- Div 5 - Comments -->
    <div id="coment" class="container my-5">
        <div class="row">
            <div class="col-sm-8 col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur, ipsum eu congue posuere, velit velit convallis velit, euismod consectetur arcu sapien non nibh.</p>
                    </div>
                    <div class="card-img">
                      <img src="https://via.placeholder.com/100" class="rounded-circle mx-auto my-3 " alt="User Avatar">
                    </div>
                  </div>
            </div>
            <div class="col-sm-8 col-md-4">
                <div class="card text-center second-card">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur, ipsum eu congue posuere, velit velit convallis velit, euismod consectetur arcu sapien non nibh.</p>
                    </div>
                    <div class="card-img">
                        <img src="https://via.placeholder.com/100" class="rounded-circle mx-auto my-3 " alt="User Avatar">
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur, ipsum eu congue posuere, velit velit convallis velit, euismod consectetur arcu sapien non nibh.</p>
                    </div>
                    <div class="card-img">
                      <img src="https://via.placeholder.com/100" class="rounded-circle mx-auto my-3 " alt="User Avatar">
                    </div>
                  </div>
=======
      </div>
      <div class="col-sm-3 col-md-3">
        <div class="card">
          <a href="">
            <img src="https://www.javatravel.net/wp-content/uploads/2021/10/Kegiatan-Curug-Tilu.jpg" class="card-img-top" alt="Image">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <h5 class="card-title">Image Test</h5>
              <p class="card-text">Description of image</p>
              <div id="rate" class="d-flex align-items-center">
                <i class="bi bi-star-fill"></i>
                <p class="mb-0 ml-1"> 5</p>
              </div>
>>>>>>> 0163fbff0b57b825d734f5412f11d296548435e8
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-3 col-md-3">
        <div class="card">
          <a href="">
            <img src="https://lh3.googleusercontent.com/p/AF1QipNmHYMZOQ42Cif8gwoifirbquKb0AdhkkTx33Ve=s680-w680-h510" class="card-img-top" alt="Image">
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
          <h3 class="title">Ujang
            <span class="post">- Seorang bapak</span>
          </h3>
          <p class="description">
            Purwakarta journey sangat membantu saya dalam bertamsya di Kota Istimewa ini
          </p>
        </div>
        <div class="testimonial">
          <h3 class="title">Emah
            <span class="post">- Ibu PKK</span>
          </h3>
          <p class="description">
            Purwakarta Journey adalah sebuah web yang luar biasa! Mereka menyediakan informasi yang lengkap dan akurat tentang wisata alam di Purwakarta. Dengan bantuan web ini, saya bisa menemukan destinasi alam yang menakjubkan dan tersembunyi di daerah tersebut.
          </p>
        </div>
        <div class="testimonial">
          <h3 class="title">Obleh
            <span class="post">- Pengusaha</span>
          </h3>
          <p class="description">
            Informasi yang disediakan sangat berguna, terutama tentang wisata alam di Purwakarta. Saya mendapatkan banyak ide destinasi menarik yang belum pernah saya dengar sebelumnya.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection