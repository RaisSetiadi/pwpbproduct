<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="style.css">
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="{{ asset('image/code.png') }}" style="width: 100px;" alt="" srcset="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('user.index')}}">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('user.halamanLaravel') }}">Laravel</a></li>
                            <li><a class="dropdown-item" href="{{ route('user.halamanjavascript') }}">Java Script</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('user.halamanjava')}}">Java</a></li>
                            <li><a class="dropdown-item" href="{{route('user.halamanruby')}}">Ruby</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- Carouserl Konten -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/code.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- end carousel -->

    <!-- recent post start  -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-5">
<<<<<<< HEAD
                <h5 style="text-align: center;">Home Page</h5>
                <hr />
            </div>
            <div class="judul-laravel">
              <h4>Laravel</h4>
              </div>
=======
                <h5>Home Page</h5>
                <hr />
            </div>
            <div class="judul-laravel">
             <a href="{{route('user.halamanLaravel')}}"style="text-decoration: none;"   >  <h5>Laravel</h5></a> 
            </div>
>>>>>>> 4274c4bfc4be97b02cebe1317a94e5e075115307
            @foreach ($laravels as $data)
                <div class="col-md-4 mt-5"> 
                    <div class="card">
                    <a href="{{ route('user.detailLaravel',$data->id) }}"><img src="{{ asset('/storage/laravel/'.$data->image) }}"  class="d-block w-100" alt=""></a> 
                        <div class="card-body">
                           <h5 class="card-title">{{ $data->title }}</h5>
                            <p class="card-title">{{ $data->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="judul-javascript mt-5">
            <a href="{{route('user.halamanjavascript')}}"style="text-decoration: none;"><h5>javascript</h5></a>
            </div>
            @foreach ($javascripts as $data)
                <div class="col-md-4 mt-5">
                    <div class="card">
<<<<<<< HEAD
                    <a href="#"><img src="{{ asset('/storage/javascript/'.$data->image) }}"  class="d-block w-100" alt=""></a> 
=======
                    <a href="{{ route('user.detailjavascript',$data->id) }}"><img src="{{ asset('/storage/javascript/'.$data->image) }}"  class="d-block w-100" alt=""></a> 
>>>>>>> 4274c4bfc4be97b02cebe1317a94e5e075115307
                        <div class="card-body">
                           <h5 class="card-title">{{ $data->title }}</h5>
                            <p class="card-title">{{ $data->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
<<<<<<< HEAD
            <h5>java</h5>
            @foreach ($posts as $post)
=======

            <div class="judul-java mt-5">
            <a href="{{route('user.halamanjava')}}" style="text-decoration: none;"><h5>java</h5></a>
            </div>

            @foreach ($javas as $data)
>>>>>>> 4274c4bfc4be97b02cebe1317a94e5e075115307
                <div class="col-md-4 mt-5">
                    <div class="card">
                    <a href="{{ route('user.detailjava',$data->id) }}"><img src="{{ asset('/storage/java/' . $data->image) }}"  class="d-block w-100" alt=""></a> 
                        <div class="card-body">
                           <h5 class="card-title">{{ $data->title }}</h5>
                            <p class="card-title">{{ $data->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="judul-ruby mt-5">
            <a href="{{route('user.halamanruby')}}" style="text-decoration: none;"><h5>Ruby</h5></a>
            </div>
            @foreach ($rubys as $data)
                <div class="col-md-4 mt-5">
                    <div class="card">
                    <a href="{{ route('user.detailruby',$data->id) }}"><img src="{{ asset('/storage/ruby/' . $data->image) }}"  class="d-block w-100" alt=""></a> 
                        <div class="card-body">
                           <h5 class="card-title">{{ $data->title }}</h5>
                            <p class="card-title">{{ $data->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



    <div class="d-flex justify-content-center mt-5">

      
    </div>

    <div class="footer bg-dark text-white p-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-youtube"></i>
                    <i class="bi bi-twitter"></i>
                    <hr />
                    <p>Tentang kami | kebijakan privasi | ketentuan | kontak
                        2019-2021 .jurnal WP -tempat belajar Wordpress</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-down bg-primary  text-white py-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="copyright">
                        &copy; 2023 <strong>Copyright</strong> Website Ecommarce
                    </div>
                </div>

            </div>
        </div>
        <!-- end recent post -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>
