@extends('layout.utama')

@section('isi')
    <div class="container my-5">
        <div class="row mt-5">
            <div class="col-md-12 mx-auto text-center ">
                <h1 class="text-white">Temukan Destinasi Wisata Alam Anda</h1>
            </div>
        </div>


        <div id="wisata my-5">
            <div class="container my-5">
                <div class="row mb-4">

                    {{-- @foreach ($posts as $kota) --}}
                    <div class="col-sm-3 col-md-3">
                        <div class="card h-100">
                            <a href="/wisata-kota/{{ $slug }}">
                                <img src="https://sikidang.com/wp-content/uploads/Taman-Air-Mancur-Sri-Baduga-1.jpg"
                                    class="card-img-top" alt="Image">
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <h5 class="card-title">{{ $nama }}</h5>
                                    {{-- <p class="card-text">Description of image</p> --}}
                                </div>
                            </a>
                        </div>
                    </div>
                    {{-- @endforeach --}}

                </div>
            </div>
        </div>
    </div>
@endsection
