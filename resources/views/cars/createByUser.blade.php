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
	<div class="carousel-inner" role="listbox" style="height:40vh">
		<div class="item one active d-block w-100">
			<!-- <img class="first-slide
					" src="{{ asset('/') }}images/bg/bg1.jpg"  alt="First slide">
  -->
			<div class="carousel-caption mx-carousoul-p">

				<p class="meri-titles">Garantir la meilleure qualité des voitures est notre plaisir</p>

			</div>

		</div>
		<div class="item two d-block w-100">
			<!-- <img class="second-slide" src="/images/bg/bg2.jpg" style="height:inherit"> -->

			<div class="carousel-caption mx-carousoul-p">

				<p class="meri-titles">Trouvez votre place avec une expérience photo immersive</p>
			</div>
		</div>
		<div class="item three d-block w-100">
			<!-- <img class="third-slide" src="{{ asset('/') }}images/hero-header/04.jpg" alt="Third slide"> -->

			<div class="carousel-caption mx-carousoul-p">

				<p class="meri-titles">Le confort et la sécurité que vous ne trouverez nulle part ailleurs</p>
			</div>
		</div>
		<div class="item four d-block w-100">
			<!-- <img class="third-slide" src="{{ asset('/') }}images/hero-header/04.jpg" alt="Third slide"> -->

			<div class="carousel-caption mx-carousoul-p">

				<p class="meri-titles">Nous vous aidons à trouvez l'appartement que vous aimerez</p>
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
<div class="container mx-ccontainer-5">

        <div class="pt-30 pb-50">

				<div class="container ">

					<div class="row">

						<div class="col-xs-12 col-sm-8 col-md-8 mt-20">
                                <div class="container" >

                                    <div class="page-title">

                                        <div class="mx-row row">

                                            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" >
                                                <div data-aos="zoom-out-left">
                                                <h2>l'aventure commence ici</h2>
                                            </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            <form action="{{route('car.store')}}" enctype="multipart/form-data" method="POST">
                                @csrf

                                    <div class="row">
                                         <div class="col-8 offset-2">


                                    <div class="form-group row">
                                                <label for="categorie" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('categorie de voiture') }}</label>


                                                    <select name="categorie" class="form-control @error('marque') is-invalid @enderror" value="{{ old('marque') }}" name="marque" id="">
                                                        <option value="Voitures de luxe">Voitures de luxe</option>
                                                        <option value="Transports touristique">Transports touristique</option>
                                                    </select>

                                                    @error('categorie')
                                                        <span class="invalid-feedback-mx" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="marque" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('marque de voiture') }}</label>


                                            <input id="marque" type="text" class="form-control @error('marque') is-invalid @enderror" name="marque" value="{{ old('marque') }}"  autocomplete="marque">

                                            @error('marque')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="etat" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('etat de voiture') }}</label>


                                            <input id="etat" type="text" class="form-control @error('etat') is-invalid @enderror" name="etat" value="{{ old('etat') }}"  autocomplete="etat">

                                            @error('etat')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="numm_immat" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __("numero d'immatricule") }}</label>


                                            <input id="numm_immat" type="text" class="form-control @error('numm_immat') is-invalid @enderror" name="numm_immat" value="{{ old('numm_immat') }}"  autocomplete="numm_immat">

                                            @error('numm_immat')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="nbr_place" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('nombre de places de voiture') }}</label>


                                            <input id="nbr_place" type="number" class="form-control @error('nbr_place') is-invalid @enderror" name="nbr_place" value="{{ old('nbr_place') }}"  autocomplete="nbr_place">

                                            @error('nbr_place')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>

                                    <div class="form-group row">
                                        <label for="kilometrage" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('kilometrage(km/h)') }}</label>


                                            <input id="kilometrage" type="text" class="form-control @error('kilometrage') is-invalid @enderror" name="kilometrage" value="{{ old('kilometrage') }}"  autocomplete="kilometrage">

                                            @error('kilometrage')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="prix_min" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('prix minimale pour jour') }}</label>


                                            <input id="prix_min" type="text" class="form-control @error('prix_min') is-invalid @enderror" name="prix_min" value="{{ old('prix_min') }}"  autocomplete="prix_min">

                                            @error('prix_min')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="prix_max" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('prix maximale pour jour') }}</label>


                                            <input id="prix_max" type="text" class="form-control @error('prix_max') is-invalid @enderror" name="prix_max" value="{{ old('prix_max') }}"  autocomplete="prix_max">

                                            @error('prix_max')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="chare_max" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('charge maximale de voiture') }}</label>


                                            <input id="chare_max" type="text" class="form-control @error('chare_max') is-invalid @enderror" name="chare_max" value="{{ old('chare_max') }}"  autocomplete="chare_max">

                                            @error('chare_max')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="couleur" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('couleur de voiture') }}</label>


                                            <input id="couleur" type="color" class="form-control @error('couleur') is-invalid @enderror" name="couleur" value="{{ old('couleur') }}"  autocomplete="couleur">

                                            @error('couleur')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="pic_src" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('image officielle de voiture') }}</label>


                                            <input id="pic_src" type="file" class="form-control @error('pic_src') is-invalid @enderror" name="pic_src" value="{{ old('pic_src') }}"  autocomplete="pic_src">

                                            @error('pic_src')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="img_1" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('images secondaire 1') }}</label>


                                            <input id="img_1" type="file" class="form-control @error('img_1') is-invalid @enderror" name="img_1" value="{{ old('img_1') }}"  autocomplete="img_1">

                                            @error('img_1')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="img_2" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('images secondaire 2') }}</label>


                                            <input id="img_2" type="file" class="form-control @error('img_2') is-invalid @enderror" name="img_2" value="{{ old('img_2') }}"  autocomplete="img_2">

                                            @error('img_2')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="img_3" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('images secondaire 3') }}</label>


                                            <input id="img_3" type="file" class="form-control @error('img_3') is-invalid @enderror" name="img_3" value="{{ old('img_3') }}"  autocomplete="img_3">

                                            @error('img_3')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>

                                    <div class="form-group row">
                                        <label for="img_4" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('images secondaire 4') }}</label>


                                            <input id="img_4" type="file" class="form-control @error('img_4') is-invalid @enderror" name="img_4" value="{{ old('img_4') }}"  autocomplete="img_4">

                                            @error('img_4')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>

                                    <div class="form-group row  mt-0 ml-auto">
                                        <button class="btn btn-primary" name="create_car">Creer</button>
                                    </div>
                                   </div>
                                </div>

                                </form>


						</div>

						<div id="sidebar-sticky" class="col-xs-12 col-sm-4 col-md-4 mt-20 sticky-mt-30 mt-50-sm">

							<aside class="sidebar-wrapper with-box-shadow">

								<div class="sidebar-booking-box">

									<div class="sidebar-booking-header pt-20 pb-15 clearfix">

										<h3 class="text-white text-uppercase spacing-3 mb-0 line-1">BIEVENUE</h3>

									</div>

									<div class="sidebar-booking-inner">

										<ul class="price-summary-list">

                                            <li class="divider"></li>

											<li>
												<div class="row gap-10 mt-10">
													<div class="col-xs-7 col-sm-7">
														<span class="font600">VERIFIER TOUTS LES INFORMATIONS SAISIES AVANT DE CLIQUER SUR CREER </span>
												</div>
											</li>


										</ul>

									</div>

								</div>

							</aside>

						</div>

					</div>

				</div>

			</div>

		</div>
</div>
@endsection
@section('script-details-car')
<!-- Detail Page JS -->
<script type="text/javascript" src="{{ asset('/') }}js/jquery.stickit.js"></script>
<script type="text/javascript" src="{{ asset('/') }}js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="{{ asset('/') }}js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}js/jquery.sumogallery.js"></script>
<script type="text/javascript" src="{{ asset('/') }}js/images-grid.js"></script>
<script type="text/javascript" src="{{ asset('/') }}js/jquery.bootstrap-touchspin.js"></script>
<script type="text/javascript" src="{{ asset('/') }}js/customs-detail.js"></script>


@endsection
