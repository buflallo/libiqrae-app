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
	<title>{{ __('Level title') }} - Iqrae</title>
</head>

<body> 	
	<!--wrapper-->
	<div class="wrapper">
		<!-- page entete -->
        @include('ClientViews.header')
        
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--start breadcrumb-->
				<section class="py-3 border-bottom d-md-flex">
					<div class="container">
						<div class="page-breadcrumb d-flex align-items-center">
							<h3 class="f-none breadcrumb-title pe-3">{{ __('Level title') }}</h3>
							<div class="toolbox d-lg-flex">
								<div class="col-6 col-md order-4 order-md-2">
									<div class="input-group flex-nowrap px-xl-4">
										<form style="margin: auto;" id="formulaire" action="{{ asset('')}}liste-ecoles-prives-meknes/{{ $ecole[0]->id }}" method="POST">
											@csrf
											<div class="finder">
												<div class="finder__outer">
													<div class="finder__inner">
													<div class="finder__icon" ref="icon"></div>
													<input class="finder__input" type="text" name="search" placeholder="{{ __('level search') }}" style="width: 86%;" onKeyPress="if(event.keyCode == 13) validerForm();"/>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="f-none">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0" style="background-color: transparent;">
										<li class="breadcrumb-item"><a href="{{ asset('')}}"><i class="bx bx-home-alt"></i> {{ __('nav1') }}</a>
										</li>
										<li class="breadcrumb-item">{{ __('nav2') }}</li>
										<li class="breadcrumb-item">{{ $ecole[0]->nom }}</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start shop area-->
				<section class="py-4">
					<div class="container">
						<div class="row">
							<div class="col-12 col-xl-12">
								<div class="product-wrapper">

									<div class="product-grid">
										<div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">
											@foreach ($listes as $liste)
											<div class="col">
												<div class="card product-card">
													<img src="{{ asset('')}}assets/images/liste/{{ $liste->img }}" class="card-img-top" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" alt="Liste de {{ $liste->classe }}">
													<div class="card-body">
														<div class="product-info">
															<a href="{{ asset('')}}commander/{{ $liste->id }}/{{ $ecole[0]->id }}">
																<h5 class="product-name mb-2">{{ __('level indicator') }} : {{ $liste->classe }}</h5>
															</a>
															<div class="d-flex align-items-center">
															</div>
															<div class="product-action mt-2">
																<div class="d-grid gap-2">
																	<a href="{{ asset('')}}commander/{{ $liste->id }}/{{ $ecole[0]->id }}" class="btn btn-light btn-ecomm">	<i class="bx bxs-cart-add"></i>{{ __('btn list') }}</a>	
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											@endforeach
											
										</div>
										<!--end row-->
									</div>
									
									<hr>
									@if ($listes->hasPages())
									<nav class="d-flex justify-content-between" aria-label="Page navigation">
										<ul class="pagination butona">
											{{-- Previous Page Link --}}
											@if ($listes->onFirstPage())
											<li class="page-item"><a class="page-link" aria-disabled="true" ><i class='bx bx-chevron-left'></i>{{ __('btn previous') }} </a>
											@else
											<li class="page-item"><a class="page-link" href="{{ $listes->previousPageUrl() }}" ><i class='bx bx-chevron-left'></i>{{ __('btn previous') }} </a>
											</li>
											@endif
										</ul>
										
										<ul class="pagination milieu">
											<li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">{{ __('page indicator') }} {{ $listes->currentPage() }} {{ __('page indicator2') }} {{ $listes->lastPage() }}<span class="visually-hidden"></span></span>
											</li>
										</ul>
										<ul class="pagination butona">
										{{-- Next Page Link --}}
										@if ($listes->hasMorePages())
											<li class="page-item"><a class="page-link" href="{{ $listes->nextPageUrl() }}" aria-label="Next">{{ __('btn next') }} <i class='bx bx-chevron-right'></i></a>
											</li>
										@else
										<li class="page-item"><a class="page-link" aria-disabled="true" >{{ __('btn next') }} <i class='bx bx-chevron-right'></i></a>
											</li>
										@endif
									</ul>
									</nav>
									@endif
								</div>
							</div>
						</div>
						<!--end row-->
					</div>
				</section>
				<!--end shop area-->
			</div>
		</div>

		<!--end page wrapper -->

		@include('ClientViews.footer')
		<!--end footer section-->
	
	</div>
	<!--end wrapper-->
	<div class="switcher-wrapper">
        
<div class="switcher-btn" style="background: none; box-shadow:none"> 
            <a href="https://api.whatsapp.com/send?phone=212659808723">
				<lottie-player id="valid" src="{{ asset('')}}whatsapp-40.json"  background="transparent"  speed="1"  style="width: 90px; height: 90px; margin: auto;"  loop autoplay></lottie-player>
            </a>
        </div>
        
    </div>
	<!--end switcher-->
	<script>
	function validerForm(){
		document.getElementById("formulaire").submit();
	}
	</script>
	<!-- Bootstrap JS -->

	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
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
	<script src="{{ asset('/js/index.js') }}"></script>
<script src="{{ asset('assets/js/demo.js') }}"></script>	
	<!--app JS-->
    <script>
    $(document).ready(function(){
        $("#ooka").modal('show');
    });
    </script>
</body>
