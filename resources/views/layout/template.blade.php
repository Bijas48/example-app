<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Purwakarta Journey</title>
    <link rel="stylesheet" href="{{ url('/css/homepagecss.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top py-3" style="background-color: #73777B ;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="Logo" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Tour</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Public Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image2.jpg" class="d-block w-100" alt="Image 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Image 1</h5>
                    <p>Description of image 1</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image2.jpg" class="d-block w-100" alt="Image 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Image 2</h5>
                    <p>Description of image 2</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image3.jpg" class="d-block w-100" alt="Image 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Image 3</h5>
                    <p>Description of image 3</p>
                </div>
            </div>
        </div>
        <button class="carousel-controlprev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Div 2 - Card with Title -->
    <div class="container my-5">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card 2</h5>
                        <p class="card-text">Description of card 2</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card 2</h5>
                        <p class="card-text">Description of card 2</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card 2</h5>
                        <p class="card-text">Description of card 2</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Div 3 - Search Bar -->
    <div class="container my-5">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Div 4 - Carousel Gallery -->
    <div class="container my-5">
        <div id="carouselGallery" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <img src="gallery1.jpg" class="d-block w-100" alt="Gallery 1">
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <img src="gallery2.jpg" class="d-block w-100" alt="Gallery 2">
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <img src="gallery3.jpg" class="d-block w-100" alt="Gallery 3">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <img src="gallery4.jpg" class="d-block w-100" alt="Gallery 4">
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <img src="gallery5.jpg" class="d-block w-100" alt="Gallery 5">
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <img src="gallery6.jpg" class="d-block w-100" alt="Gallery 6">
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselGallery" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselGallery" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Div 5 - Comments -->
    <div class="container my-5">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <h2>Comments</h2>
                <hr>
                <div class="media">
                    <img src="avatar.jpg" class="mr-3" alt="Avatar">
                    <div class="media-body">
                        <h5 class="mt-0">John Doe</h5>
                        <p>Comment 1</p>
                    </div>
                </div>
                <div class="media">
                    <img src="avatar.jpg" class="mr-3" alt="Avatar">
                    <div class="media-body">
                        <h5 class="mt-0">Jane Doe</h5>
                        <p>Comment 2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">About Us</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contact Us</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-dark">Address: 123 Main St, City, State, Country</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Phone: 555-555-5555</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Email: info@website.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022
        </div>
    </footer>

    {{-- <script src="{{ asset('js/homepagejs.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>

</html>