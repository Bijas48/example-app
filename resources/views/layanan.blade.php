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
      <div class="service-card">
        <div class="card-image">
          <img src="{{ asset('images/Slide/patung_badak.jpg') }}" alt="Service 1">
        </div>
        <div class="card-content">
          <h5 class="text-white">Service Title 1</h5>
          <p class="text-white">Description of Service 1</p>
          <p class="text-white">Location: Service Location 1</p>
        </div>
      </div>
      <div class="service-card">
        <div class="card-image">
          <img src="{{ asset('images\Slide\Air-Mancur-Sri-Baduga.jpg') }}" alt="Service 2">
        </div>
        <div class="card-content">
          <h5 class="text-white">Service Title 2</h5>
          <p class="text-white">Description of Service 2</p>
          <p class="text-white">Location: Service Location 2</p>
        </div>
      </div>
    </div>
  </div>
</div>

  
    
@endsection