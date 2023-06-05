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
                    <p class="text-white">{{ $posts->deksripsi }}</p>
                </div>
                <p class="text-white-50">{{ $posts->lokasi }}</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-white">Fasilitas</h2>
                <p class="text-white">{!! $posts->fasilitas !!}</p>
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
                {!! $posts->gmaps !!}
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


    <div class="container my-4 pt-4" id="anchorbelowgmaps">
        <div class="row">
            <div class="col-sm-4">
                <h4 class="text-white">Phone</h4>
                <p class="text-white"><a href="tel:{{ $posts->telp }}" target="_blank">{{ $posts->telp }}</a></p>
            </div>
            <div class="col-sm-4">
                <h4 class="text-white">Email</h4>
                <p class="text-white"><a href="mailto:{{ $posts->email }}" target="_blank">{{ $posts->email }}</a></p>
            </div>
            <div class="col-sm-4">
                <h4 class="text-white">Website</h4>
                <p class="text-white"><a href="{{ $posts->url }}" target="_blank">{{ $posts->url }}</a></p>
            </div>
        </div>
    </div>
@endsection
