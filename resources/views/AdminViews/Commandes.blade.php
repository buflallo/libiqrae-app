<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('assets/plugins/OwlCarousel/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/nouislider/nouislider.min.css') }}" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.typekit.net/efm0wqg.css">
    
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    <title>eTrans - eCommerce HTML Template</title>
</head>

<body>  
    <!--wrapper-->
    <div class="wrapper">
        
        @include('AdminViews.header')

        <!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--start breadcrumb-->
				<section class="py-3 border-bottom d-none d-md-flex">
					<div class="container">
						<div class="page-breadcrumb d-flex align-items-center">
							<h3 class="breadcrumb-title pe-3">My Orders</h3>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Accueill</a>
										</li>
										<li class="breadcrumb-item"><a href="javascript:;">Admin</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Mes Commandes</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start shop cart-->

                <section class="py-4">
					<div class="container">
						<h3 class="d-none">Admin</h3>
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-12">
										<div class="card shadow-none mb-0">
											<div class="card-body">
												<div class="table-responsive">
													<table class="table">
														<thead class="table-light">
															<tr>
																<th>Nom complet</th>
																<th>Télephone</th>
                                                            	<th>Adresse</th>
                                                            	<th>Remarque</th>
																<th>
																	<select name="status" id="status">
																		<option value="all" selected>status</option>
																		<option value="livré">livré</option>
																		<option value="en cours">en cours</option>
																		<option value="Annuler">annuler</option>
																	</select>
																</th>
																<th>Actions</th>
																<th>date</th>
															</tr>
														</thead>
														<tbody id="nonfiltred">
														@foreach ($commandes as $commande)
															<tr>
																<td>{{ $commande->nom }}</td>
																<td>{{ $commande->tel }}</td>
																<td>{{ $commande->address }}</td>
																<td>{{ $commande->rem }}</td>
																<td>
																	<div class="badge rounded-pill bg-light w-100">{{ $commande->status }}</div>
																</td>
																<td>
																	<div class="d-flex gap-2"> 
																	    <a href="{{ asset('')}}admin/UpdateCommande/{{ $commande->pere_id }}" class="btn btn-light btn-sm rounded-0">Mis a jour</a>
																		<a href="{{ asset('')}}admin/print/{{ $commande->pere_id }}" class="btn btn-light btn-sm rounded-0">Print</a>
																		<a href="{{ asset('')}}admin/UpdateCommande/{{ $commande->pere_id }}/Livré" class="btn btn-light btn-sm rounded-0">Livré</a>
                                                                        <a href="{{ asset('')}}admin/UpdateCommande/{{ $commande->pere_id }}/En attente" class="btn btn-light btn-sm rounded-0">En attente</a>
																		<a href="{{ asset('')}}admin/UpdateCommande/{{ $commande->pere_id }}/Annuler" class="btn btn-light btn-sm rounded-0">Annuler</a>
																		
																	</div>
																</td>
																<td>{{ $commande->created_at }}</td>
															</tr>
														@endforeach	
														</tbody>
														<tbody id="filtred">
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end row-->
							</div>
						</div>
					</div>
				</section>

				<!--end shop cart-->
			</div>
		</div>
		<!--end page wrapper -->


        @include('AdminViews.footer')



    <!--end wrapper-->
    <!--start switcher-->
    
    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/OwlCarousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('assets/js/app.js') }}"></script>
	<script>
		$('#filtred').hide();
		$('#status').on('change', function() {
			$('#nonfiltred').hide();
			$('#filtred').show();
			var status = $(this).val();
			$.ajax({
				type: 'GET',
				url: '{{ asset('')}}admin/commandes/'+status,
				success: function(data) {
					$('#filtred').html(data);
				}
			});
		});
	</script>
</body>

</html>