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
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/nouislider/nouislider.min.css') }}" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.typekit.net/efm0wqg.css">
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
	<title>{{ __('nav4') }} - Iqrae</title>
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
							<h3 class="breadcrumb-title pe-3">Contacter-nous</h3>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="{{ asset('')}}"><i class="bx bx-home-alt"></i> Acceuil</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Contact</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start page content-->
				<section class="py-4" id="map">
					<div class="container">
						<h3 class="d-none">Google Map</h3>
						<div class="contact-map p-3  rounded-0 shadow-none">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.152361188879!2d-5.571586675751865!3d33.885729678972254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda05ad0f8435ba5%3A0xe5f4a927b6037fb!2sIqraa%20Library!5e0!3m2!1sen!2sma!4v1657669986399!5m2!1sen!2sma" class="w-100" allowfullscreen="" loading="lazy" height="450"></iframe>
						</div>
					</div>
				</section>
				@if($errors == 'error')
				<section class="py-4">
				    <style type="text/css" scoped>
                        #map { display: none!important; } 
                    </style>
            		<div class="container">
            			<div class="row">
            				<div class="col-lg-8" style="background: rgba(255, 0, 0, 0.64);">
                              <p style="text-align: center;font-size: 16px;">Vous avez déja effectué une commande, pour passez une autre essayer d'utiliser un autre numéro de telephone  </p>
                    				</div>
                    			</div>
                    			<!--end row-->
                    		</div>
        				<div>
        			</div>
				</section>
				@endif
				<section class="py-4">
            		<div class="container">
            			<div class="row">
            				<div class="col-lg-12">
            					<div class="p-3 ">
            						<form method="POST" action="contact">
            						    @csrf
            							<div class="form-body">
            								<h6 class="mb-0 text-uppercase">Drop us a line</h6>
            								<div class="my-3 border-bottom"></div>
            								<div class="mb-3">
            									<label class="form-label">Nom complet</label>
            									<input name="nom" type="text" class="form-control">
            								</div>
            								<div class="mb-3">
            									<label class="form-label">Enter Email</label>
            									<input name="email" type="text" class="form-control">
            								</div>
            								<div class="mb-3">
            									<label class="form-label">Phone Number</label>
            									<input name="tel" type="text" class="form-control">
            								</div>
            								<div class="mb-3">
            									<label class="form-label">Message</label>
            									<textarea name="message" class="form-control" rows="4" cols="4"></textarea>
            								</div>
            								<div class="mb-3">
            									<button class="btn btn-light btn-ecomm">Send Message</button>
            								</div>
            							</div>
            						</form>
            					</div>
            				</div>
            			</div>
            			<!--end row-->
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
	<div class="switcher-wrapper">
        
        <div class="switcher-btn" style="background: none; box-shadow:none"> 
            <a href="https://api.whatsapp.com/send?phone=212659808723">
            <span class="_30yMe"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70"><path fill="#00E676" d="M10.7 32.8l.6.3c2.5 1.5 5.3 2.2 8.1 2.2 8.8 0 16-7.2 16-16 0-4.2-1.7-8.3-4.7-11.3s-7-4.7-11.3-4.7c-8.8 0-16 7.2-15.9 16.1 0 3 .9 5.9 2.4 8.4l.4.6-1.6 5.9 6-1.5z"></path><path fill="#FFF" d="M32.4 6.4C29 2.9 24.3 1 19.5 1 9.3 1 1.1 9.3 1.2 19.4c0 3.2.9 6.3 2.4 9.1L1 38l9.7-2.5c2.7 1.5 5.7 2.2 8.7 2.2 10.1 0 18.3-8.3 18.3-18.4 0-4.9-1.9-9.5-5.3-12.9zM19.5 34.6c-2.7 0-5.4-.7-7.7-2.1l-.6-.3-5.8 1.5L6.9 28l-.4-.6c-4.4-7.1-2.3-16.5 4.9-20.9s16.5-2.3 20.9 4.9 2.3 16.5-4.9 20.9c-2.3 1.5-5.1 2.3-7.9 2.3zm8.8-11.1l-1.1-.5s-1.6-.7-2.6-1.2c-.1 0-.2-.1-.3-.1-.3 0-.5.1-.7.2 0 0-.1.1-1.5 1.7-.1.2-.3.3-.5.3h-.1c-.1 0-.3-.1-.4-.2l-.5-.2c-1.1-.5-2.1-1.1-2.9-1.9-.2-.2-.5-.4-.7-.6-.7-.7-1.4-1.5-1.9-2.4l-.1-.2c-.1-.1-.1-.2-.2-.4 0-.2 0-.4.1-.5 0 0 .4-.5.7-.8.2-.2.3-.5.5-.7.2-.3.3-.7.2-1-.1-.5-1.3-3.2-1.6-3.8-.2-.3-.4-.4-.7-.5h-1.1c-.2 0-.4.1-.6.1l-.1.1c-.2.1-.4.3-.6.4-.2.2-.3.4-.5.6-.7.9-1.1 2-1.1 3.1 0 .8.2 1.6.5 2.3l.1.3c.9 1.9 2.1 3.6 3.7 5.1l.4.4c.3.3.6.5.8.8 2.1 1.8 4.5 3.1 7.2 3.8.3.1.7.1 1 .2h1c.5 0 1.1-.2 1.5-.4.3-.2.5-.2.7-.4l.2-.2c.2-.2.4-.3.6-.5s.4-.4.5-.6c.2-.4.3-.9.4-1.4v-.7s-.1-.1-.3-.2z"></path></svg>
                </span>
                </a>
            <a href="http://m.me/iqraesarl">
            <span class="_6a8a">
                <img class="_1-kh _93s6 img"  width="39" height="39" src="https://static.xx.fbcdn.net/rsrc.php/ym/r/YQbyhl59TWY.ico" alt="Messenger">
            </span>
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