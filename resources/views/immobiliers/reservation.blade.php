@extends('layouts.app')

@section('content')
<div class="container mx-container-5" >

        <div class="pt-30 pb-50">

				<div class="container">

					<div class="row">

						<div class="col-xs-12 col-sm-8 col-md-8 mt-20">
                            <div class="breadcrumb-image-bg mx-breadcrumb-image-bg mx-dtl-breadcrumb-image-bg " style="background-image: url(/storage/{{ $immobilier->pic_src }}); background-size: cover;">
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

                            </div>
                            <form action="/rsimmol" enctype="multipart/form-data" method="POST">
                                @csrf

                                    <div class="row">
                                        <div class="col-8 offset-2">
                                    <div class="form-group row">
                                                <label for="nom" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('nom') }}</label>


                                                    <input id="nom" type="nom" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}"  autocomplete="nom">

                                                    @error('nom')
                                                        <span class="invalid-feedback-mx invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="prenom" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>


                                            <input id="prenom" type="prenom" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}"  autocomplete="prenom">

                                            @error('prenom')
                                                <span class="invalid-feedback-mx invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="tele" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>


                                            <input id="tele" type="tele" class="form-control @error('tele') is-invalid @enderror" name="tele" value="{{ old('tele') }}"  autocomplete="tele">

                                            @error('tele')
                                                <span class="invalid-feedback-mx invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('email') }}</label>


                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback-mx invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>

                                    <div class="form-group row">
                                        <label for="date_debut_reservation" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('date de debut de reservation') }}</label>


                                            <input id="date_debut_reservation" type="date" class="form-control @error('date_debut_reservation') is-invalid @enderror" name="date_debut_reservation" value="{{ old('date_debut_reservation') }}"  autocomplete="date_debut_reservation" min="">

                                            @error('date_debut_reservation')
                                                <span class="invalid-feedback-mx invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="date_fin_reservation" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('date de fin de reservation') }}</label>


                                            <input id="date_fin_reservation" type="date" class="form-control @error('date_fin_reservation') is-invalid @enderror" name="date_fin_reservation" value="{{ old('date_fin_reservation') }}"  autocomplete="date_fin_reservation">

                                            @error('date_fin_reservation')
                                                <span class="invalid-feedback-mx invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="nbr_personnes" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('nombre de personnes') }}</label>


                                        <input id="nbr_personnes" type="nbr_personnes" class="form-control @error('nbr_personnes') is-invalid @enderror" name="nbr_personnes" value="{{ old('nbr_personnes') }}"  autocomplete="nbr_personnes">

                                            @error('nbr_personnes')
                                                <span class="invalid-feedback-mx invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="id">
                                        <input type="text" value="{{ $immobilier->id }}" name="id" hidden>
                                    </div>
                                    <div class="form-group row  mt-0 ml-auto">
                                        <button class="btn btn-primary">RESERVER</button>
                                    </div>
                                   </div>
                                </div>

                                </form>


						</div>

						<div id="sidebar-sticky" class="col-xs-12 col-sm-4 col-md-4-mx col-md-4 mt-20 sticky-mt-30 mt-50-sm">

							<aside class="sidebar-wrapper with-box-shadow">

								<div class="sidebar-booking-box">

									<div class="sidebar-booking-header pt-20 pb-15 clearfix">

										<h3 class="text-white text-uppercase spacing-3 mb-0 line-1">{{ $immobilier->designation }}</h3>

									</div>

									<div class="sidebar-booking-inner">

										<ul class="price-summary-list">

                                            <li class="divider"></li>

											<li>
												<div class="row gap-10 mt-10">
													<div class="col-xs-7 col-sm-7">
														<span class="font600">PRIX</span>
                                                        <div class="font-smaller " style="color: rgb(241, 64, 10)">* depend de duree que vous avez choisie</div>
                                                    </div>
													<div class="col-xs-5 col-sm-5 text-right">
														<span class="font600 font26 block text-primary mt-5 mx-price" pmin="{{ $immobilier->price_min }}" pmax="{{ $immobilier->price_max }}">{{ $immobilier->price_min }}$</span>
													</div>
												</div>
											</li>

											<li class="divider"></li>

											<li>
												<a href="#" class="btn btn-primary btn-sm mt-5 btn-mx-1">CHOISIR UNE AUTRE</a>
                                            </li>
                                            <li class="divider"></li>

											<li>
												<a href="#" class="btn btn-primary btn-sm mt-5 btn-mx-1">RETOUR AU DETAILS</a>
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
