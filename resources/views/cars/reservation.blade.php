@extends('layouts.app')

@section('content')
<div class="container

        <div class="pt-30 pb-50">

				<div class="container">

					<div class="row">

						<div class="col-xs-12 col-sm-8 col-md-8 mt-20">

                            <form action="/p" enctype="multipart/form-data" method="POST">
                                @csrf

                                    <div class="row">
                                        <div class="col-8 offset-2">


                                    <div class="form-group row">
                                                <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('nom') }}</label>


                                                    <input id="nom" type="nom" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}"  autocomplete="nom">

                                                    @error('nom')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>


                                            <input id="prenom" type="prenom" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}"  autocomplete="prenom">

                                            @error('prenom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="tele" class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>


                                            <input id="tele" type="tele" class="form-control @error('tele') is-invalid @enderror" name="tele" value="{{ old('tele') }}"  autocomplete="tele">

                                            @error('tele')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>


                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>

                                    <div class="form-group row">
                                        <label for="date_debut_reservation" class="col-md-4 col-form-label text-md-right">{{ __('date de debut de reservation') }}</label>


                                            <input id="date_debut_reservation" type="date" class="form-control @error('date_debut_reservation') is-invalid @enderror" name="date_debut_reservation" value="{{ old('date_debut_reservation') }}"  autocomplete="date_debut_reservation">

                                            @error('date_debut_reservation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="time_debut_reservation" class="col-md-4 col-form-label text-md-right">{{ __('temps debut de reservation') }}</label>


                                            <input id="time_debut_reservation" type="time" class="form-control @error('time_debut_reservation') is-invalid @enderror" name="time_debut_reservation" value="{{ old('time_debut_reservation') }}"  autocomplete="time_debut_reservation">

                                            @error('time_debut_reservation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="date_fin_reservation" class="col-md-4 col-form-label text-md-right">{{ __('date de fin de reservation') }}</label>


                                            <input id="date_fin_reservation" type="date" class="form-control @error('date_fin_reservation') is-invalid @enderror" name="date_fin_reservation" value="{{ old('date_fin_reservation') }}"  autocomplete="date_fin_reservation">

                                            @error('date_fin_reservation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="time_fin_reservation" class="col-md-4 col-form-label text-md-right">{{ __('temps de fin de reservation') }}</label>


                                            <input id="time_fin_reservation" type="time" class="form-control @error('time_fin_reservation') is-invalid @enderror" name="time_fin_reservation" value="{{ old('time_fin_reservation') }}"  autocomplete="time_fin_reservation">

                                            @error('time_fin_reservation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row  mt-0 ml-auto">
                                        <button class="btn btn-primary">RESERVER</button>
                                    </div>
                                   </div>
                                </div>

                                </form>


						</div>

						<div id="sidebar-sticky" class="col-xs-12 col-sm-4 col-md-4 mt-20 sticky-mt-30 mt-50-sm">

							<aside class="sidebar-wrapper with-box-shadow">

								<div class="sidebar-booking-box">

									<div class="sidebar-booking-header pt-20 pb-15 clearfix">

										<h3 class="text-white text-uppercase spacing-3 mb-0 line-1">MERCEDES MARQUE EXEMPLE</h3>

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
														<span class="font600 font26 block text-primary mt-5">$1,300</span>
													</div>
												</div>
											</li>

											<li class="divider"></li>

											<li>
												<a href="#" class="btn btn-primary btn-sm mt-5">CHOISIR UNE AUTRE VOITURE</a>
                                            </li>
                                            <li class="divider"></li>

											<li>
												<a href="#" class="btn btn-primary btn-sm mt-5">RETOUR AU DETAILS</a>
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
