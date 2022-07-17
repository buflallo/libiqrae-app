<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="csrf-token" value="{{ csrf_token() }}" />	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.typekit.net/efm0wqg.css">
	<!--favicon-->
	<link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('assets/plugins/OwlCarousel/css/owl.carousel.min.css') }}" rel="stylesheet" />
    
    
    
    <link href="{{ asset('assets/plugins/nouislider/nouislider.min.css') }}" rel="stylesheet" />

    <!-- loader-->
	<!--
		<link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
		<script src="{{ asset('assets/js/pace.min.js') }}"></script> 
	-->
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
	<title>{{ __('ty title') }} - Iqrae</title>
<!-- End Facebook Pixel Code -->
</head>

<body> 	
	<!--wrapper-->
	<div class="wrapper">
		<!-- page entete -->
		
        @include('ClientViews.header')

        <!-- page entete -->
        <div class="page-wrapper">
			<div class="page-content">
				<!--start breadcrumb-->
				
<section class="py-4">
					<div class="container">
						<div class="card py-3 mt-sm-3">
							<div class="card-body text-center">
								<h2 class="h4 pb-3">{{ __('ty title') }}</h2>
								<p class="fs-sm mb-2">
<strong style="color: white;"><?php echo explode(":", __('ty p1'))[0] ?>:</strong>
<?php echo explode(":", __('ty p1'))[1] ?></p>
								<p class="fs-sm">
<br>
{{ __('ty p2') }} </p>
{{ __('ty p3') }}
	
								<p></p>
								<a class="btn btn-light rounded-0 mt-3 me-3" href="{{ asset('')}}liste-ecoles-prives-meknes">{{ __('ty b1') }} </a><a class="btn btn-white rounded-0 mt-3" href="{{ asset('')}}liste-ecoles-prives-meknes"><i class="bx bx-map"></i>{{ __('ty b2') }}</a>
							</div>
						</div>
					</div>
				</section>			<!--end start page content-->
			</div>
		</div>

		<!--end page wrapper -->
		<!--start footer section-->
		@include('ClientViews.footer')
		<!--end footer section-->
	
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
        
<div class="switcher-btn" style="background: none; box-shadow:none"> 
            <a href="https://api.whatsapp.com/send?phone=212659808723">
				<lottie-player id="valid" src="{{ asset('')}}whatsapp-40.json"  background="transparent"  speed="1"  style="width: 90px; height: 90px; margin: auto;"  loop autoplay></lottie-player>
            </a>
        </div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	
	
	<script src="assets/js/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    	<!--plugins-->
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src=".//assets/plugins/OwlCarousel/js/owl.carousel.min.js"></script>
	<script src="assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
	
</body>

</html>