@extends('layout.utama')

@section('isi')
    <div class="container my-5">
        <div class="row mt-5">
            <div class="col-md-12 mx-auto text-center ">
                <h1 class="text-white">Temukan Destinasi Wisata Anda</h1>
            </div>
            <div class="col-md-5 mx-auto">
                <form action="{{ url('/tour/search') }}" class="form-inline" method="GET">
                    <div class="input-group rounded">
                        <input type="search" class="form-control rounded" name="search" placeholder="Temukan Wisata Anda"
                            aria-label="Search" aria-describedby="search-addon" />
                        <button class="btn btn-outline-secondary bg-white border-0" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
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
                                <img src="{{ asset($alam->gambar) }}" class="card-img-top" alt="Image">
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
                                <img src="{{ asset($kota->gambar) }}" class="card-img-top" alt="Image">
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
