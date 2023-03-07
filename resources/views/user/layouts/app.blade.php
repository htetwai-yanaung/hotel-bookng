<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="{{ url('asset/css/home.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body class="bg-light">
<header>
    {{-- <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
        <a href="#" class="logo text-decoration-none text-primary h4">EZBooking</a>
        <div class="d-flex col-lg-3 col-sm-6">
            <input type="text" name="" id="" class="form-control" placeholder="Search...">
            <button class="btn btn-primary ms-2"><i class="fa-solid fa-search"></i></button>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
              <i class="fa-solid fa-user"></i>
            </button>

            @if (Auth::user())
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a href="" class="dropdown-item">Booking History</a></li>
                <li><a href="" class="dropdown-item">Messages</a></li>
                <li><a href="" class="dropdown-item">Wishlists</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a href="" class="dropdown-item">My account</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a href="" class="dropdown-item">Help</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item ">Logout</button>
                    </form>
                </li>
            </ul>
            @else
            <ul class="dropdown-menu dropdown-menu-lg-end">
                <li><a href="{{ route('login') }}" class="dropdown-item">Login</a></li>
                <li><a href="{{ route('register') }}" class="dropdown-item">Register</a></li>
            </ul>
            @endif
        </div>
    </div> --}}
    <div class="container-fluid shadow-sm">
        <div class="row p-3">
            <div class="col-lg col-md col-12 mb-3 mb-md-0">
                <a href="{{ route('room.index') }}" class="logo text-decoration-none text-primary h4">EZBooking</a>
            </div>
            <div class="col-lg col-md-6 col-9">
                <div class="d-flex col">
                    <input type="text" name="" id="" class="form-control" placeholder="Search...">
                    <button class="btn btn-primary ms-2"><i class="fa-solid fa-search"></i></button>
                </div>
            </div>
            <div class="col-lg col-md col">
                <div class="btn-group float-end">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                      <i class="fa-solid fa-user"></i>
                    </button>

                    @if (Auth::user())
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a href="" class="dropdown-item">Booking History</a></li>
                        <li><a href="" class="dropdown-item">Messages</a></li>
                        <li><a href="" class="dropdown-item">Wishlists</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a href="" class="dropdown-item">My account</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a href="" class="dropdown-item">Help</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item ">Logout</button>
                            </form>
                        </li>
                    </ul>
                    @else
                    <ul class="dropdown-menu dropdown-menu-lg-end">
                        <li><a href="{{ route('login') }}" class="dropdown-item">Login</a></li>
                        <li><a href="{{ route('register') }}" class="dropdown-item">Register</a></li>
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
    {{-- <nav class="nav-bar">
        <div class="d-flex">
            <a href="#" class="text-decoration-none text-muted active">
                <i class="fa-solid fa-water"></i><span>Lake View 1</span>
            </a>
            <a href="#" class="text-decoration-none text-muted">
                <i class="fa-solid fa-umbrella-beach"></i><span>Lake View 2</span>
            </a>
            <a href="#" class="text-decoration-none text-muted">
                <i class="fa-solid fa-cloud-sun"></i><span>2nd Row Lake View</span>
            </a>
            <a href="#" class="text-decoration-none text-muted">
                <i class="fa-solid fa-tree"></i><span>3rd Row Lake View</span>
            </a>
            <a href="#" class="text-decoration-none text-muted">
                <i class="fa-solid fa-mountain"></i><span>Mountain View</span>
            </a>
            <a href="#" class="text-decoration-none text-muted">
                <i class="fa-solid fa-icicles"></i><span>Guide View</span>
            </a>
            <a href="#" class="text-decoration-none text-muted">
                <i class="fa-solid fa-people-roof"></i><span>Guide Room</span>
            </a>
            <a href="#" class="text-decoration-none text-muted">
                <i class="fa-solid fa-bed"></i><span>Extra Bed</span>
            </a>
        </div>
    </nav> --}}
</header>

@yield('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@yield('scriptSource')
<footer class="p-3 text-center border-top bg-white">
    © 2023 EZBooking, Inc.
</footer>
</body>
</html>
