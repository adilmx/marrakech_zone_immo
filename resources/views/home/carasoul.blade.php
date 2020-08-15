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
<h1>{{__("Modification des images de diaporama de page d'accueil")}}</h1>
</div>
<div class="section-body">

        <div class="pt-30 pb-50">

				<div class="container">

					<div class="">

						<div class="col-xs-12 col-sm-8 col-md-8 mt-20" style="max-width: 100% !important;">
                        
                            <form action="{{route('homeCarasoul.store',['carasoul'=>'2'])}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                    <hr>
                                    <div class="">
                                         <div class="">
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-left col-12  col-lg-3 mx-cap">{{ __('image de partie 1') }}</label>
                                        <div class="col-sm-12 col-md-7">
                                          <div id="image-preview_1" class="image-preview mx-image-preview">
                                            <label for="image-upload_1" id="image-label_1">{{__('Image ici')}}</label>
                                            <input id="image-upload_1" type="file" class=" @error('img_1') is-invalid @enderror" name="img_1" value="{{ old('img_1') }}"  autocomplete="img_1">

                                            @error('img_1')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <img id="img_top_1" src="/storage/{{ $carasoul[0]->first_img }}" alt="img">
                                          </div>
                                        </div>
                                    </div>
                 
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-left col-12  col-lg-3 mx-cap">{{ __('image de partie 2') }}</label>
                                        <div class="col-sm-12 col-md-7">
                                          <div id="image-preview_2" class="image-preview mx-image-preview">
                                            <label for="image-upload_2" id="image-label_2">{{__('Image ici')}}</label>
                                            <input id="image-upload_2" type="file" class=" @error('img_2') is-invalid @enderror" name="img_2" value="{{ old('img_2') }}"  autocomplete="img_2">

                                            @error('img_2')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <img id="img_top_2" src="/storage/{{ $carasoul[0]->sec_img }}" alt="img">
                                          </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-left col-12  col-lg-3 mx-cap">{{ __('image de partie 3') }}</label>
                                        <div class="col-sm-12 col-md-7">
                                          <div id="image-preview_3" class="image-preview mx-image-preview">
                                            <label for="image-upload_3" id="image-label_3">{{__('Image ici')}}</label>
                                            <input id="image-upload_3" type="file" class=" @error('img_3') is-invalid @enderror" name="img_3" value="{{ old('img_3') }}"  autocomplete="img_3">

                                            @error('img_3')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <img id="img_top_3" src="/storage/{{ $carasoul[0]->third_img }}" alt="img">
                                          </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-left col-12  col-lg-3 mx-cap">{{ __('image de partie 4') }}</label>
                                        <div class="col-sm-12 col-md-7">
                                          <div id="image-preview_4" class="image-preview mx-image-preview">
                                            <label for="image-upload_4" id="image-label_4">{{__('Image ici')}}</label>
                                            <input id="image-upload_4" type="file" class=" @error('img_4') is-invalid @enderror" name="img_4" value="{{ old('img_4') }}"  autocomplete="img_4">

                                            @error('img_4')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <img id="img_top_4" src="/storage/{{ $carasoul[0]->fourth_img }}" alt="img">
                                          </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                      <label class="col-form-label text-md-left col-12  col-lg-3 mx-cap">{{ __('image de partie 5') }}</label>
                                      <div class="col-sm-12 col-md-7">
                                        <div id="image-preview_5" class="image-preview mx-image-preview">
                                          <label for="image-upload_5" id="image-label_5">{{__('Image ici')}}</label>
                                          <input id="image-upload_5" type="file" class=" @error('img_5') is-invalid @enderror" name="img_5" value="{{ old('img_5') }}"  autocomplete="img_5">

                                          @error('img_5')
                                              <span class="invalid-feedback-mx" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                          <img id="img_top_5" src="/storage/{{ $carasoul[0]->fifth_img }}" alt="img">
                                        </div>
                                      </div>
                                  </div>

                                    <div class="form-group row" style="text-align: center;">
                                        <button class="btn btn-primary btn-wide" name="create_car">{{__('modifier')}}</button>
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
