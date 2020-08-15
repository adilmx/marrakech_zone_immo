@extends('layouts.admin')

@section('section-search')

        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </div>
@endsection

@section('content')
<div class="section">
<div class="section-header">
<h1>{{__("Modification des informations de réseau sociaux des pages de site")}}</h1>
</div>
<div class="section-body">

        <div class="pt-30 pb-50">

				<div class="container">

					<div class="">

						<div class="col-xs-12 col-sm-8 col-md-8 mt-20" style="max-width: 100% !important;">

                            <form action="{{route('homeInfos.store')}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                    <hr>
                                    <div class="">
                                         <div class="">

                                         <div class="form-group row">
                                        <label for="email" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('email') }}</label>


                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $infos[0]->email }}"  autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>

                                    <div class="form-group row">
                                        <label for="tele" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('tele') }}</label>


                                            <input id="tele" type="text" class="form-control @error('tele') is-invalid @enderror" name="tele" value="{{ $infos[0]->tele }}"  autocomplete="tele">

                                            @error('tele')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>

                                    <div class="form-group row">
                                        <label for="wp_tele" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('whatsapp tele') }}</label>


                                            <input id="wp_tele" type="wp_tele" class="form-control @error('wp_tele') is-invalid @enderror" name="wp_tele" value="{{ $infos[0]->wp_tele }}"  autocomplete="wp_tele">

                                            @error('wp_tele')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>

                                    <div class="form-group row">
                                        <label for="facebook" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('facebook') }}</label>


                                            <input id="facebook" type="facebook" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ $infos[0]->facebook }}"  autocomplete="facebook">

                                            @error('facebook')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>

                                    <div class="form-group row">
                                        <label for="twitter" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('twitter') }}</label>


                                            <input id="twitter" type="twitter" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value="{{ $infos[0]->twitter }}"  autocomplete="twitter">

                                            @error('twitter')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>

                                    <div class="form-group row">
                                        <label for="instagram" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('instagram') }}</label>


                                            <input id="instagram" type="instagram" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{ $infos[0]->instagram }}"  autocomplete="instagram">

                                            @error('instagram')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>

                                    <div class="form-group row" style="text-align: center;">
                                        <button class="btn btn-primary btn-wide" name="create_infos[0]">{{__('modifier')}}</button>
                                    </div>
                                   </div>
                                </div>

                                </form>


						</div>



					</div>

				</div>

			</div>

		</div>
</div>
@endsection
