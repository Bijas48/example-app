@extends('layout.utama')

@section('isi')

    <div class="container">
    <div class="row">
      <div class="col-md-10">
        <div class="rating-wrap">
          <div class="center-rate">
            <h3>Rate</h3>
            <fieldset class="rating">
              <input type="radio" id="star5" name="rating" value="5"/><label for="star5" class="full" title="Awesome"></label>
              <input type="radio" id="star4" name="rating" value="4"/><label for="star4" class="full"></label>
              <input type="radio" id="star3" name="rating" value="3"/><label for="star3" class="full"></label>
              <input type="radio" id="star2" name="rating" value="2"/><label for="star2" class="full"></label>
              <input type="radio" id="star1" name="rating" value="1"/><label for="star1" class="full"></label>
            </fieldset>
          </div>
          <h4 id="rating-value"></h4>
        </div>
      </div>
      <div class="col-md-2">
        <div class="save">
          <i id="save-icon" class="bi bi-star"></i>
          <h5 id="save-text">Save for later</h5>
        </div>
      </div>
    </div>
  </div>
    
@endsection