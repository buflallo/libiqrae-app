<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
										<li class="breadcrumb-item active" aria-current="page">Mis a jour commande</li>
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
													<a href="{{ asset('')}}admin/commandes" class="list-group-item active d-flex justify-content-between align-items-center">Commandes<i class='bx bx-cart-alt fs-5'></i></a>
													<a href="{{ asset('')}}admin/ecoles" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Ajouter ecole <i class='bx bx-download fs-5'></i></a>
													<a href="{{ asset('')}}admin/ajouterListe" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Ajouter liste <i class='bx bx-home-smile fs-5'></i></a>
													<a href="{{ asset('')}}admin/logout" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Logout <i class='bx bx-log-out fs-5'></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-8">
										<div class="card shadow-none mb-0">
											<div class="card-body">
												<div class="table-responsive" id="form1" style="display: none;">
													<table class="table">
														<thead class="table-light">
															<tr>
																<th>Nom complet</th>
																<th>Actions</th>
															</tr>
														</thead>
														<tbody>
                                                        <input name="pere_id" type="hidden" value="{{$pere_id}}">
														@foreach ($listes as $liste)
															<tr>
                                                                @csrf
																<td style="width: 50%;"><img src="../../assets/images/liste/{{ $liste->img }}" class="card-img-top"></td>
																<td style="width: 50%;">
                                                                    <input name="sexe" class="form-control" placeholder="gender">
                                                                    <input name="color" class="form-control" placeholder="couleur préférer">
                                                                    <input name="list_id" type="hidden" value="{{$liste->id}}">
                                                                    <input name="rem" class="form-control" placeholder="remarque"></input>
                                                                </td>
                                                                
															</tr>
														@endforeach	
														</tbody>
													</table>
												</div> 
                                                <div class="table-responsive" id="form2">

                                                    <input name="adresse" class="form-control" placeholder="Adresse">
                                                    <input name="info" class="form-control" placeholder="Additional information">
                                                    <label class="form-check-label" for="flexRadioDefault1"> Shipping</label>
                                                    <div class="form-check" style="display: inline-block; margin: 15px;">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check" style="display: inline-block; margin: 15px;">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                          No
                                                        </label>
                                                    </div>
												</div>
												
                                                <div id="sauvguard" class="col-12" style="display: none; margin-top: 20px;">
                                                    <button type="submit" class="btn btn-light btn-ecomm save-data" >Sauvgarder</button>
                                                </div>
                                                <div class="col-12" style="display: grid; margin-top: 20px;">
                                                    <button id="next" type="submit" class="btn btn-light btn-ecomm" onclick="document.getElementById('form1').style.display='';document.getElementById('form2').style.display='none'; document.getElementById('next').style.display='none';document.getElementById('sauvguard').style.display='' ">Next</button>
                                                </div>
                                                <div class="col-12" style="display: grid; margin-top: 20px;">
                                                    <button class="btn btn-light btn-ecomm" onclick="document.getElementById('form2').style.display='';document.getElementById('form1').style.display='none';document.getElementById('next').style.display=''">Back</button>
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

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
        $(".save-data").click(function(event){
            event.preventDefault();
            let pere_id = $("input[name=pere_id]")[0].value
            let count = $("input").length;
            for (let index = 2; index <= count; index++) {
                index-=1;
                if ($("input")[index].name === 'adresse') {
                    let adresse = $("input")[index].value;
                    let info = $("input")[index+=1].value;
                    if ($("input")[index+=1].checked)
                        var ship = 'ship';
                    else
                        var ship = 'dont ship';
                    $.ajax({
                    url: "updatePere",
                    type:"POST",
                    data:{
                        pere_id:pere_id,
                        adresse:adresse,
                        info:info,
                        ship:ship
                    }});
                    break;
                }
                index+=1;
                let sexe = $("input")[index].value;
                let color = $("input")[index+=1].value;
                let list_id = $("input")[index+=1].value;
                let rem = $("input")[index+=1].value;
                index+=1;
                    $.ajax({
                        url: "updatefils",
                        type:"POST",
                        data:{
                            pere_id:pere_id,
                            sexe:sexe,
                            color:color,
                            list_id:list_id,
                            rem:rem
                        }});
            }
        });
      </script>
</body>

</html>