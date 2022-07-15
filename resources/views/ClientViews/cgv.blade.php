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
	<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/nouislider/nouislider.min.css') }}" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.typekit.net/efm0wqg.css">
	<link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />


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

	<title>{{ __('Cgv') }} - Iqrae</title>
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
				<section class="py-3 border-bottom d-none d-md-flex">
					<div class="container">
						<div class="page-breadcrumb d-flex align-items-center">
							<h3 class="breadcrumb-title pe-3">A propos de Iqrae</h3>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="{{ asset('')}}"><i
													class="bx bx-home-alt"></i> Acceuil</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">About Us</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start page content-->
				<section class="py-0 py-lg-4">
					<div class="container">
						<h4>Notre </h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
					</div>
				</section>
				<section class="py-4">
					<div class="container">
						<h4>Pourquoi nous choisir ?</h4>
						<hr>
						<div class="row row-cols-1 row-cols-lg-3">
							<div class="col d-flex">
								<div class="card rounded-0 shadow-none w-100">
									<div class="card-body">
										<img src="assets/images/icons/delivery.png" width="60" alt="">
										<h5 class="my-3">Livraison gratuit</h5>
										<p class="mb-0">Livraison gratuit partout au Maroc.</p>
									</div>
								</div>
							</div>
							<div class="col d-flex">
								<div class="card rounded-0 shadow-none w-100">
									<div class="card-body">
										<img src="assets/images/icons/money-bag.png" width="60" alt="">
										<h5 class="my-3">Retours simples et rapides</h5>
										<p class="mb-0">Les retours sont gratuits sous 9 jours.</p>
									</div>
								</div>
							</div>
							<div class="col d-flex">
								<div class="card rounded-0 shadow-none w-100">
									<div class="card-body">
										<img src="assets/images/icons/support.png" width="60" alt="">
										<h5 class="my-3">Support 24/7</h5>
										<p class="mb-0">Contactez-nous au 0522-215487.</p>
									</div>
								</div>
							</div>
						</div>
						<!--end row-->
					</div>
				</section>
				<section class="py-4">
					<div class="container">
						<h4>Top marque</h4>
						<hr>
						<div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-xl-5">
							<div class="col">
								<div class="card">
									<div class="card-body">
										<a href="javscript:;">
											<img src="assets/images/brands/01.png" class="img-fluid" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<div class="card-body">
										<a href="javscript:;">
											<img src="assets/images/brands/02.png" class="img-fluid" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<div class="card-body">
										<a href="javscript:;">
											<img src="assets/images/brands/03.png" class="img-fluid" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<div class="card-body">
										<a href="javscript:;">
											<img src="assets/images/brands/04.png" class="img-fluid" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<div class="card-body">
										<a href="javscript:;">
											<img src="assets/images/brands/05.png" class="img-fluid" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<div class="card-body">
										<a href="javscript:;">
											<img src="assets/images/brands/06.png" class="img-fluid" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<div class="card-body">
										<a href="javscript:;">
											<img src="assets/images/brands/07.png" class="img-fluid" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<div class="card-body">
										<a href="javscript:;">
											<img src="assets/images/brands/08.png" class="img-fluid" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<div class="card-body">
										<a href="javscript:;">
											<img src="assets/images/brands/09.png" class="img-fluid" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<div class="card-body">
										<a href="javscript:;">
											<img src="assets/images/brands/10.png" class="img-fluid" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<div class="card-body">
										<a href="javscript:;">
											<img src="assets/images/brands/11.png" class="img-fluid" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<div class="card-body">
										<a href="javscript:;">
											<img src="assets/images/brands/12.png" class="img-fluid" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<div class="card-body">
										<a href="javscript:;">
											<img src="assets/images/brands/13.png" class="img-fluid" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<div class="card-body">
										<a href="javscript:;">
											<img src="assets/images/brands/14.png" class="img-fluid" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<div class="card-body">
										<a href="javscript:;">
											<img src="assets/images/brands/15.png" class="img-fluid" alt="">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--end start page content-->
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
        
    </div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    	<!--plugins-->
<script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><script src="{{ asset('assets/plugins/OwlCarousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js') }}"></script>
<script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<!--app JS-->
<script src="{{ asset('assets/js/app.js') }}"></script>
	<script src="{{ asset('/js/index.js') }}"></script>
<script src="{{ asset('assets/js/demo.js') }}"></script>	
	<script>
    $(document).on('click','.cookeies-block button', function(e) {
    e.preventDefault();
    $.ajax({
        
        method: 'POST',
        url: 'cookie',
        data : {
            "_token": "{{ csrf_token() }}",
            'name' : 'accept-cookie',
            'value' : true
        },
        success: function (response) {
            $('#footer').find('.cookeies-block').hide();
        },
        error: function (error) {
            alert('Error: Please refresh the page');
        },
    });
    });
    </script>
	<!--app JS-->
    
</body>

</html>