@extends('layouts.app')

@section('content')
<div class="container">

        <div class="pt-30 pb-50">

				<div class="container mx-container-6">

					<div class="row">
                    
                <!-- start title -->
						<div class="col-xs-12 col-sm-8 col-md-8 mt-20">
                            <div class="col-xs-12 col-sm-8 col-md-9 col-md-9-mx">
                                <h2 class="text-center" ><span><i class="fas fa-star " style="font-size:4vw;color:orangered" ></i><i class="fas fa-star " style="font-size:4vw" ></i><i class="fas fa-star " style="font-size:4vw;color:orangered" >
		                        </i><i class="fas fa-star " style="font-size:4vw" ></i><i class="fas fa-star " style="font-size:4vw;color:orangered" ></i>
	                            </span> <br>Modification des images de sections de page d'accueil</h2>

                            </div>
                        <div class="bt mt-30 mb-30"></div>
                <!-- end title -->

                            <form action="/shomesections" enctype="multipart/form-data" method="POST">
                                @csrf

                                    <div class="row">
                                         <div class="col-8 offset-2">

                                    <div class="form-group row">
                                        <label for="img_1" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('image de section voiture') }}</label>


                                            <input id="img_1" type="file" class="form-control @error('img_1') is-invalid @enderror" name="img_1" value="{{ old('img_1') }}"  autocomplete="img_1">

                                            @error('img_1')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="img_2" class="col-md-4-mx col-md-4 col-form-label text-md-right">{{ __('image de section immobilier') }}</label>


                                            <input id="img_2" type="file" class="form-control @error('img_2') is-invalid @enderror" name="img_2" value="{{ old('img_2') }}"  autocomplete="img_2">

                                            @error('img_2')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    

                                    <div class="form-group row" style="text-align: center;">
                                        <button class="btn btn-primary btn-wide" name="create_car">modifier</button>
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
													<div class="col-xs-7 col-sm-7 " style="width:100%; color: #001a79 ;">
														<span class="font600">Veuillez verifier la correspondance de chaque image avec sa section dans LA page d'accueil CARASOUL avant de cliquer sur MODIFIER </span>
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
