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
													<img src="{{ asset('')}}assets/images/liste/{{ $liste->img }}" class="card-img-top" alt="Liste de {{ $liste->classe }}">
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
											<li class="page-item"><a class="page-link" aria-disabled="true" ><i class='bx bx-chevron-left'></i>{{ __('btn previous') }}</a>
											@else
											<li class="page-item"><a class="page-link" href="{{ $listes->previousPageUrl() }}" ><i class='bx bx-chevron-left'></i> {{ __('Prev') }}</a>
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
										<li class="page-item"><a class="page-link" aria-disabled="true" >{{ __('Next') }} <i class='bx bx-chevron-right'></i></a>
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
            <span class="_30yMe"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70"><path fill="#00E676" d="M10.7 32.8l.6.3c2.5 1.5 5.3 2.2 8.1 2.2 8.8 0 16-7.2 16-16 0-4.2-1.7-8.3-4.7-11.3s-7-4.7-11.3-4.7c-8.8 0-16 7.2-15.9 16.1 0 3 .9 5.9 2.4 8.4l.4.6-1.6 5.9 6-1.5z"></path><path fill="#FFF" d="M32.4 6.4C29 2.9 24.3 1 19.5 1 9.3 1 1.1 9.3 1.2 19.4c0 3.2.9 6.3 2.4 9.1L1 38l9.7-2.5c2.7 1.5 5.7 2.2 8.7 2.2 10.1 0 18.3-8.3 18.3-18.4 0-4.9-1.9-9.5-5.3-12.9zM19.5 34.6c-2.7 0-5.4-.7-7.7-2.1l-.6-.3-5.8 1.5L6.9 28l-.4-.6c-4.4-7.1-2.3-16.5 4.9-20.9s16.5-2.3 20.9 4.9 2.3 16.5-4.9 20.9c-2.3 1.5-5.1 2.3-7.9 2.3zm8.8-11.1l-1.1-.5s-1.6-.7-2.6-1.2c-.1 0-.2-.1-.3-.1-.3 0-.5.1-.7.2 0 0-.1.1-1.5 1.7-.1.2-.3.3-.5.3h-.1c-.1 0-.3-.1-.4-.2l-.5-.2c-1.1-.5-2.1-1.1-2.9-1.9-.2-.2-.5-.4-.7-.6-.7-.7-1.4-1.5-1.9-2.4l-.1-.2c-.1-.1-.1-.2-.2-.4 0-.2 0-.4.1-.5 0 0 .4-.5.7-.8.2-.2.3-.5.5-.7.2-.3.3-.7.2-1-.1-.5-1.3-3.2-1.6-3.8-.2-.3-.4-.4-.7-.5h-1.1c-.2 0-.4.1-.6.1l-.1.1c-.2.1-.4.3-.6.4-.2.2-.3.4-.5.6-.7.9-1.1 2-1.1 3.1 0 .8.2 1.6.5 2.3l.1.3c.9 1.9 2.1 3.6 3.7 5.1l.4.4c.3.3.6.5.8.8 2.1 1.8 4.5 3.1 7.2 3.8.3.1.7.1 1 .2h1c.5 0 1.1-.2 1.5-.4.3-.2.5-.2.7-.4l.2-.2c.2-.2.4-.3.6-.5s.4-.4.5-.6c.2-.4.3-.9.4-1.4v-.7s-.1-.1-.3-.2z"></path></svg>
                </span>
                </a>
            <a href="http://m.me/iqraesarl">
            <span class="_6a8a">
                <img class="_1-kh _93s6 img"  width="39" height="39" src="https://scontent.frba2-2.fna.fbcdn.net/v/t39.8562-6/120009688_325579128711709_1736249742330805861_n.png?_nc_cat=1&amp;ccb=1-3&amp;_nc_sid=6825c5&amp;_nc_ohc=9CJBLRzHevcAX9Y_Pgs&amp;_nc_ht=scontent.frba2-2.fna&amp;oh=c7e8cc3119e65ae9e35690ff468a260e&amp;oe=6105CA3D" alt="Messenger">
            </span>
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
    <script>
    $(document).ready(function(){
        $("#ooka").modal('show');
    });
    </script>
</body>
