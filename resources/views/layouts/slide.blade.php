<!DOCTYPE html>
<html lang="en">
<head>



    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Laundry</title>
    <link href="{{secure_asset('css/slide.css')}}" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">   
</head>
<body>
@include('sweetalert::alert')
<nav class="sidebar close">
        <header>
            <div class=" image-text">
                <span class="image">
          
                <img class="bx" src="{{secure_asset('secure_assets/img/img_properties/service.png')}}"/>
                </span>

                <div class="text logo-text mt-3">
                    <span class="name">Hai {{Auth::user()->name}}!</span>
              </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
               
               
                    <li class="nav-link">
                        <a href="{{route('createTransaksi')}}">
                            <i class='bx bx-pencil icon' ></i>
                            <span class="text nav-text">Tambah Transaksi</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{route('listMember')}}">
                            <i class='bx bx-id-card icon'></i>
                            <span class="text nav-text">Tambah Customer</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{route('listUser')}}">
                            <i class='bx bxs-user-plus icon'></i>
                            <span class="text nav-text">Tambah Admin</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{route('listTransaksiProses')}}">
                            <i class='bx bxs-hourglass-bottom  icon' ></i>
                            <span class="text nav-text">Transaksi diProses</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{route('listTransaksi')}}">
                            <i class='bx bx-message-square-check  icon' ></i>
                            <span class="text nav-text">Transaksi Selesai</span>
                        </a>
                    </li>
                    

                    
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="javascript:void" onclick="$('#logout-form').submit();">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                   
                </li>

            </div>
        </div>

    </nav>

    <main class="">
            @yield('contents')
    </main>
    <script src=" {{secure_asset('js/slide.js')}}"></script>

   </body>
</html>