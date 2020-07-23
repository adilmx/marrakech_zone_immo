@extends('layouts.app')

@section('carousel-section')
@php
	$str ="";
@endphp
@if($home_carasoul[0]->id == 2)
	@php
		$str ="/storage/";
	@endphp
@endif
<style>
	/* .carousel { z-index: -99; } keeps this behind all content */

	.carousel .one {
		background: url({{ $str }}{{ $home_carasoul[0]->first_img }});
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		-moz-background-size: cover;
	}

	.carousel .two {
		background: url({{ $str }}{{ $home_carasoul[0]->sec_img }});
		background-size: cover;
		background-repeat: no-repeat;

		background-position: center;

		-moz-background-size: cover;
	}
    
	.carousel .three {
		background: url({{ $str }}{{ $home_carasoul[0]->third_img }});
		background-position: center;
		background-repeat: no-repeat;

		background-size: cover;
		-moz-background-size: cover;
	}

	.carousel .four {
		background: url({{ $str }}{{ $home_carasoul[0]->fourth_img }});
		background-position: center;
		background-repeat: no-repeat;

		background-size: cover;
		-moz-background-size: cover;
	}	
	.fas .fa-star{
		background-color:#C89005;
	}
	.icon:hover{
		color: orangered !important;
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

			<h1><span><i class="fas fa-star " style="font-size:4vw" ></i><i class="fas fa-star "
			 style="font-size:4vw" ></i><i class="fas fa-star " style="font-size:4vw" ></i><i class="fas fa-star " style="font-size:4vw" ></i><i class="fas fa-star " style="font-size:4vw" ></i></span> <br>Voitures </h1>
				<p>Garantir la meilleure qualité des voitures est notre plaisir </p>

			</div>

		</div>
		<div class="item two d-block w-100">
			<!-- <img class="second-slide" src="/images/bg/bg2.jpg" style="height:inherit"> -->

			<div class="carousel-caption">
			<h1><span><i class="fas fa-star " style="font-size:4vw" ></i><i class="fas fa-star " style="font-size:4vw" ></i><i class="fas fa-star " style="font-size:4vw" >
		</i><i class="fas fa-star " style="font-size:4vw" ></i><i class="fas fa-star " style="font-size:4vw" ></i>
	</span> <br>Villas

<p> Trouvez votre place avec une expérience photo immersive </p>


			</div>
		</div>
		<div class="item three d-block w-100">
			<!-- <img class="third-slide" src="{{ asset('/') }}images/hero-header/04.jpg" alt="Third slide"> -->

			<div class="carousel-caption">
			<h1><span><i class="fas fa-star " style="font-size:4vw"
			></i><i class="fas fa-star " style="font-size:4vw"
			></i><i class="fas fa-star " style="font-size:4vw"
			></i><i class="fas fa-star " style="font-size:4vw"
			></i><i class="fas fa-star " style="font-size:4vw"
			></i> </span> <br>Transport Touristique</h1>
				<p>Le confort et la sécurité que vous ne trouverez nulle part ailleurs </p>

			</div>
		</div>
		<div class="item four d-block w-100">
			<!-- <img class="third-slide" src="{{ asset('/') }}images/hero-header/04.jpg" alt="Third slide"> -->

			<div class="carousel-caption">
			<h1><span><i class="fas fa-star " style="font-size:4vw"
			></i><i class="fas fa-star " style="font-size:4vw" ></i><i class="fas fa-star " style="font-size:4vw" ></i><i class="fas fa-star " style="font-size:4vw" ></i><i class="fas fa-star " style="font-size:4vw" ></i> </span> <br>Appartements </h1>

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

@section('content')
<div class="container">

    <div class="post-hero clearfix">

        <div class="container">
		<div data-showcovidmsg="false" class="sc-10ww3i-0 kYRSMk" id="bt"></div>
		<style>
	.kYRSMk {
		background-color: #F07D37;
		height: 2px;
		width: 140px;
		margin: auto;
		margin-top: 30px;
		margin-bottom: 50px;

	}
</style>
            <div class="row">
				<div class="col-xs-12 col-sm-4 mb-20-xs">
					<div class="horizontal-featured-icon-sm clearfix">
						<div class="icon"> <i class="ri ri-user"></i></div>
						<div class="content text-center">
							<h6 style="color:#F07D37">Besoin d'un chauffeur qui vous guide?</h6>
							<span>Nous somme ici pour vous aider.</span>
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
							<span>Vous êtes dans la meilleures voie.,
                             </span>
						</div>
					</div>
				</div>

			</div>

        </div>

    </div>

    <!---->
	<div data-showcovidmsg="false" class="sc-10ww3i-0 kYRSMk" id="bt"></div>
@php
	$str ="";
@endphp
@if($home_sections[0]->id == 2)
	@php
		$str ="/storage/";
	@endphp
@endif
    <div class="breadcrumb-image-bg  meri-bg-v2" style="background-image: url('{{ $str }}{{ $home_sections[0]->first_img }}')">

        <div class="container mx-container-3">

            <div class="page-title">

                <div class="mx-row row">

                    <div class="col-sm-8  col-md-6 ">
                        <div class="caption-mx-1" data-aos="zoom-out-left">
                        <h2 class="txt1">VOITURES DE LUXE ET TRANSPORT TOURISTIQUE</h2>
                        <p class="txt2">Nous vous proposons un large parc de voitures de luxe avec ou sans chauffeur
                            Avec des services de transport touristique </p>

                        </div>

                    <a  href="#">
                        DÉCOUVRIR MAINTENANT
                    </a>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="breadcrumb-image-bg  meri-bg-v2" style="background-image: url('{{ $str }}{{ $home_sections[0]->sec_img }}')">

        <div class="container mx-container-3">

            <div class="page-title">

                <div class="mx-row row">

                    <div class="col-sm-8  col-md-6 ">
                        <div class="caption-mx-1" data-aos="zoom-out-left">
                        <h2 class="txt1 ">IMMOBILIERS DE LUXE ET DE QUALITÉ</h2>
                        <p class="txt2">Nous vous proposons des immobiliers de luxe à vendre ou à louer
                            </p>

                        </div>

                    <a  href="#">
                        DÉCOUVRIR MAINTENANT
                    </a>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- -->
    <div class="container">
	<div data-showcovidmsg="false" class="sc-10ww3i-0 kYRSMk" id="bt"></div>
        <div class="row">

            <div class="col-xs-12 col-sm-8 col-md-9 col-md-9-mx">



                    <h2 class="text-center" ><span><i class="fas fa-star " style="font-size:4vw;color:orangered" ></i><i class="fas fa-star " style="font-size:4vw" ></i><i class="fas fa-star " style="font-size:4vw;color:orangered" >
		</i><i class="fas fa-star " style="font-size:4vw" ></i><i class="fas fa-star " style="font-size:4vw;color:orangered" ></i>
	</span> <br>Les Meilleurs immobiliers pour  votre confort</h2>

            </div>
        </div>
    </div>
	<div data-showcovidmsg="false" class="sc-10ww3i-0 kYRSMk" id="bt"></div>

    <div class="grid-container">
        <div class="big-item">
            <img src="/storage/{{$myQueri[0]->pic_src}}" alt="images" />
            <div class="caption">
                <h1>{{$myQueri[0]->designation}}</h1>
            </div>
            <a  href="{{route('immo.show',['immobilier'=>$myQueri[0]->id])}}">
                DETAILS
            </a>
        </div>

        <div class="item1">
		<img src="/storage/{{$myQueri[1]->pic_src}}" alt="images" />

            <div class="caption">
                <h1>{{$myQueri[1]->designation}}</h1>
            </div>
            <a  href="{{route('immo.show',['immobilier'=>$myQueri[1]->id])}}">
                DETAILS
            </a>
        </div>
        <div class="item2">
		<img src="/storage/{{$myQueri[2]->pic_src}}" alt="images" />

            <div class="caption">
                <h1>{{$myQueri[2]->designation}}</h1>
            </div>
            <a  href="{{route('immo.show',['immobilier'=>$myQueri[2]->id])}}">
                DETAILS
            </a>
        </div>
        <div class="item3">
		<img src="/storage/{{$myQueri[3]->pic_src}}" alt="images" />

            <div class="caption">
                <h1>{{$myQueri[3]->designation}}</h1>
            </div>
            <a  href="{{route('immo.show',['immobilier'=>$myQueri[3]->id])}}">
                DETAILS
            </a>
        </div>
        <div class="item4">
		<img src="/storage/{{$myQueri[4]->pic_src}}" alt="images" />

            <div class="caption">
                <h1>{{$myQueri[4]->designation}}</h1>
            </div>
            <a  href="{{route('immo.show',['immobilier'=>$myQueri[4]->id])}}">
                DETAILS
            </a>
                </div>
    </div>
</div>
@endsection
