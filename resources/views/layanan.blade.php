@extends('layout.utama')

@section('isi')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 my-6 pt-3" style="height: 80px">
                <h1 class="text-center text-white">Layanan Publik</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                @foreach ($posts as $layanan)
                    <a href="{{ $layanan->url }}" class="service-card">
                        <div class="card-image">
                            <img src="{{ $layanan->gambar }}" alt="">
                        </div>
                        <div class="card-content">
                            <h5 class="text-white">{{ $layanan->nama }}</h5>
                            <p class="text-white">{{ $layanan->deksripsi }}</p>
                            <p class="text-white-50"> {{ $layanan->lokasi }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
