@extends('layout.utama')

@section('isi')
    <div class="container my-5">
        <div class="row mt-5">
            <div class="col-md-12 mx-auto text-center ">
                <h1 class="text-white">Temukan Destinasi Wisata Anda</h1>
            </div>
            <div class="col-md-5 mx-auto">
                <div class="small fw-light"></div>
                <div class="input-group">
                    <input class="form-control border-end-0 border" type="search" value="search" id="example-search-input">
                    <span class="input-group-append">
                        <button class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border ms-n5"
                            type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>


    <div id="wisata my-5">
        <div class="container my-5">
            <h1 class="text-center text-white mb-3">Wisata Alam</h1>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-center">

                @foreach ($postsalam as $alam)
                    <div class="col mb-4">
                        <div class="card h-100">
                            <a href="/wisata-alam/{{ $alam->slug }}">
                                <img src="{{ $alam->gambar }}" class="card-img-top" alt="Image">
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <h5 class="card-title">{{ $alam->nama }}</h5>
                                    {{-- <p class="card-text">Description of image</p> --}}
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


    <div id="wisata my-5">
        <div class="container my-5">
            <h1 class="text-center text-white mb-3">Wisata Kota</h1>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-center">

                @foreach ($postskota as $kota)
                    <div class="col mb-4">
                        <div class="card h-100">
                            <a href="/wisata-kota/{{ $kota->slug }}">
                                <img src="{{ $kota->gambar }}" class="card-img-top" alt="Image">
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <h5 class="card-title">{{ $kota->nama }}</h5>
                                    {{-- <p class="card-text">Description of image</p> --}}
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
