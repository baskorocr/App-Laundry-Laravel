<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/vendor/datatables/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/vendor/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/vendor/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Icon Title -->
    <link rel="icon" href="https://betterlaundry.000webhostapp.com/assets/img/img_properties/logo.jpeg">
    
    <style>
      body {
        font-size: 1.2rem;
        font-weight: 400;
        font-family: 'Montserrat', sans-serif;
        background: #820000;
      }
      

      .oleo-font {
        font-weight: bold;
        font-family: 'Oleo Script', cursive;
      }
      .text-shadow {
        text-shadow: 2px 2px 6px rgba(0,0,0,0.5);
      }
      .s{
        background: #820000;
      }

    </style>

    <title>Selamat Datang di Better Laundry!</title>
  </head>
  <body>
    <link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/css/sidebar.css">
<link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/css/responsive.css">


<style>
.form-group label{
  font-size: 20px;
}
.c{
  margin:auto;
}
.d{
  margin:auto;
  color: #fff;
}
.p{
  color:#fff;
}
.g{
  margin: auto;
  width:500px;
}
.z{
  padding:auto
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
          <a class="text-light nav-item nav-link page-scroll disabled"  href="https://betterlaundry.000webhostapp.com/index.php">About</a>
          <a class="text-light nav-item nav-link page-scroll disabled"  href="https://betterlaundry.000webhostapp.com/index.php">Service</a>  
          <a class="text-light nav-item nav-link page-scroll disabled"  href="https://betterlaundry.000webhostapp.com/index.php">Outlet</a>
          <a class="text-light nav-item nav-link page-scroll" href="{{secure_asset('assets/img/slider/minimal.jpeg')}}">Ketentuan Pick-Up</a>
          <a class="text-light nav-item nav-link" href="{{route('cekPesanan')}}"><i class="fas fa-fw fa-check"></i>Cek Status Pakaian</a>
      	  </div>
        	</div>
  	      </div>
	        </nav>
  

<!-- masukkin kode invoice-->
<section class="pt-10">
  <div class="jumbotron jumbotron-fluid" style="background-color:#820000; width:100%">
    <div class="container text-white text-center">
    
    <div class="form-group mt-3 ">
    <label for="kode_invoice ">Masukkan Kode Invoice Anda</label>
        <input type="text" placeholder="Ketik kode" id="kode_invoice" class="g text-center form-control" name="kode_invoice">
      </div>

   
    <div class="form-group">
    <button type="submit" name="cari_kode" id ="cek" class="btn cek"  style="backgroud:background: #820000;">Cari<i class="fas fa-fw fa-search"></i></button>
    </div>

    </div>
    <div id="notif" class="pl-4"><h4  class="p d-flex justify-content-center" >Data tidak ada atau dibatalkan, silakan menghubungi pihak laundry</h4>
    </div>
    <div class="card shadow mb-4 w-50 mt-5 c " id="cari">
                        
                            <h4 class=" ml-2 mt-3">Data Pencarian Laundry</h4>
                        
                               <div class="z">
                               <div class="card-body s">
                                <div class="row mt-4 ms-3 mb-4  s">
                                <div class="col-4 p">
                                <h5>Invoice</h5>
                                </div>
                                <div class="col-5 p">
                                <h5 id='invoice'></h5>
                                </div>
                                <div class="col-4 mt-4 p">
                                 <h5>Nama</h5>
                                </div>
                                <div class="col-5 mt-4 p">
                                <h5 id='nama'></h5>
                               </div>
                               <div class="col-4 mt-4 p">
                                 <h5>Alamat</h5>
                                </div>
                                <div class="col-5 mt-4 p">
                                <h5 id='alamat'></h5>
                               </div>
                               <div class="col-4 mt-4 p">
                                 <h5>Berat</h5>
                                </div>
                                <div class="col-5 mt-4 p">
                                <h5 id='Berat'></h5>
                               </div>
                                <div class="col-4 mt-4 p">
                                <h5>Status</h5>
                                </div>
                                <div class="col-5 mt-4 p">
                                <h5 id='status'></h5>
                               </div>
                                <div class="col-4 mt-4 p">
                                 <h5>Status Bayar</h5>
                                </div>
                                <div class="col-5 mt-4 p">
                                <h5 id='dibayar'></h5>
                               </div>
                               
                                
                        </div>
                        </div>
                    </div>
    


    
                </div>
                </section>


<!-- FOOTER-->

<footer>
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
<h5>Paket</h5>
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
<h5>Follow Me</h5>
</div>
                              
<ul class="social_icon">
      <li><a href="https://instagram.com/thebetterlaundry?igshid=NDk5N2NlZjQ=" target="_blank"><i class="fab fa-fw fa-instagram"></i>Instagram</a></li>
      <li><a href="https://wa.me/6281249005571?text=Hallo%20Kak..bisa%20pick-up%20cucian%20saya%3F%0A%0A%0ANama%3A%0AAlamat%20%3A%20(tulis%2Fkirim%20link%20dan%20foto%20lokasi%20penjemputan)" target="_blank"><i class="fab fa-fw fa-whatsapp"></i>WhatsApp</a></li>  
</ul>
</div>
<div class="col-md-7 col-sm-6">
<div class="address">
<h5>Location </h5>
<p>Jl. H. Saikin, RT.8/RW.8, Pd. Pinang, Kec. Kby. Lama, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12310</p>
</div>
</div>
</div>
</div>
</div>
<div class="maps">
<div class="container">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.838810910118!2d106.7683015136999!3d-6.284908695451138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1772b9e5e5b%3A0x67156b6b90387da9!2sThe%20Better%20Laundry!5e0!3m2!1sid!2sid!4v1677646918574!5m2!1sid!2sid"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
</footer>


<div class="copyright">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="row">
<div class="col-lg">
<span>&copy; Copyright 2023 All rights Reserved with Better Laundry.</span>
</div>
</div>
</div>
</div>
</div>    <!-- Optional JavaScript -->
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

    <script src=" {{secure_asset('js/cek.js')}}"></script>
    
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