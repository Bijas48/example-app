@extends('layout.utama')

@section('isi')

    <div class="container my-4">
    <div class="row">
      <div class="col-md-6">
        <img src="https://picsum.photos/300/178" class="img-fluid" alt="...">
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
          {{-- <h4 id="rating-value"></h4> --}}
        </div>
      </div>
      <div class="col-md-6">
        <div class="save">
          <div id="savecon">
            <h5 id="save-text">Save for later</h5>
            <i id="save-icon" class="bi bi-star"></i>
          </div>
        </div>
        <div id="isipost">
          <h5>Situ Buled</h5>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro explicabo perferendis harum deserunt in inventore molestias qui repudiandae adipisci ea modi quam voluptatum, esse excepturi exercitationem sunt fuga tempore error.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
      </div>
      <div class="col-md-6">
      </div>
    </div>
  </div>

  <div class="container">
    <iframe width="100%" height="300px" frameborder="0" allowfullscreen src="//umap.openstreetmap.fr/en/map/situ-buleud_905308?scaleControl=false&miniMap=true&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false"></iframe>
    </div>
  </div>

  <div class="container">
    <div id="carouselGallery" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row g-0">
                    <div class="col-sm-6 col-md-3">
                        <img src="https://picsum.photos/id/120/100/100" class="d-block w-100" alt="Gallery 1">
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <img src="https://picsum.photos/id/130/100/100" class="d-block w-100" alt="Gallery 2">
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <img src="https://picsum.photos/id/203/100/100" class="d-block w-100" alt="Gallery 3">
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <img src="https://picsum.photos/id/223/100/100" class="d-block w-100" alt="Gallery 4">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
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
            </div>
        </div>
        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselGallery" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselGallery" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> --}}
    </div>
</div>

  
    
@endsection