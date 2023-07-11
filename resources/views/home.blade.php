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
	<h3>The Better Laundry I</h3>
	<p>Jl. H. Saikin, RT.8/RW.8, Pd. Pinang, Kec. Kby. Lama, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12310</p>
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
	<p class="dummy_text">The Better Laundry kami yang memiliki pelayanan service terbaik, membantu meringankan aktivitas sehari-hari anda. Dapat melakukan pick-up & delivery pakaian anda dengan ketentuan yang sudah ditetapkan. Kini Better Laundry pun hadir dengan mengikuti perkembangan teknologi melalui pemanfaatan website. Dimana anda dapat melakukan monitoring status pakaian anda dengan mudah disistem tanpa menghubungi pihak Better Laundr</p>

    	</div>
    	</div>
  	</div>



<!--Our Service-->
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
      <!-- services section end -->
      


<!--Outlet-->
<section id= "Outlet" class="Outlet">
	<div class="container">
	<h2>Outlet Better Laundry</h2>
	<div class="table-responsive">
				<table class="table table-hover table-bordered">
				<thead>
				<tr class="th-color">
					<th>No</th>
					<th>Nama Outlet</th>
					<th>Alamat Outlet</th>
				</tr>
				</thead>
				<tbody>
						
												<tr>
				<td>1</td>
				<td>Better Laundry I</td>
				<td>Jl. H. Saikin, RT.8/RW.8, Pd. Pinang, Kec. Kby. Lama, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12310</td>
				</tr>
								<tr>
				<td>2</td>
				<td>Better Laundry II</td>
				<td>Jl. Pupan No.19, RT.9/RW.RW, Pd. Pinang, Kec. Kby. Lama, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12310</td>
				</tr>
								</tbody>
				</table>
</div>
</div>
</div><br>
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
      <li><a href="https://wa.me/6281249005571?text=Hallo%20Kak..bisa%20pick-up%20cucian%20saya%3F%0A%0A%0ANama%3A%0AAlamat%20%3A%20(tulis%2Fkirim%20link%20dan%20foto%20lokasi%20penjemputan)" target="_blank"><i class="fab fa-fw fa-whatsapp"></i>WhatsApp</a></li>  
      <li><a href="https://ibb.co/hMDY6C1" target="_blank">Ketentuan pick-up</a></li> 
</ul>
</div>
<div class="col-md-7 col-sm-6">
<div class="address">
<h3>Location </h3>
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