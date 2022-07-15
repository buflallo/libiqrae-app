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
    <title>Iqrae - Liste des ecoles</title>
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
										<li class="breadcrumb-item active" aria-current="page">Mes Ecoles</li>
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
						<h3 class="d-none">Account</h3>
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-4">
										<div class="card shadow-none mb-3 mb-lg-0">
											<div class="card-body">
												<div class="list-group list-group-flush">	
													<a href="{{ asset('')}}admin/commandes" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Commandes<i class='bx bx-cart-alt fs-5'></i></a>
													<a href="{{ asset('')}}admin/ecoles" class="list-group-item active d-flex justify-content-between align-items-center">Ajouter ecole <i class='bx bx-download fs-5'></i></a>
													<a href="{{ asset('')}}admin/ajouterListe" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Ajouter liste <i class='bx bx-home-smile fs-5'></i></a>
													<a href="{{ asset('')}}admin/logout" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Logout <i class='bx bx-log-out fs-5'></i></a>
												</div>
											</div>
									    </div>
									</div>
                                    @if ($errors->any())

                                    <div class="alert alert-danger">

                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>

                                        <ul>

                                            @foreach ($errors->all() as $error)

                                                <li>{{ $error }}</li>

                                            @endforeach

                                        </ul>

                                    </div>

                                    @endif
                                    <div class="col-lg-8">
                                        <div class="card shadow-none mb-0">
                                            <div class="card-body">
                                            <h3 class="form-label">Ajouter ecole</h3>
                                                <form action="ajouterEcole" method="POST" enctype="multipart/form-data" class="row g-3">
                                                @csrf
													<div class="col-md-6">
														<label class="form-label">Nom d'école</label>
														<input name="nom" type="text" class="form-control" value="Madison">
													</div>
													<div class="col-md-6">
														<label class="form-label">Logo d'école</label>
                                                        <input type="file" name="logo_img" class="form-control" placeholder="image">
													</div>
													<div class="col-12">
														<button type="submit" class="btn btn-light btn-ecomm">Save Changes</button>
													</div>
												</form>
                                            </div>
                                        </div>
                                        <div class="card shadow-none mb-0">
											<div class="card-body">
                                            <h3 class="form-label">Liste ecoles</h3>
												<div class="table-responsive">
													<table class="table">
														<thead class="table-light">
															<tr>
																<th>Nom</th>
																<th>Logo</th>
																<th></th>
															</tr>
														</thead>
														<tbody>
                                                        @foreach ($ecoles as $ecole)
                                                            <tr>
																<td>{{ $ecole->nom }}</td>
																<td><img style="width: 212px;height: auto;" src="../assets/images/ecole/{{ $ecole->logo_img }}"></td>
																<td>
																		<a href="deleteEcole/{{ $ecole->id }}" class="btn btn-light btn-sm">Supprimer</a>
																	</div>
																</td>
															</tr>
                                                        @endforeach 
															
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
</body>

</html>