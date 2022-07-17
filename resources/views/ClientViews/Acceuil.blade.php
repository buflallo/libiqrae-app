<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="csrf-token" value="{{ csrf_token() }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--favicon-->
	<link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />
	<!--plugins-->
	
	<link href="{{ asset('assets/plugins/nouislider/nouislider.min.css') }}" rel="stylesheet" />
	<!-- Lunar CSS -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,600,700,800,900" rel="stylesheet">
	
	<!-- loader-->
	<!--
		<link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
		<script src="{{ asset('assets/js/pace.min.js') }}"></script> 
	-->
	<!-- Bootstrap CSS -->
	
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/plugins/OwlCarousel/css/owl.carousel.min.css') }}" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/css/lunar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
	<title>{{ __('nav1') }} - Iqrae</title>
</head>

<body>
	<!--wrapper-->
	
	<button  type="button"  class="btn btn-dark btn-cta btn-cta-pos" data-toggle="modal" data-target="#demoModal">
		<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
			<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
		</svg>
	</button>
	<div class="wrapper">
		<!-- page entete -->
		@include('ClientViews.header')
		<section class="slider-section">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="d-block slide1"></div>
					</div>
					<div class="carousel-item">
						<div class="d-block slide3"></div>
					</div>
					<div class="carousel-item">
						<div class="d-block slide4"></div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span style="background-color: #a1bd1b;" class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span style="background-color: #a1bd1b;" class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</section>
		<div class="page-wrapper">
			<div class="page-content">
				<!--start News-->
				<section class="py-4">
					<div class="container">
						<div class="d-flex align-items-center" style="background-color: #0f6cb6;">
							<h6 class="text-uppercase mb-0 barred">{{ __('schools slider') }}</h6>
							<a href="{{ asset('')}}liste-ecoles-prives-meknes" style="background : #72c267!important" class="btn btn-light ms-auto rounded-0">{{ __('nav2') }}<i
									class='bx bx-chevron-right'></i></a>
						</div>
						<hr />
						<div class="product-grid">
							<div class="latest-news owl-carousel owl-theme">
								@foreach ($ecoles as $ecole)
								<div class="owl-me item">
									<div class="card product-card border">
										<a href="{{ asset('')}}liste-ecoles-prives-meknes/{{ $ecole->id }}">
											<img src="test.png"
												class="card-img-top border-bottom " alt="{{ $ecole->nom }}">
										</a>
										<div class="card-body">
											<div class="news-title">
												<a href="{{ asset('')}}liste-ecoles-prives-meknes/{{ $ecole->id }}">
													<h5 class="mb-3 text-capitalize">{{ $ecole->nom }}</h5>
												</a>
											</div>
											<div class="product-action mt-2">
																<div class="d-grid gap-2">
																	<a href="{{ asset('')}}liste-ecoles-prives-meknes/{{ $ecole->id }}" class="btn btn-light btn-ecomm">	<i class="bx bxs-cart-add"></i>{{ __('btn school') }}</a>	
																</div>
									    </div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</section>
				<!--end News-->
				<section class="py-4">
					<div class="container">
						<div class="d-flex align-items-center" style="background-color: #0f6cb6;">
                        	<h6 class="text-uppercase mb-0 barred">{{ __('whats cta') }}</h6>
                        </div>
                        <hr>
						<div class="brand-grid">
						    <a href="https://api.whatsapp.com/send?phone=212659808723">
							<img src="assets/images/gallery/whats.png" width="100%"></a>
							</div>
					</div>
                </section>
				<section class="py-4">
					<div class="container">
						<div class="d-flex align-items-center" style="background-color: #0f6cb6;">
							<h6 class="text-uppercase mb-0 barred">{{ __('schools slider') }}</h6>
							<a href="{{ asset('')}}liste-ecoles-prives-meknes" style="background : #72c267!important" class="btn btn-light ms-auto rounded-0">{{ __('nav2') }}<i
									class='bx bx-chevron-right'></i></a>
						</div>
						<hr />
						<div class="product-grid">
							<div class="card product-card border nohover">
								<a href="#">
									<img src="{{ asset('')}}image/cat-slide.jpg"
										class="card-img-top " style="height: 200px; width:100%; margin-top : 0" alt="cat1">
								</a>
							</div>
							<div class="card product-card border nohover" style="display: block">
								<a href="#">
									<img src="test.png"
										class="f-none card-img-top " style="height: 200px; padding-right:5px; width:50%" alt="{{ $ecole->nom }}">
								</a>
								<a href="#">
									<img src="test.png"
										class="f-none card-img-top " style="height: 200px; padding-left:5px; width:49%" alt="{{ $ecole->nom }}">
								</a>
							</div>
							<div class="card product-card border nohover" style="display: block">
								<a href="#">
									<img src="test.png"
										class="f-none card-img-top " style="height: 200px; padding-right:5px; width:50%" alt="{{ $ecole->nom }}">
								</a>
								<a href="#">
									<img src="test.png"
										class="f-none card-img-top " style="height: 200px; padding-left:5px; width:49%" alt="{{ $ecole->nom }}">
								</a>
							</div>
							<div class="card product-card border nohover" style="display: block">
								<a href="#">
									<img src="test.png"
										class="f-none card-img-top " style="height: 200px; padding-right:5px; width:50%" alt="{{ $ecole->nom }}">
								</a>
								<a href="#">
									<img src="test.png"
										class="f-none card-img-top " style="height: 200px; padding-left:5px; width:49%" alt="{{ $ecole->nom }}">
								</a>
							</div>
						</div>
					</div>
				</section>
				<!--start brands-->
				<section class="py-4">
					<div class="container">
						<div class="d-flex align-items-center" style="background-color: #0f6cb6;">
							<h6 class="text-uppercase mb-0 barred">{{ __('top marques') }}</h6>
						</div>
						<hr>
						<div class="brand-grid">
							<div class="brands-shops owl-carousel owl-theme border">
								<div class="item border-end">
									<div id="test" class="p-2">
											<img id="colorer" src="assets/images/brands/loggg-04.png" class="img-fluid" alt="...">
										</div>
								</div>
								<div class="item border-end">
									<div id="test" class="p-2">
											<img id="colorer" src="assets/images/brands/loggg-06.png" class="img-fluid" alt="...">
									</div>
								</div>
								<div class="item border-end">
									<div id="test" class="p-2">
										<img id="colorer" src="assets/images/brands/loggg-08.png" class="img-fluid" alt="...">
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<!--end brands-->
				
				<section class="border-top border-bottom" style="background: ">
					<div class="container">
						<div class="row row-cols-2 row-cols-lg-4 row-group align-items-center">
							<div class="col p-1">
								<div class="d-flex align-items-center">
									<div class="fs-1 text-white"> <i class="bx bx-taxi"></i>
									</div>
									<div class="info-box-content ps-1">
										<h7 class="mb-0">{{ __('livraison icon') }}</h7>
										<p class="mb-0 f-none">{{ __('livraison icon desc') }}</p>
									</div>
								</div>
							</div>
							<div class="col p-1">
								<div class="d-flex align-items-center">
									<div class="fs-1 text-white"> <i class="bx bx-dollar-circle"></i>
									</div>
									<div class="info-box-content ps-1">
										<h7 class="mb-0">{{ __('RETOUR icon') }}</h7>
										<p class="mb-0 f-none">{{ __('RETOUR icon desc') }}</p>
									</div>
								</div>
							</div>
							<div class="col p-1">
								<div class="d-flex align-items-center">
									<div class="fs-1 text-white"> <i class="bx bx-support"></i>
									</div>
									<div class="info-box-content ps-1">
										<h7 class="mb-0"><b>{{ __('Service icon') }}</b></h7>
										<p class="mb-0 f-none">{{ __('Service icon desc') }}</p>
									</div>
								</div>
							</div>
							<div class="col p-1">
								<div class="d-flex align-items-center">
									<div class="fs-1 text-white"> <i class="bx bx-support"></i>
									</div>
									<div class="info-box-content ps-1">
										<h7 class="mb-0"><b>{{ __('Service icon') }}</b></h7>
										<p class="mb-0 f-none">{{ __('Service icon desc') }}</p>
									</div>
								</div>
							</div>
						</div>
						<!--end row-->
					</div>
				</section>
				<!--start bottom products section-->

				<!--end bottom products section-->
			</div>
		</div>

		@include('ClientViews.footer')
		<!--end footer section-->
		
	
	</div>
	<div class="switcher-wrapper">
        
        <div class="switcher-btn" style="background: none; box-shadow:none"> 
            <a href="https://api.whatsapp.com/send?phone=212659808723">
				<lottie-player id="valid" src="{{ asset('')}}whatsapp-40.json"  background="transparent"  speed="1"  style="width: 90px; height: 90px; margin: auto;"  loop autoplay></lottie-player>
            </a>
        </div>
        
    </div>
	<!--end wrapper-->
	
	<!--end switcher-->
	<!--start popup -->
	<div class="modal fade " id="demoModal"  tabindex="-1" role="dialog"
         aria-labelledby="demoModal" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered " role="document">
            <div class="modal-content">
                <button id="form-close" type="button" class="close light" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                <div  id="form-image" class="m-h-40 bg-img rounded-top " style="background-image: url('./assets/images/BACK1.png')">

                </div>
				<lottie-player id="valid" src="https://assets7.lottiefiles.com/packages/lf20_grl9i5vh.json"  background="transparent"  speed="1"  style="display: none; width: 300px; height: 300px; margin: auto;"  loop autoplay></lottie-player>
                <div id="form" class="modal-body">
                    <form class="px-sm-4 py-sm-4">
						<div class="section over-hide z-bigger">
							<div class="section over-hide z-bigger">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-12 pb-3">
											<input class="checkbox-tools" type="radio" value="ar" name="tools" id="ar" {{ \Session::get('language') == 'ar' ? 'checked' : '' }}>
                                            <label for="ar" class="lang" style="background-image: url('./assets/images/AR.png');"></label>
											<input class="checkbox-tools" type="radio" value="en" name="tools" id="uk" {{ \Session::get('language') == 'en' ? 'checked' : '' }}>
                                            <label for="uk" class="lang" style="background-image: url('./assets/images/Anglais.png')"></label>
											<input class="checkbox-tools" type="radio" value="fr" name="tools" id="fr" {{ \Session::get('language') == 'fr' ? 'checked' : '' }}>
											<label for="fr" class="lang" style="background-image: url('./assets/images/Fançais.png')"></label>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                        </div>
						<h3 class="pb-3" style="font-size: 1rem; text-align: center;">{{ __('home popup title') }}</h3>
                        <button type="submit" class="btn btn-cstm-danger btn-cta btn-block" data-dismiss="modal" aria-label="Close">{{ __('home popup b1') }}</button>
						<div onclick="vers_whatsapp();" class="btn btn-cstm-danger btn-cta btn-block">{{ __('home popup b2') }}</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	<!--end popup-->
	<!-- Bootstrap JS -->
	
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script type="text/javascript">
        $(document).ready(function() {
            $('input[name=tools]').change(function() {
                var lang = $(this).val();
                window.location.href = "{{ route('changeLanguage') }}?language="+lang;
            });
        });
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    	<!--plugins-->
	<script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
	<script src="{{ asset('assets/plugins/OwlCarousel/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<!--app JS-->
	<script src="{{ asset('assets/js/app.js') }}"></script>
	<script src="{{ asset('assets/js/index.js') }}"></script>
	<script src="{{ asset('assets/js/demo.js') }}"></script>	
	<script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
	<script>
		function vers_whatsapp()
		{
				document.getElementById('form').style.display='none';
				document.getElementById('form-image').style.display='none';
				document.getElementById('form-close').style.display='none';
				document.getElementById('valid').style.display='flex';
				timeouts = setTimeout(function(){
					window.location.href = "https://api.whatsapp.com/send?phone=212659808723&text=hello%20i%20want%20help%20to%20get%20my%20lists";
				},2000);
		};
    </script>
	<!--app JS-->
    
</body>

</html>