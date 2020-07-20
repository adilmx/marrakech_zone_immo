@extends('layouts.app')

@section('carousel-section')
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
		background-position: center;
		background-repeat: no-repeat;

		background-size: cover;
		-moz-background-size: cover;
	}

	.carousel .four {
		background: url(/images/bg/bg7.jpg);
		background-position: center;
		background-repeat: no-repeat;

		background-size: cover;
		-moz-background-size: cover;
	}
.carousel-caption{
	 padding: 60px 15px 60px !important;
}
</style>
    <!-- Carousel
                ================================================== -->
<div id="myCarousel" class="carousel slide hero" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>

	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="item one active d-block w-100">
			<!-- <img class="first-slide
					" src="{{ asset('/') }}images/bg/bg1.jpg"  alt="First slide">
  -->
			<div class="carousel-caption">
				<h1>Voitures Luxieuses</h1>
				<p>Garantir la meilleure qualité des voitures est notre plaisir </p>

			</div>

		</div>
		<div class="item two d-block w-100">
			<!-- <img class="second-slide" src="/images/bg/bg2.jpg" style="height:inherit"> -->

			<div class="carousel-caption">
				<h1>Villas 
				
				<p>	Trouvez votre place avec une expérience photo immersive et le plus grand nombre d'annonces</p>
			 
			</div>
		</div>
		<div class="item three d-block w-100">
			<!-- <img class="third-slide" src="{{ asset('/') }}images/hero-header/04.jpg" alt="Third slide"> -->

			<div class="carousel-caption">
				<h1>Transport Touristique</h1>
				<p>Vous trouverez du confort et de la sécurité  que vous ne trouverez nulle part ailleurs. </p>
		 
			</div>
		</div>
		<div class="item four d-block w-100">
			<!-- <img class="third-slide" src="{{ asset('/') }}images/hero-header/04.jpg" alt="Third slide"> -->

			<div class="carousel-caption">
				<h1>Appartements </h1>
				<h1 style="display:none">HHHH</h1>
				<p>Nous vous aidons à trouvez l'appartement que vous aimerez</p>
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
@endsection
 <style>.kYRSMk {
    background-color:  #F07D37;
    height: 2px;
    width: 140px;
    margin: auto;
    margin-top: 30px;
    margin-bottom:50px;
    
}</style>
<!-- <script>function insertAfter(referenceNode, newNode) {
  referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
} -->
<!-- 
// var el = document.getElementById("myCarousel");
//  var div = document.getElementById("bt");
// insertAfter(div, el);</script> -->
@section('content')
<div class="container">

    <div class="post-hero clearfix">

        <div class="container">
		<h4 class="text-center">Nous avons le plus de listes et de mises à jour constantes. 
Vous ne manquerez donc jamais rien.</h4>
		<div data-showcovidmsg="false" class="sc-10ww3i-0 kYRSMk" id="bt"></div>

            <div class="row">
				<div class="col-xs-12 col-sm-4 mb-20-xs">
					<div class="horizontal-featured-icon-sm clearfix">
						<div class="icon"> <i class="ri ri-user"></i></div>
						<div class="content text-center">
							<h6 style="color:#F07D37">Besoin d'un chauffeur qui vous guide?</h6>
							<span>Great asked oh under together prospect kindness securing six.</span>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 mb-20-xs">
					<div class="horizontal-featured-icon-sm clearfix">
						<div class="icon"><i class="ri ri-location"></i></div>
						<div class="content text-center">
							<h6 style="color:#F07D37">Vous cherchez un appartement luxieux avec un prix convenable?</h6>
							<span>Notre entreprise vous offre une collection riche avec les options que vous désirez.</span>
						</div>
					</div>
				</div>

 

				<div class="col-xs-12 col-sm-4 mb-20-xs">
					<div class="horizontal-featured-icon-sm clearfix">
						<div class="icon"> <i class="ri ri-equal-circle"></i></div>
						<div class="content text-center">
							<h6 style="color:#F07D37">Besoin d'une voiture luxe pour une longue durée?</h6>
							<span>Vous étes dans le meilleur choix. </span>
						</div>
					</div>
				</div>

			</div>

        </div>

    </div>

	<!---->
	<div class="card" style="width: 50%;">
  <img class="card-img-top" src="/images/bg/bg1.jpg" alt="Card image cap" style="height: 30rem;width:80vh" >
  <div class="card-body">
   </div>
</div>

    <div class="breadcrumb-image-bg  mx-bg-v2" style="background-image: url('/images/bg/bg1.jpg')">

        <div class="container mx-container-3">

            <div class="page-title">

                <div class="mx-row row">

                    <div class="col-sm-8  col-md-6 ">
                        <div class="caption-mx-1" data-aos="zoom-out-left" style="    margin-bottom: 150px;
">
                        <h2 class="txt1">VOITURES DE LUXE ET TRANSPORT TOURISTIQUE</h2>
                         </div>

                    <a  href="#">
                        DECOUVRIR MAINTENANT
                    </a>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="breadcrumb-image-bg  mx-bg-v2" style="background-image: url('/images/bg/bg1.jpg')">

        <div class="container mx-container-3">

            <div class="page-title">

                <div class="mx-row row">

                    <div class="col-sm-8  col-md-6 ">
                        <div class="caption-mx-1" data-aos="zoom-out-left"style="    margin-bottom: 150px;
">
                        <h2 class="txt1">IMMOBILIERS DE LUXE ET DE QUALITE</h2>
                       
                        </div>

                    <a  href="#" class="my-4">
                        DECOUVRIR MAINTENANT
                    </a>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>
@endsection
