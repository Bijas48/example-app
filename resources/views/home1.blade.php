@extends('layout.utama')

@section('isi')
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="overlay"></div>
                <img src="{{ asset('images/Slide/patung_badak.jpg') }}" class="d-block w-100" alt="Image 1" width="714"
                    height="450">
                {{-- <div class="content">
                    <h5>Image 1</h5>
                    <p>Description of image 1</p>
                </div> --}}
            </div>
            <div class="carousel-item">
                <div class="overlay"></div>
                <img src="{{ asset('images/Slide/Curug-tilu.jpg') }}" class="d-block w-100" alt="Image 2" width="500px"
                    height="500px">
                {{-- <div class="content">
                    <h5>Image 2</h5>
                    <p>Description of image 2</p>
                </div> --}}
            </div>
            <div class="carousel-item">
                <div class="overlay"></div>
                <img src="{{ asset('images/Slide/taman_sri_baduga.jpg') }}" class="d-block w-100" alt="Image 3"
                    width="500px" height="500px">
                {{-- <div class="content">
                    <h5>Image 3</h5>
                    <p>Description of image 3</p>
                </div> --}}
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

    <!-- Public Service -->
    <div class="container my-5">
        <h1 class="text-center text-white">Public Service In Purwakarta</h1>
        <div class="row">
            @foreach ($postslayanan as $index => $layanan)
                <div class="col-sm-3 col-md-4">
                    <div class="card">
                        <a href="/layanan/{{ $layanan->slug }}">
                            <img src="{{ $layanan->gambar }}" class="card-img-top" alt="...">
                        </a>
                    </div>
                </div>
                @if ($index === 2)
                @break
            @endif
        @endforeach
    </div>
</div>


<!-- Wisata -->
<div id="wisata" class="my-5">
    <div class="container">
        <h1 class="text-center text-white">Popular Place In Purwakarta</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-center">
            {{-- wisata kota --}}
            @php
                $counter = 0;
            @endphp
            @foreach ($postskota as $kota)
                @if ($counter >= 2)
                @break
            @endif
            <div class="col-sm-3 col-md-3">
                <div class="card">
                    <a href="/wisata-kota/{{ $kota->slug }}">
                        <img src="{{ $kota->gambar }}" class="card-img-top" alt="Image">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <h5 class="card-title">{{ $kota->nama }}</h5>
                        </div>
                    </a>
                </div>
            </div>
            @php
                $counter++;
            @endphp
        @endforeach

        {{-- wisata alam --}}
        @php
            $counter = 0;
        @endphp
        @foreach ($postsalam as $alam)
            @if ($counter >= 2)
            @break
        @endif
        <div class="col-sm-3 col-md-3">
            <div class="card">
                <a href="/wisata-alam/{{ $alam->slug }}">
                    <img src="{{ $alam->gambar }}" class="card-img-top" alt="Image">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <h5 class="card-title">{{ $alam->nama }}</h5>
                    </div>
                </a>
            </div>
        </div>
        @php
            $counter++;
        @endphp
    @endforeach
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
                Purwakarta Journey adalah sebuah web yang luar biasa! Mereka menyediakan informasi yang lengkap
                dan akurat tentang wisata alam di Purwakarta. Dengan bantuan web ini, saya bisa menemukan
                destinasi alam yang menakjubkan dan tersembunyi di daerah tersebut.
            </p>
        </div>
        <div class="testimonial">
            <h3 class="title">Obleh
                <span class="post">- Pengusaha</span>
            </h3>
            <p class="description">
                Informasi yang disediakan sangat berguna, terutama tentang wisata alam di Purwakarta. Saya
                mendapatkan banyak ide destinasi menarik yang belum pernah saya dengar sebelumnya.
            </p>
        </div>
    </div>
</div>
</div>
</div>
@endsection
