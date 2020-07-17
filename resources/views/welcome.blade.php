@extends('layouts.app')
 
 
 @section('content')
 <style> 
 /* .carousel { z-index: -99; } keeps this behind all content */
 
.carousel .one {
    background: url(/images/bg/bg8.jpg);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
    -moz-background-size: cover;
}
.carousel .two {
    background: url(/images/bg/bg4.jpg);
	background-size: cover;
	background-repeat: no-repeat;

	background-position: center;
	
    -moz-background-size: cover;
}
.carousel .three {
    background: url(/images/bg/bg3.jpg);
	background-position: center ;
	background-repeat: no-repeat;
	
	background-size: cover;
    -moz-background-size: cover;
}
.carousel .four {
    background: url(/images/bg/bg7.jpg);
	background-position: center ;
	background-repeat: no-repeat;
	
	background-size: cover;
    -moz-background-size: cover;
}
.carousel .active.left {
    left:0;
    opacity:0;
    z-index:2;
}</style>
 
<script type="text/javascript">
  $(document).ready(function() {
    $('.carousel').carousel({interval: 2000});
  });
</script>
     <!-- Carousel
                ================================================== -->
				<div id="myCarousel" class="carousel slide hero" data-ride="carousel"
		>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
				
                </ol>
                <div class="carousel-inner" role="listbox">
				<div class="item one active d-block w-100"  >
					<!-- <img class="first-slide 
					" src="{{ asset('/') }}images/bg/bg1.jpg"  alt="First slide">
  -->
                    <div class="carousel-caption">
                        <h1>WELCOME</h1>
						<p>BEST PLACE FOR YOU</p>
						
					</div>
				 
                </div>
                <div class="item two d-block w-100" >
                    <!-- <img class="second-slide" src="/images/bg/bg2.jpg" style="height:inherit"> -->

                    <div class="carousel-caption">
                        <h1>WELCOME 2</h1>
                        <p>BEST CAR FOR YOU</p>
                    </div>
                </div>
                <div class="item three d-block w-100">
                    <!-- <img class="third-slide" src="{{ asset('/') }}images/hero-header/04.jpg" alt="Third slide"> -->

                    <div class="carousel-caption">
                        <h1>WELCOME 3</h1>
                        <p>BEST HOUSE FOR YOU</p>
                    </div>
				</div>
				<div class="item four d-block w-100">
                    <!-- <img class="third-slide" src="{{ asset('/') }}images/hero-header/04.jpg" alt="Third slide"> -->

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
               
<div class="container">

<div class="post-hero clearfix">

	<div class="container">

		<div class="row">

			<div class="col-xs-12 col-sm-4 mb-20-xs">
				<div class="horizontal-featured-icon-sm clearfix">
					<div class="icon"><i class="ri ri-location"></i></div>
					<div class="content">
						<h6>Looking for a tour program?</h6>
						<span>Inhabiting discretion the her dispatched decisively boisterous joy.</span>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-4 mb-20-xs">
				<div class="horizontal-featured-icon-sm clearfix">
					<div class="icon"> <i class="ri ri-user"></i></div>
					<div class="content">
						<h6>Need someone to guide tour?</h6>
						<span>Great asked oh under together prospect kindness securing six.</span>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-4 mb-20-xs">
				<div class="horizontal-featured-icon-sm clearfix">
					<div class="icon"> <i class="ri ri-equal-circle"></i></div>
					<div class="content">
						<h6>Want to earn money as guide?</h6>
						<span>Sometimes studied evident. Conduct replied removal her cordially. </span>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>

<!---->

<div class="breadcrumb-image-bg  mx-bg-v2" style="background-image: url('/storage/uploads-mx/bg-car.jpg')">

	<div class="container mx-container-3">

		<div class="page-title">

			<div class="mx-row row">

				<div class="col-sm-8  col-md-6 ">
					<div class="caption-mx-1" data-aos="zoom-out-left">
					<h2 class="txt1">VOITURES DE LUXE ET TRANSPORT TOURISTIQUE</h2>
					<p class="txt2">Nous vous proposons un large parc de voitures de luxe avec ou sans chauffeur
						Avec des services de transport touristique,
						Nous sommes certains que la qualité de nos services sera à la hauteur de vos attentes.</p>

					</div>

				<a  href="#">
					DECOUVRIR MAINTENANT
				</a>
				</div>
			</div>

		</div>

	</div>

</div>

<div class="breadcrumb-image-bg  mx-bg-v2" style="background-image: url('/storage/uploads-mx/bg-home.jpg')">

	<div class="container mx-container-3">

		<div class="page-title">

			<div class="mx-row row">

				<div class="col-sm-8  col-md-6 ">
					<div class="caption-mx-1" data-aos="zoom-out-left">
					<h2 class="txt1">IMMOBILIERS DE LUXE ET DE QUALITE</h2>
					<p class="txt2">Nous vous proposons des immobiliers de luxe à vendre ou à louer
						Nous sommes certains que la qualité de nos services sera à la hauteur de vos attentes.</p>

					</div>

				<a  href="#">
					DECOUVRIR MAINTENANT
				</a>
				</div>
			</div>

		</div>

	</div>

</div>

</div>
 
 @endsection
