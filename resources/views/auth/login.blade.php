<!DOCTYPE html>
<html lang="en" id="page-top">
  <head>
	<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/vendor/bootstrap/css/bootstrap.min.css">
<!-- Datatables CSS -->
<link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/vendor/datatables/datatables/css/dataTables.bootstrap4.min.css">
<!-- Fancybox CSS -->
<link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/vendor/fancybox/jquery.fancybox.min.css">
<!-- Fontawesome CSS -->
<link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/vendor/fontawesome/css/all.min.css">
<!-- Sweetalert2 CSS -->
<link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/vendor/sweetalert2/sweetalert2.min.css">
<!-- Select2 CSS -->
<link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/vendor/select2/select2.min.css">
<!-- Sidebar CSS -->
<link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/vendor/jquery/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/css/sidebar.css">

<!-- My CSS -->
<link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/css/style.css">

<!-- Icon -->
<link rel="icon" href="https://betterlaundry.000webhostapp.com/assets/img/img_properties/Logo.jpeg">
	<title>Masuk - Better Laundry</title>
  </head>
  <body>
	<div>
		<div>
   			<div class="container-fluid"><link rel="stylesheet" href="https://betterlaundry.000webhostapp.com/assets/css/sidebar.css">


<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    min-height: 100vh;
    background-color: #ECF2FF;
    background-image: url(https://betterlaundry.000webhostapp.com//assets/img/img_properties/laundry_better.jpg);
    background-size: cover;
    background-repeat: no-repeat;
  }

  h2{
    font-family: sans-serif; 
    color: #ffffff;
    text-align:left;
    padding-bottom: 10px;
    }


  .container {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
  }
</style>

<div class="login">
<div class="container">
	<div class="row justify-content-center my-2">
		<div class="col-lg-5 mx-5 border border-success rounded text-white p-5" style="background-color:#820000">
		<h1>Better<span>Laundry</span></h1>
                                @error('email')
                                    <span class="invalid-feedback text-light d-flex justify-content-center" role="alert">
                                        <h5>Email/Password Anda Salah!</h5>
                                    </span>
                                 @enderror
		<h2>Masuk</h2>
		<form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
		<label for="email"><i class="fas fa-fw fa-user"></i> Email</label>
		<input  id="email" class="form-control rounded-pill  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                  
    </div>
        
			  
		<div class="form-group">
		<label for="password"><i class="fas fa-fw fa-lock"></i> Kata Sandi</label>
		<input type="password" id="password" class="form-control rounded-pill @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
    </div>
			  
		<div class="form-group text-right">
		<button type="submit" name="login" class="btn btn-success rounded-pill"><i class="fas fa-fw fa-sign-in-alt"></i> Masuk</button>
		</div>
		</form>
			
		</div>
	</div>
</div>
        </div>
        <!-- ./Container-fluid -->
      </div>
        <!-- ./Content -->
    </div>
    <!-- ./wrapper -->

    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    
	<!-- Sweet Alert 2 -->
	<div class="flashdata" data-flashdata=""></div>
	<div class="flashdata-success" data-flashdata=""></div>
	<div class="flashdata-failed" data-flashdata=""></div>
	<!-- ./Sweet Alert 2 -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/jquery/jquery-3.4.1.min.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/jquery/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/jquery/jquery.easing.min.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/jquery/popper.min.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/datatables/datatables/js/jquery.dataTables.min.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/datatables/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/fancybox/jquery.fancybox.min.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/fontawesome/js/all.min.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/vendor/select2/select2.min.js"></script>


    <!-- Config JavaScript -->
	<script src="https://betterlaundry.000webhostapp.com/assets/js/config-datatables.js"></script>
	<script src="https://betterlaundry.000webhostapp.com/assets/js/config-fancybox.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/js/config-sweetalert2.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/js/config-sidebar.js"></script>
    <script src="https://betterlaundry.000webhostapp.com/assets/js/config-select2.js"></script>

  </html>