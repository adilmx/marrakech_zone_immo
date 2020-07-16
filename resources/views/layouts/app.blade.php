<!doctype html>
<html lang="fr">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>Marrakech Zone Immo</title>
	<meta name="description" content="HTML template for multiple tour agency, local agency, traveller, tour hosting based on Twitter Bootstrap 3.x.x" />
	<meta name="keywords" content="tour agency, tour guide, travel, trip, holiday, vocation, relax, adventure, virtual tour, tour planner" />
	<meta name="author" content="crenoveative">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Fav and Touch Icons -->

	<link rel="shortcut icon"  href="{{ asset('/') }}images/ico/logo-zh-tours.png">

	<!-- CSS Plugins -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}bootstrap/css/bootstrap.min.css" media="screen">
	<link href="{{ asset('/') }}css/main.css" rel="stylesheet">
	<link href="{{ asset('/') }}css/plugin.css" rel="stylesheet">

	<!-- CSS Custom -->
	<link href="{{ asset('/') }}css/style.css" rel="stylesheet">

	<!-- Add your style -->
    <link href="{{ asset('/') }}css/your-style.css" rel="stylesheet">

    <!-- AOS libs -->
    <link href="{{ asset('/') }}dist/aos.css" rel="stylesheet">

    <!-- FontAwesome Style File -->
    <link rel="stylesheet" href="{{ asset('/') }}css/all.min.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body class="home transparent-header">

	<div id="introLoader" class="introLoading"></div>

	<!-- start Container Wrapper -->

	<div class="container-wrapper">

		<!-- start Header -->

		<header id="header">

			<!-- start Navbar (Header) -->
			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function navbar-arrow">

				<div class="container">

					<div class="logo-wrapper">
						<div class="logo">
							<a href="#"><img src="{{ asset('/') }}images/ico/logo-zh-tours-mx.png" alt="Logo" /></a>
						</div>
					</div>

					<div id="navbar" class="navbar-nav-wrapper">

						<ul class="nav navbar-nav" id="responsive-menu">

							<li>
								<a href="{{ asset('/') }}" >Accueil</a>
							</li>

							<li>
								<a href="#">Immobilier</a>
								<ul>
									<li><a href="#">Immobilier Vente</a></li>
									<li><a href="#">Immobilier Location</a></li>
								</ul>
							</li>

							<li>
								<a href="{{ route('car.index',['categorie' => 1]) }}">Voitures de luxe</a>

							</li>

							<li>
								<a href="{{ route('car.index',['categorie' => 2]) }}">Transport touristique</a>

							</li>



						</ul>

					</div><!--/.nav-collapse -->

				</div>

				<div id="slicknav-mobile"></div>

			</nav>
			<!-- end Navbar (Header) -->

		</header>

		<!-- end Header -->

		<!-- start Main Wrapper -->

		<div class="main-wrapper scrollspy-container">
            <!-- Carousel
                ================================================== -->
            <div id="myCarousel" class="carousel slide hero" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="first-slide sl-ovelay" src="{{ asset('/') }}storage/uploads-mx/BG-LAMBO.jpg" alt="First slide">

                    <div class="carousel-caption ">
                        <h1>WELCOME</h1>
                        <p>BEST PLACE FOR YOU</p>
                    </div>
                </div>
                <div class="item">
                    <img class="second-slide sl-ovelay" src="{{ asset('/') }}storage/uploads-mx/BG-LAMBO.jpg" alt="Second slide">

                    <div class="carousel-caption">
                        <h1>WELCOME 2</h1>
                        <p>BEST CAR FOR YOU</p>
                    </div>
                </div>
                <div class="item">
                    <img class="third-slide sl-ovelay" src="{{ asset('/') }}storage/uploads-mx/BG-LAMBO.jpg" alt="Third slide">

                    <div class="carousel-caption">
                        <h1>WELCOME 3</h1>
                        <p>BEST HOUSE FOR YOU</p>
                    </div>
                </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- /.carousel -->



                <!-- start our content -->
                    <main class="py-4">
                        @yield('content')
                    </main>
		</div>
        <!-- end our content -->

		<!-- end Main Wrapper -->

		<!-- start Footer Wrapper -->

		<div class="footer-wrapper scrollspy-footer">


			<footer class="bottom-footer">

				<div class="container">

					<div class="row">

						<div class="col-xs-12 col-sm-6 col-md-4">

							<p class="copy-right">&#169; 2020 ZH tours Groupe</p>

						</div>

						<div class="col-xs-12 col-sm-12 col-md-4">
							<ul class="bottom-footer-menu for-social">
								<li><a href="#"><i class="icon-social-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a></li>
								<li><a href="#"><i class="icon-social-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a></li>
								<li><a href="#"><i class="icon-social-google" data-toggle="tooltip" data-placement="top" title="google plus"></i></a></li>
								<li><a href="#"><i class="icon-social-instagram" data-toggle="tooltip" data-placement="top" title="instrgram"></i></a></li>
							</ul>
						</div>

					</div>

				</div>


			</footer>

		</div>

		<!-- end Footer Wrapper -->

	</div>

	<!-- end Container Wrapper -->


<!-- start Back To Top -->

<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>

<!-- end Back To Top -->


<!-- AOS libs -->

<script src="{{ asset('/') }}dist/aos.js"></script>

<script>
    AOS.init();
  </script>


<!-- Core JS -->
<script type="text/javascript" src="{{ asset('/') }}js/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}js/core-plugins.js"></script>
<script type="text/javascript" src="{{ asset('/') }}js/customs.js"></script>

<!-- Only in Home Page -->
<script type="text/javascript" src="{{ asset('/') }}js/jquery.flexdatalist.js"></script>

@yield('script-details-car')



</body>

</html>
