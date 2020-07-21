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
	<div class="carousel-inner" role="listbox" style="height:40vh">
		<div class="item one active d-block w-100">
			<!-- <img class="first-slide
					" src="{{ asset('/') }}images/bg/bg1.jpg"  alt="First slide">
  -->
			<div class="carousel-caption">

				<p class="meri-titles">BEST PLACE FOR YOU</p>

			</div>

		</div>
		<div class="item two d-block w-100">
			<!-- <img class="second-slide" src="/images/bg/bg2.jpg" style="height:inherit"> -->

			<div class="carousel-caption">

				<p class="meri-titles">BEST CAR FOR YOU</p>
			</div>
		</div>
		<div class="item three d-block w-100">
			<!-- <img class="third-slide" src="{{ asset('/') }}images/hero-header/04.jpg" alt="Third slide"> -->

			<div class="carousel-caption">

				<p class="meri-titles">BEST HOUSE FOR YOU</p>
			</div>
		</div>
		<div class="item four d-block w-100">
			<!-- <img class="third-slide" src="{{ asset('/') }}images/hero-header/04.jpg" alt="Third slide"> -->

			<div class="carousel-caption">

				<p class="meri-titles">BEST HOUSE FOR YOU</p>
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
<div class="container mx-container-1">

	<div class="hero-mx-srch">
		<div class="container">

			<form>
				<div class="form-group">
					<input type="text" placeholder="Immobilier..." class="form-control" title="Acces rapide!trouvez ici votre preferable voiture facilement">
					<button class="btn"><i class="icon-magnifier"></i></button>
				</div>
				<button class="btn btn-all-mx display-wd">Afficher tous</button>
			</form>

		</div>
	</div>
	<div id="link-top" class="pt-30 mx-pt-30 pb-50">

		<div class="container mx-container-2 ">

			<div class="trip-guide-wrapper">

				<div class="GridLex-gap-20 GridLex-gap-15-mdd GridLex-gap-10-xs">

					<div class="GridLex-grid-noGutter-equalHeight GridLex-grid-center">
						@php
						$c_data= 1;
						$key_c = 0;
						@endphp
						@foreach ($immos as $key=>$immo)
						@php
						++$key_c;
						@endphp
						<!-- real number  mx-n -->
						@if($key < 6) @php $style="" ; @endphp @else @php $style="display-wd" ; @endphp @endif <!-- real number +1 mx-n -->
							@if($key_c == 7)
							@php
							++$c_data;
							$key_c = 0;
							@endphp
							@endif

							<!-- start car widget -->
							<div class="GridLex-col-3_mdd-4_sm-6_xs-6_xss-12_mx-widget {{ $style }}" data-widget="{{ $c_data }}" data-aos="fade-up" data-aos-duration="2000">

								<div class="mx-trip-guide-item trip-guide-item" style="background-color:white">
									<a href="#">
										<div class="trip-guide-image mx-trip-guide-image meri-widget" title="cliquez ici pour plus de details">
											<img src="/storage/{{ $immo->pic_src }}" alt="images" />
										</div>
									</a>

									<div class="trip-guide-content mx-trip-guide-content" style="margin-bottom: 20px;">
										<h3 class="hi">{{ $immo->designation }}</h3><br>
									</div>

									<div class="trip-guide-bottom" style="padding:10px">

										<div class="trip-guide-person mx-trip-guide-person clearfix" style="border: 0px;">
											<i class="fas fa-home"></i>
											<p class="name">Nombre d'étage : <span>{{ $immo->nbr_etage }}</span></p>
											 
										</div><div class="trip-guide-person mx-trip-guide-person clearfix" style="border: 0px;">
										<i class="fas fa-home"></i>
											<p class="name">Nombre de chambre : <span>{{ $immo->nbr_chambre }}</span></p>
  
										</div>
										 

										<div class="row gap-10 mx-price">
											<div class="col-xs-12 col-sm-6">
												<div class="trip-guide-price">
													Á partir de
													<span class="number">{{ $immo->price_min }}$</span>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 text-right">
												<a href="{{route('reservationVente.create',['immobilier'=>$immo->id])}}" class="btn btn-primary">Reserver</a>

											</div>
										</div>

									</div>

								</div>

							</div>
							<!-- end car widget -->
							@endforeach

					</div>

				</div>

			</div>

			<div class="pager-wrappper clearfix">

				<div class="pager-innner">

					@foreach ($immos as $key=>$immo)
					@php
					++$key;
					@endphp
					@endforeach
					<div class="clearfix">
						plus de {{ $key }} type d'immobiliers à choisir
					</div>

					<div class="clearfix">
						<nav class="pager-center">
							<ul class="pagination">
								<li>
									<a href="#link-top" aria-label="prev-pg">
										<span aria-hidden="true">&laquo;</span>
									</a>
								</li>
								@php
								$counter_nbr = 1;
								$counter = 0 ;
								@endphp

								@foreach ($immos as $immo)
								@php
								++$counter;
								/* real number +1 mx-n */
								$cm = $counter%7 ;
								@endphp
								@if($cm == 1 or $counter == 1)
								@if($counter == 1)
								<li data-id="page-li" id-pg="{{ $counter_nbr }}" class="active"><a href="#link-top" data-id="page-a" id-pg="{{ $counter_nbr }}">{{ $counter_nbr }}</a></li>
								@else
								<li data-id="page-li" id-pg="{{ $counter_nbr }}"><a href="#link-top" data-id="page-a" id-pg="{{ $counter_nbr }}">{{ $counter_nbr }}</a></li>
								@endif
								@php
								$counter_nbr++;
								@endphp
								@endif
								@endforeach
								<li>
									<a href="#link-top" aria-label="next-pg">
										<span aria-hidden="true">&raquo;</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>

				</div>

			</div>

		</div>

	</div>
</div>
@endsection