<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Laravel</title>
      <!-- icon bootstrap -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <!-- navbar -->
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
    <!-- content detail postingan -->
   <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-header">
                    <h2>install laravel</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <img src="{{ asset('/storage/posts/'.$posts->image) }}" style="width: 500px;"  class="rounded mx-auto d-block " alt="" srcset="">
                        </div>
                        <div class="col-md-6">
                            <h4>{{$posts->deskripsi}}</h4>
                            <p>28 Augustus 2023</p>
                        </div>
                        <div class="col-md-6 mt-5">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel nesciunt id earum at quos quae rem, doloribus tenetur laudantium, aut eveniet numquam natus quo eum debitis aspernatur. Animi, consectetur maiores?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
    <!-- end content -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>