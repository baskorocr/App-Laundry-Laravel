
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
        	<a class="text-light nav-item nav-link page-scroll disabled" href="#tentang">About</a>
          <a class="text-light nav-item nav-link page-scroll disabled" href="#tentang">Pengumuman</a>
	        <a class="text-light nav-item nav-link page-scroll disabled" href="#service-section">Service</a>       
        	<a class="text-light nav-item nav-link page-scroll disabled" href="#Outlet">Outlet</a>
          <a class="text-light nav-item nav-link page-scroll disabled" href="{{asset('assets/img/slider/minimal.jpeg')}}">Syarat Pick-Up</a>
          <a class="text-light nav-item nav-link" href="{{route('cekPesanan')}}"><i class="fas fa-fw fa-check"></i>Cek Status Pakaian</a>
      	</div>
        	</div>
  	</div>
	</nav>



</div>
</div>


	<section id="pengumuman" class="pengumuman mt-5">
  	<div class="container">
	<div class="row">
    	<div class="col-lg my-4">
    	<h2>Pengumuman</h2>
      <div class="text-center">
      <h7 class="">{{$data->title}}</h7>
      </div>
      <div class="text-center">
      <p class="dummy_text">{!! $data->information !!}</p>
      </div>
    
	
  <br>
  <br>
  
  
</selection>

    
  </body>
 </html>
