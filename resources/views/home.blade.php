@if($setting == 0)
<div class="d-flex justify-content-center">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="">
  <div class="row">
  <h2 class="mt-5">Setting Page Belum di setting</h2>
  </div>
  <div class="row">
  <h5 class="ms-3">Silakan isi setting page di Dashboard</h5>
  </div>
  <div class="row">
  <a class="btn btn-primary" href="/login" role="button">Login</a>
  </div>
</div>

</div>
@else
<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/vendor/datatables/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/vendor/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/vendor/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Icon Title -->
    <link rel="icon" href="https://betterlaundry.000webhostapp.com/assets/img/img_properties/logo.jpeg">
    
	</style>
    <style>
      body {
        font-size: 1.2rem;
        font-weight: 400;
        font-family: 'Montserrat', sans-serif;
      }

      .oleo-font {
        font-weight: bold;
        font-family: 'Oleo Script', cursive;
      }
      .text-shadow {
        text-shadow: 2px 2px 6px rgba(0,0,0,0.5);
      }

    </style>

    <title>Selamat Datang di Better Laundry!</title>
  </head>
  <body>
    <link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/css/carousel.css">
<link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/css/sidebar.css">
<link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/css/responsive.css">


<style>
h2{
    font-family: serif; 
    color: #820000;
    text-align:center;
    font-size: 30px;
    }

.container .paragraf{
width: 100%;
float: left;
font-size: 15px;
color: #090808;
text-align: justify;
margin-left: 0px;
margin-top: 10px;
}

.services_section .many_taital{
width: 100%;
float: left;
font-size: 15px;
color: #090808;
text-align: center;
margin-left: 0px;
font-family: sans-serif; 
}

.dummy_text{
    text-align: justify;
}

th{
	background-color: #93C6E7;
	text-align: center;
	font-weight: bold;
}


td{
    font-family: sans-serif;
    text-align: justify;
}

</style>

<!--Navigasi Bar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
	<div class="container">
   	<a style="font-size: 30px" class="page-scroll oleo-font navbar-brand" href="{{route('index')}}">Better<span>Laundry</a>
    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      	<span class="navbar-toggler-icon"></span>
    	</button>

    	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      	<div class="navbar-nav ml-auto">
        	<a class="text-light nav-item nav-link page-scroll" href="#tentang">About</a>
          <a class="text-light nav-item nav-link page-scroll" href="#Pengumuman">Pengumuman</a>
	        <a class="text-light nav-item nav-link page-scroll" href="#service-section">Service</a>       
        	<a class="text-light nav-item nav-link page-scroll" href="#Outlet">Outlet</a>
          <a class="text-light nav-item nav-link page-scroll" href="{{asset('assets/img/slider/minimal.jpeg')}}">Syarat Pick-Up</a>
          <a class="text-light nav-item nav-link" href="{{route('cekPesanan')}}"><i class="fas fa-fw fa-check"></i>Cek Status Pakaian</a>
      	</div>
        	</div>
  	</div>
	</nav>

<!--slider-->
<div class="carousel-inner">
<div class="carousel-item active">
<img src="assets/img/slider/Better.jpeg" class="d-block w-100" alt="gambar">
<div class="carousel-caption">
	<h3>{{$data->NamaToko}}</h3>
	<p>{{$data->Alamat}}</p>
</div>
</div>

</div>
</div>


<!--Tentang Kami-->
	<section id="tentang" class="tentang">
  	<div class="container">
	<div class="row">
    	<div class="col-lg my-4">
    	<h2>About Better Laundry</h2>
	<p class="dummy_text">{{$data->About}}</p>
  <br>
  <br>
  <section id="Pengumuman" class="service-section">
  <div class="services_section layout_padding">
  <div class="container ">
    <h2>Pengumuman</h2>
    <p class="many_taital justify-content-center">Pengumuman untuk Customer Laundry </p>
    <br>
    <div class=" mt-5">
            
                    
                    <div class="row">
                    @foreach($news as $p)
                    <div class="card justify-content-center ml-5" style="width: 18rem;">
  
                      <div class="card-body  justify-content-center ">
                        <h5 class="card-title text-center"> {{ $p->title}}</h5>
                        <div class="text-center">
                        <a href="pengumuman/{{ $p->id }}" class="btn ms-5 btn-primary">Baca Disini</a>
                        </div>
                        
                      </div>
                    </div>
                    @endforeach
                    </div>
                    <br>
                       
            <div class="d-flex justify-content-center">
            {!! $news->links() !!}
            </div>
        </div>
  
</selection>

  <br>
  <br>
  <br>
  <section id="service-section" class="service-section">
  <div class="services_section layout_padding">
         <div class="container">
            <h2>Our Services</h2>
            <p class="many_taital">Temukan apa yang kami miliki & tawarkan kepada Anda </p>
            <div class="services_section2 layout_padding">
               	<div class="row">
                  	<div class="col-lg-2 col-sm-4">
                    <div class="icon_1"><img src="assets/img/img_properties/waktu.png"></div>
                    <h3 class="furnitures_text"><strong>Ketepatan<span> Waktu</strong></h3>
                    <p class="dummy_text">The Better Laundry melakukan pengerjaan sesuai dengan waktu yang sudah ditentukan. Waktu yang ditentukan dengan perhitungan 1 hari setelah customer menyerahkan pakaian ke Better Laundry.</p>
                    <div class="read_bt_main">
                    </div>
                  	</div>
                  
		<div class="col-lg-2 col-sm-4">
                    <div class="icon_1"><img src="assets/img/img_properties/service.png"></div>
                    <h3 class="furnitures_text"><strong>Pelay<span>anan</strong></h3>
                    <p class="dummy_text">The Better Laundry berusaha memberikan pelayanan terbaik dengan didukung oleh staf yang ramah serta berpengalaman</p>
                    <div class="read_bt_main">
                    </div>
                  	</div>
                  
		<div class="col-lg-2 col-sm-4">
                    <div class="icon_1"><img src="assets/img/img_properties/kebersihan.png"></div>
                    <h3 class="furnitures_text"><strong>Keber<span>sihan</strong></h3>
                    <p class="dummy_text">The Better Laundry menciptakan dan memastikan Kebersihan yang terbaik untuk pakaian customer serta menjaga kebersihan outlet</p>
                    <div class="read_bt_main">
                    </div>
                  	</div>
                  
		<div class="col-lg-2 col-sm-4">
                    <div class="icon_1"><img src="assets/img/img_properties/teknology.png"></div>
                    <h3 class="furnitures_text"><strong>Tekn<span>ologi</strong></h3>
                    <p class="dummy_text">Pemanfaatan teknologi terbaik, Better Laundry memiliki website untuk memudahkan customer dalam melakukan pengecekan status pakaian dan lain-laine</p>
                    <div class="read_bt_main">
                    </div>
                  	</div>
	        
		<div class="col-lg-2 col-sm-4">
                    <div class="icon_1"><img src="assets/img/img_properties/delivery.png"></div>
                    <h3 class="furnitures_text"><strong>Pick-up <span>& Delivery</strong></h3>
                    <p class="dummy_text">The Better Laundry melayani antar dan jemput pakaian dengan ketentuan yang sudah tertera di Website maupun WhatsApp Better Laundry setiap hari <strong>kecuali hari selasa </strong></p>
                    <div class="read_bt_main">
                    </div>
                  	</div>
	        
		<div class="col-lg-2 col-sm-4">
                    <div class="icon_1"><img src="assets/img/img_properties/harga.png"></div>
                    <h3 class="furnitures_text"><strong>Har<span>ga</strong></h3>
                    <p class="dummy_text">The Better Laundry menentukan harga terbaik dan worth-it untuk pelanggan</p>
                    <div class="read_bt_main">
                    </div>
                  	</div>
               	</div>
            </div>
         </div>
      </div>
    	</div>
    	</div>
  	</div>
</selection>




<!--Our Service-->


      <!-- services section end -->
      


<!--Outlet-->


  
<!-- FOOTER-->

<footer class="mt-5">
<div class="footer">
<div class="container">
<div class="row">
<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
<div class="row">
<div class="col-md-8 col-sm-6">

<div class="address">
<h1>Better<span>Laundry</span></h1>
<p>Better Laundry merupakan usaha jasa laundry yang melayani jasa jemput dan antar pakaian customer. Untuk more info silahkan hubungi
WhatsApp yang sudah tersedia</p>
</ul>
</div>
</div>
                           
<div class="col-md-2 col-sm-4">
<div class="address">
<h3 style="color:#ffffff;">Paket</h3>
<ul class="Menu_footer">
<li><a class="nav-item">Kiloan</a></li>
<li><a class="nav-item">Load</a></li>
<li><a class="nav-item">Satuan</a></li>   
</ul>
</div>
</div>
</div>
</div>
                     
<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
<div class="row">
<div class="col-md-5 col-sm-6">
<div class="address">
<h3>Follow Me</h3>
</div>
                              
<ul class="social_icon">
      <li><a href="https://instagram.com/thebetterlaundry?igshid=NDk5N2NlZjQ=" target="_blank"><i class="fab fa-fw fa-instagram"></i>Instagram</a></li>
      <li><a href="https://wa.me/{{$data->Nomer}}?text=Hallo%20Kak..bisa%20pick-up%20cucian%20saya%3F%0A%0A%0ANama%3A%0AAlamat%20%3A%20(tulis%2Fkirim%20link%20dan%20foto%20lokasi%20penjemputan)" target="_blank"><i class="fab fa-fw fa-whatsapp"></i>WhatsApp</a></li>  
      <li><a href="https://ibb.co/hMDY6C1" target="_blank">Ketentuan pick-up</a></li> 
</ul>
</div>
<div class="col-md-7 col-sm-6">
<div class="address">
<h3>Location </h3>
<p>{{$data->Alamat}}</p>
</div>
</div>
</div>
</div>
</div>
<div class="maps">
<div class="container">
<iframe src="{{$data->Link}}"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
</footer>


<div class="copyright">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="row">
<div class="col-lg">
<span>&copy; Copyright 2023 Mutiara Zahra.</span>
</div>
</div>
</div>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/jquery/jquery-3.4.1.min.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/jquery/popper.min.js"></script>

    <!-- Plug In JavaScript -->
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/datatables/datatables/js/jquery.dataTables.min.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/datatables/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/fancybox/jquery.fancybox.min.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/fontawesome/js/all.min.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/jquery/jquery.easing.min.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/jquery/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/select2/select2.min.js"></script>
    


    <!-- Config Plug In JavaScript -->
    <script src="https://betterlaundry.000webhostapp.com/assets/js/config-datatables.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/js/config-fancybox.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/js/config-sweetalert2.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/js/config-select2.js"></script>


    <script>
        // event pada saat link diklik
        $('.page-scroll').on('click', function(e){

            // ambil isi href
            var tujuan = $(this).attr('href');
            // tangkap elemen yg bersangkutan
            var elemenTujuan = $(tujuan);

            // pindahkan scroll
            $('html, body').animate({
                scrollTop: elemenTujuan.offset().top - 65
            }, 1250, 'easeInOutExpo');

            e.preventDefault();
        });
    </script>
 </html>
@endif