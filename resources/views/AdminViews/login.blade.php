<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="http://localhost/firstapp/public/assets/images/favicon-32x32.png" type="image/png">
    <!--plugins-->
    <link href="http://localhost/firstapp/public/assets/plugins/OwlCarousel/css/owl.carousel.min.css" rel="stylesheet">
    <link href="http://localhost/firstapp/public/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet">
    <link href="http://localhost/firstapp/public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="http://localhost/firstapp/public/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">
    <link href="http://localhost/firstapp/public/assets/plugins/nouislider/nouislider.min.css" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="http://localhost/firstapp/public/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="http://localhost/firstapp/public/assets/css/app.css" rel="stylesheet">
    <link href="http://localhost/firstapp/public/assets/css/icons.css" rel="stylesheet">
    <style>
        input{
            padding: 13px 12px 13px 12px;
            width: 100%;
            text-align: center;
            border: 2px solid #dddddd;
            border-radius: 5px;
            letter-spacing: 1px;
            word-spacing: 3px;
            outline: none;
            font-size: 16px;
            color: #555555;
        }
    </style>
    <title>IQRAE - gestion</title>
</head>

<body>  
    <!--wrapper-->
    <div class="wrapper">
        
        <!--start top header wrapper--> 
        <div class="header-wrapper ">
            <div class="primary-menu border-top">
                <div class="container">
                    <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg">
                        
                        <div class="col col-md-auto">
                            <div class="d-flex align-items-center">
                                <div class="logo d-lg-flex">
                                    <a href="{{ asset('')}}">
                                        <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!--end top header wrapper-->
        <!--start page wrapper -->
		<div class="page-wrapper" style="width: 60%; margin: auto;">
			<div class="page-content">
				<!--start breadcrumb-->
				
				
				

                <section class="py-4" style="margin-top: 50px;">
					<div class="container">
						<h3 class="d-none">Account</h3>
						<div class="card" style="background-color: rgba(33, 73, 131, 0.20);">
							<div class="card-body">
								<div class="row">
									
									<div class="col-lg-12">
										<div class="card shadow-none mb-0" style="background-color: rgba(57, 93, 146, 0.38);">
											<div class="card-body" style="height: 60vh;">
                                                <form style="display: inline-table; width: 100%;"  method="POST" action="./admin/login">
                                                    @csrf
												    <img style="display: flex; margin: auto;" src="assets/images/favicon-32x32.png">
                                                    <label style="width: 50%; margin: 20px auto; display: grid;">Username : <input name="email" type="text"></label>
                                                    <label style="width: 50%; margin: 20px auto; display: grid;">Password : <input name="password" type="password"></label>
                                                    <button style="width: 50%; margin: 20px auto; display: grid;">Login</button>
                                                </form>
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


        <!--start footer section-->
        <footer>
            <section class="py-4 ">
                <div class="container">
                    <hr>
                    <div class="row row-cols-1 row-cols-md-2 align-items-center">
                        <div class="col">
                            <p class="mb-0">Copyright © 2021. All right reserved.</p>
                        </div>
                        <div class="col text-end">
                            <div class="payment-icon">
                                <div class="row row-cols-auto g-2 justify-content-end">
                                    <div class="col">
                                        <img src="assets/images/icons/visa.png" alt="">
                                    </div>
                                    <div class="col">
                                        <img src="assets/images/icons/paypal.png" alt="">
                                    </div>
                                    <div class="col">
                                        <img src="assets/images/icons/mastercard.png" alt="">
                                    </div>
                                    <div class="col">
                                        <img src="assets/images/icons/american-express.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </section>
        </footer>
        <!--end footer section-->


    <!--end wrapper-->
    <!--start switcher-->
    
    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="http://localhost/firstapp/public/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="http://localhost/firstapp/public/assets/js/jquery.min.js"></script>
    <script src="http://localhost/firstapp/public/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="http://localhost/firstapp/public/assets/plugins/OwlCarousel/js/owl.carousel.min.js"></script>
    <script src="http://localhost/firstapp/public/assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js"></script>
    <script src="http://localhost/firstapp/public/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="http://localhost/firstapp/public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!--app JS-->
    <script src="http://localhost/firstapp/public/assets/js/app.js"></script>
</body>
</html>