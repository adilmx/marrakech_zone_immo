@extends('layouts.app')

@section('css-up')
<!-- CSS Custom -->
<link href="{{ url('css/style2.css') }} " rel="stylesheet">

<!-- Add your style -->
<link href="{{ url('css/your-style2.css') }}" rel="stylesheet">
@endsection

<script>
	// Select your input element.
	var number = document.getElementsByClassName('.meri-number');


	// Listen for input event on numInput.
	number.onkeydown = function(e) {
		if (!((e.keyCode > 95 && e.keyCode < 106) ||
				(e.keyCode > 47 && e.keyCode < 58) ||
				e.keyCode == 8)) {
			return false;
		}
	}
</script>
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

	.carousel .five {
		background: url({{ $str }}{{ $home_carasoul[0]->fifth_img }});
		background-position: center;
		background-repeat: no-repeat;

		background-size: cover;
		-moz-background-size: cover;
	}

	.fas .fa-star {
		background-color: #C89005;
	}

	.icon:hover {
		color: orangered !important;
	}

	/* 1.14 Image Preview */
	.image-preview,
	#callback-preview {
		width: 250px;
		height: 250px;
		border: 2px dashed #ddd;
		border-radius: 3px;
		position: relative;
		overflow: hidden;
		background-color: #ffffff;
		color: #ecf0f1;
	}

	.image-preview input,
	#callback-preview input {
		line-height: 200px;
		font-size: 200px;
		position: absolute;
		opacity: 0;
		z-index: 10;
	}

	.image-preview label,
	#callback-preview label {
		position: absolute;
		z-index: 5;
		opacity: 0.8;
		cursor: pointer;
		background-color: #bdc3c7;
		width: 150px;
		height: 50px;
		font-size: 12px;
		line-height: 50px;
		text-transform: uppercase;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		margin: auto;
		text-align: center;
	}

	.audio-preview {
		background: #ffffff;
		width: auto;
		padding: 20px;
		display: inline-block;
	}

	.audio-upload {
		cursor: pointer;
		background-color: #bdc3c7;
		color: #ecf0f1;
		padding: 20px;
		font-size: 20px;
		text-transform: uppercase;
	}
</style>

<script>
	// Select your input element.
	var number = document.getElementsByClassName('.meri-number');


	// Listen for input event on numInput.
	number.onkeydown = function(e) {
		if (!((e.keyCode > 95 && e.keyCode < 106) ||
				(e.keyCode > 47 && e.keyCode < 58) ||
				e.keyCode == 8)) {
			return false;
		}
	}
</script>
<!-- Carousel
                ================================================== -->
<div id="myCarousel" class="carousel slide hero" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
		<li data-target="#myCarousel" data-slide-to="4"></li>

	</ol>
	<div class="carousel-inner" role="listbox" style="height:40vh">
		<div class="item one active d-block w-100">
			<!-- <img class="first-slide
					" src="{{ asset('/') }}images/bg/bg1.jpg"  alt="First slide">
  -->
			<div class="carousel-caption mx-carousoul-p">

				<p class="meri-titles">{{__('Acquérir votre bien à Marrakech')}}</p>

			</div>

		</div>
		<div class="item two d-block w-100">
			<!-- <img class="second-slide" src="/images/bg/bg2.jpg" style="height:inherit"> -->

			<div class="carousel-caption mx-carousoul-p">

				<p class="meri-titles">{{__('locations saisonnières dans une villas luxueuses à Marrakech')}}</p>
			</div>
		</div>
		<div class="item three d-block w-100">
			<!-- <img class="third-slide" src="{{ asset('/') }}images/hero-header/04.jpg" alt="Third slide"> -->

			<div class="carousel-caption mx-carousoul-p">

				<p class="meri-titles">{{__('ventes et achats des biens immobilier')}}</p>
			</div>
		</div>
		<div class="item four d-block w-100">
			<!-- <img class="third-slide" src="{{ asset('/') }}images/hero-header/04.jpg" alt="Third slide"> -->

			<div class="carousel-caption mx-carousoul-p">

				<p class="meri-titles">{{__("Ventes Riad")}}</p>
			</div>
		</div>
		<div class="item five d-block w-100">
			<!-- <img class="third-slide" src="{{ asset('/') }}images/hero-header/04.jpg" alt="Third slide"> -->

			<div class="carousel-caption mx-carousoul-p">

				<p class="meri-titles">{{__("Transport et location")}}</p>
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
<!-- start breadcrumb -->

<div class="breadcrumb-image-bg pb-100 no-bg" style="background-image:url('/images/white.jpg');">
	<div class="container">

		<div class="page-title">

			<div class="row">

				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

					<h2>{{__('Créer votre immobilier')}}</h2>
					<p>{{__('le site qui vous offre la meilleure performance')}}</p>

				</div>

			</div>

		</div>

		<div class="breadcrumb-wrapper">



		</div>

	</div>

</div>

<!-- end breadcrumb -->

<div class="bg-light">

	<div class="create-tour-wrapper">

		<div class="container">

			<div class="row">

				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

					<div class="form">

						<div class="create-tour-inner">

							<div class="promo-box-02 mb-40">

								<div class="icon">
									<i class="ti-plus"></i>
								</div>

								<h4>{{__('Pour créer votre propre immobilier veuillez remplir ce formulaire.Merci...')}}</p>
  </h4>


                            </div>
                            <form method="post" action="{{route('immoByUser.store',['lang'=> app()->getLocale()])}}" enctype="multipart/form-data">

                                @csrf
							<h4 class="section-title">{{__('à propos de vous')}}</h4>
							<div class="row">
								<div class="col-xs-12 col-sm-12">

									<div class="form-group form-group-lg">
										<label>{{__('Nom')}}:</label>
										<input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" >
										@error('nom')
										<span class="invalid-feedback-mx" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="col-xs-12 col-sm-12">

									<div class="form-group form-group-lg">
										<label>{{__('Prénom')}}:</label>
										<input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" >
										@error('prenom')
										<span class="invalid-feedback-mx" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="col-xs-12 col-sm-12">

									<div class="form-group form-group-lg">
										<label>{{__('Email')}}:</label>
										<input type="text" class="form-control @error('email') is-invalid @enderror" name="email" >
										@error('email')
										<span class="invalid-feedback-mx" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="col-xs-12 col-sm-12">

									<div class="form-group form-group-lg">
										<label>{{__('Téléphone')}}:</label>
										<input type="text" class="form-control @error('tele') is-invalid @enderror" name="tele" >
										@error('tele')
										<span class="invalid-feedback-mx" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
							</div>
							<h4 class="section-title">{{__('A propos de votre immobilier')}}</h4>

							<div class="row">


								



									<div class="col-xs-12 col-sm-12">

										<div class="form-group form-group-lg">
											<label>{{__('Désignation')}}:</label>
											<input type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" >
											@error('designation')
											<span class="invalid-feedback-mx" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>

									</div>

									<div class="col-xs-12 col-sm-12 col-md-12">
										<label>{{__('Prix de vente')}}:</label>
										<div class="input-group mb-15">
											<input type="text" class=" meri-number form-control @error('prix_max') is-invalid @enderror" name="prix_max" id="prix_max" >

											<span class="input-group-addon">$USD</span>
                                            @error('prix_max')
											<span class="invalid-feedback-mx" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
											@if(isset($msgErr1))
											<span class="invalid-feedback-mx" role="alert">
												<strong>{{ $msgErr }}</strong>
											</span>
											@endif
										</div>
									</div>



									<div class="col-xs-12 col-sm-12">

										<div class="form-group">
											<label>{{__('Ville')}}:</label>
											<input type="text" class="form-control" id="autocompleteTagging" value="Marrakech" placeholder="" disabled />
										</div>

									</div>

									<div class="col-xs-12 col-sm-12">

										<div class="form-group">
											<label>{{__('Adresse')}}:</label>
                                            <textarea class="form-control @error('adresse') is-invalid @enderror" rows="5" name="adresse"></textarea>
                                            @error('adresse')
											<span class="invalid-feedback-mx" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>

									</div>

									<div class="col-xs-12 col-sm-12">



									</div>

							</div>

							<h5 class="text-uppercase">{{__('Quel est le type de votre nouveau immobilier')}}?</h5>

							<div class="row gap-20">

								<div class="col-xs-12 col-sm-12">

									<div class="form-group">
										<label>{{__('Type de votre immobilier')}}:</label>
										<select class="selectpicker show-tick form-control @error('type') is-invalid @enderror" title="Select placeholder" id="mytype" name="type" onchange="callme();">
											{{-- @php $types=Session::get('types_immo')
											@endphp --}}
@php
    $key=0;
@endphp
											@foreach( $types as $type)
											<option value="{{++$key}}">{{ __("$type->lib") }}</option>

											@endforeach
                                        </select>
                                        @error('type')
											<span class="invalid-feedback-mx" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
									</div>

								</div>
								<div class="col-xs-6 col-sm-6">

									<div class="form-group">
										<label>{{__("Combien de chambres")}}??</label>
										<input type="number" min="0" class="meri-number form-control @error('chambres') is-invalid @enderror" name="nbr_chbr" id="nbr_chbr" placeholder="1,2,3..." >
                                        @error('chambres')
                                        <span class="invalid-feedback-mx" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
									</div>

								</div>

								<div class="col-xs-6 col-sm-6">

									<div class="form-group">
										<label>{{__("Combien d'étages")}}?</label>
										<input type="number" min="0" class="meri-number form-control mb-2 mr-sm-2 @error('nbr_etage') is-invalid @enderror" id="nbr_etg" placeholder="1,2,3..." name="nbr_etage">
                                        @error('nbr_etage')
                                        <span class="invalid-feedback-mx" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
									</div>

								</div>





							</div>


							<div class="mb-30"></div>

							<h4 class="section-title">{{__("Détails sur l'Immobilier")}}</h4>

							<div class="row gap-20">

								<div class="col-xs-12 col-sm-5">

									<div class="form-group">
										<label>{{__('PATENTE')}}</label>
                                        <input type="text" class="form-control @error('patente') is-invalid @enderror" name="patente" >
                                        @error('patente')
											<span class="invalid-feedback-mx" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
									</div>

								</div>

								<div class="col-xs-12 col-sm-3">

									<div class="form-group">
										<label>{{__('Superficie')}} {{ __("m") }}<sup>2</sup> </label>
                                        <input type="text" class="form-control @error('superficie') is-invalid @enderror" name="superficie" >
                                        @error('superficie')
											<span class="invalid-feedback-mx" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										@if(isset($msgErr2))
										<span class="invalid-feedback-mx" role="alert">
											<strong>{{ $msgErr }}</strong>
										</span>
										@endif
									</div>

								</div>

                                <div class="col-xs-12 col-sm-12">

                                    <div class="form-group form-group-lg">
                                    <label >{{ __("Superficie piscine") }} {{ __("m") }}<sup>2</sup> </label>
                                        <input type="text" class="form-control" name="superficie_psc" id="superficie_psc" @error('superficie_psc') is-invalid @enderror>
                                        @if(isset($msgErr2))
                                                    <span class="invalid-feedback-mx" role="alert">
                                                        <strong>{{ $msgErr }}</strong>
                                                    </span>
                                         @endif
                                         @error('superficie_psc')
											<span class="invalid-feedback-mx" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
                                </div>
                            </div>





								{{-- <div class="col-xs-12 col-sm-12">
									<div class="mt-10">
										<span class="block line-12">{{__('Est ce que votre immobilier posséde une piscine')}}?</span>
										<div class="clear mb-5"></div>
										<div class="radio-inline">
											<input name="yes_no-1" type="radio" class="radio" id="isChecked" />
											<label for="yes_no-1-1" id="labl">{{__('Oui')}}</label>
										</div>
										<div class="radio-inline">
											<input id="yes_no-1-2" name="yes_no-1" type="radio" class="radio" checked />
											<label for="yes_no-1-2">{{__('Non')}}</label>
										</div>
									</div>
								</div>
 --}}


							</div>

							<div class="mb-40"></div>


							<div class="mb-40"></div>
							<div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{__('Image Principale')}}</label>
								<div class="col-sm-12 col-md-7">
									<div id="image-preview" class="image-preview mx-image-preview">
										<label for="image-upload" id="image-label">{{__('Image ici')}}</label>
										<input class="@error('image_src') is-invalid @enderror" type="file" name="image_src" id="image-upload"  />
										@error('image_src')
										<span class="invalid-feedback-mx" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
							</div>

							<div class="mb-30"></div>

							<h4 class="section-title">{{__('Gallery')}}</h4>


							<div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label><br>
								<div class="col-sm-12 col-3 col-md-3">
									<div id="image-preview_1" class="image-preview mx-image-preview" style="width: 150px;height: 150px;">
									<label for="image-upload_1" id="image-label_1">{{__('Image ici')}}</label>
                                            <input id="image-upload_1" type="file" class=" @error('img_1') is-invalid @enderror" name="img_1" value="{{ old('img_1') }}"  autocomplete="img_1">
	@error('img_1')
										<span class="invalid-feedback-mx" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="col-sm-12 col-3 col-md-3">

									<div id="image-preview_2" class="image-preview mx-image-preview" style="width: 150px;height: 150px;">
									<label for="image-upload_2" id="image-label_2">{{__('Image ici')}}</label>
                                            <input id="image-upload_2" type="file" class=" @error('img_2') is-invalid @enderror" name="img_2" value="{{ old('img_2') }}"  autocomplete="img_2">
@error('img_2')
										<span class="invalid-feedback-mx" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>

								<div class="col-sm-12 col-3 col-md-3">

									<div id="image-preview_3" class="image-preview mx-image-preview" style="width: 150px;height: 150px;">
									<label for="image-upload_3" id="image-label_3">{{__('Image ici')}}</label>
                                            <input id="image-upload_3" type="file" class=" @error('img_3') is-invalid @enderror" name="img_3" value="{{ old('img_3') }}"  autocomplete="img_3">
	@error('img_3')
										<span class="invalid-feedback-mx" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>

								<div class="col-sm-12 col-3 col-md-3">

									<div id="image-preview_4" class="image-preview mx-image-preview" style="width: 150px;height: 150px;">
									<label for="image-upload_4" id="image-label_4">{{__('Image ici')}}</label>
                                            <input id="image-upload_4" type="file" class=" @error('img_4') is-invalid @enderror" name="img_4" value="{{ old('img_4') }}"  autocomplete="img_4">
@error('img_4')
										<span class="invalid-feedback-mx" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
							</div>




						</div>

						<div class="mb-50">


							<div class="mb-25"></div>
                            <button type="submit" class="btn btn-primary">{{__('Valider')}}</button>

						</div>
						</form>
					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<script>
	function callme() {
		var selectVal = $("#mytype").val();


		if (selectVal == 2) {
			document.getElementById("nbr_chbr").disabled = true;
			document.getElementById("nbr_chbr").value = 0;

            document.getElementById("superficie_psc").disabled = true;
			document.getElementById("superficie_psc").value = 0;

			document.getElementById("nbr_etg").disabled = true;
			document.getElementById("nbr_etg").value = 0;

			document.getElementById("isChecked").disabled = true;




		} else {
			document.getElementById("nbr_chbr").disabled = false;
			document.getElementById("nbr_chbr").value = 0;

            document.getElementById("superficie_psc").disabled = false;
			document.getElementById("superficie_psc").value = 0;

			document.getElementById("nbr_etg").disabled = false;
			document.getElementById("nbr_etg").value = 0;

			document.getElementById("isChecked").disabled = false;


		}

		// alert('hello');

	}
</script>

@endsection
@section('script-details-car')

<!-- Create Page JS -->

  <!-- JS Libraies -->
  <script src="{{ asset('/') }}node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
  <script src="{{ asset('/') }}node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="{{ asset('/') }}node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="{{ asset('/') }}node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="{{ asset('/') }}node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="{{ asset('/') }}node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <script src="{{ asset('/') }}node_modules/selectric/public/jquery.selectric.min.js"></script>
  <script src="{{ asset('/') }}node_modules/jquery_upload_preview/assets/js/jquery.uploadPreview.js"></script>
  <script src="{{ asset('/') }}node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

  <script src="{{ asset('/') }}node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>


<!-- JS Libraies -->
  <script src="{{ asset('/') }}node_modules/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Template JS File -->
  <script src="{{ asset('/') }}assetsAdmin/js/scripts.js"></script>
  <script src="{{ asset('/') }}assetsAdmin/js/custom.js"></script>


  <!-- Page Specific JS File -->{{--
  <script src="{{ asset('/') }}assetsAdmin/js/page/index-0.js"></script> --}}
  <script src="{{ asset('/') }}assetsAdmin/js/page/features-post-create.js"></script>
  <script src="{{ asset('/') }}assetsAdmin/js/page/modules-sweetalert.js"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('/') }}node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
  <script src="{{ asset('/') }}node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="{{ asset('/') }}node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="{{ asset('/') }}node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="{{ asset('/') }}node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="{{ asset('/') }}node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <script src="{{ asset('/') }}node_modules/selectric/public/jquery.selectric.min.js"></script>
  <script src="{{ asset('/') }}node_modules/jquery_upload_preview/assets/js/jquery.uploadPreview.js"></script>
  <script src="{{ asset('/') }}node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

  <script src="{{ asset('/') }}node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>


<!-- JS Libraies -->
  <script src="{{ asset('/') }}node_modules/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Template JS File -->
  <script src="{{ asset('/') }}assetsAdmin/js/scripts.js"></script>
  <script src="{{ asset('/') }}assetsAdmin/js/custom.js"></script>


  <!-- Page Specific JS File -->{{--
  <script src="{{ asset('/') }}assetsAdmin/js/page/index-0.js"></script> --}}
  <script src="{{ asset('/') }}assetsAdmin/js/page/features-post-create.js"></script>
  <script src="{{ asset('/') }}assetsAdmin/js/page/modules-sweetalert.js"></script>
@endsection
