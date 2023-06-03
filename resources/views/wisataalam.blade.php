@extends('layout.utama')

@section('isi')
    <div class="container my-5">
        <div class="row mt-5">
            <div class="col-md-12 mx-auto text-center">
                <h1 class="text-white">Temukan Destinasi Wisata Alam Anda</h1>
            </div>
        </div>
    </div>

    <div id="wisata my-5">
        <div class="container my-5">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-center">

                @foreach ($posts as $alam)
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
@endsection
