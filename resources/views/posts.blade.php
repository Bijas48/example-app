@extends('layout.utama')

@section('isi')
    <div class="container my-4">
        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="{{ asset($posts->gambar) }}" class="img-fluid" alt="Place Image">
            </div>
            <div class="col-md-8">
                <div id="isipost">
                    <h5 class="text-white">{{ $posts->nama }}</h5>
                    <p class="text-white">{{ $posts->text }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-white">Harga</h2>
                <p class="text-white">{!! $posts->harga !!}</p>
            </div>
            <div class="col-md-6">
                <h2 class="text-white">Jam Buka</h2>
                <p class="text-white">{!! $posts->jambuka !!}</p>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="mapouter">
            <div class="gmap_canvas">
                {!! $posts->lokasi !!}
            </div>
            <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    width: 100%;
                    height: 400px;
                }

                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    width: 100%;
                    height: 400px;
                }

                .gmap_iframe {
                    height: 400px !important;
                }
            </style>
        </div>
    </div>

    <div class="container my-4">
        <div id="carouselGallery" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row g-0">
                        <div class="col-sm-6 col-md-3">
                            <img src="{{ asset('images\Fotoviewmore\gunung bangkok\DSC07483.jpg') }}"
                                class="d-block w-100 h-100" alt="Gallery 1">
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img src="{{ asset('images\Fotoviewmore\gunung bangkok\Gunung-Bangkok.jpg') }}"
                                class="d-block w-100 h-100" alt="Gallery 2">
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img src="{{ asset('images\Fotoviewmore\gunung bangkok\OIP.jpg') }}" class="d-block w-100 h-100"
                                alt="Gallery 3">
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img src="{{ asset('images\Fotoviewmore\gunung bangkok\R.jpg') }}" class="d-block w-100 h-100"
                                alt="Gallery 4">
                        </div>
                    </div>
                </div>
                {{-- <div class="carousel-item">
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
                </div> --}}
            </div>
        </div>
    </div>
@endsection
