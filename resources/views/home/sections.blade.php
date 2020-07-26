@extends('layouts.admin')

@section('content')
<div class="section">
<div class="section-header">
<h1>Modification des images de sections de page d'accueil</h1>
</div>
<div class="section-body">

        <div class="pt-30 pb-50">

				<div class="container">

					<div class="">

						<div class="col-xs-12 col-sm-8 col-md-8 mt-20" style="max-width: 100% !important;">
                        
                            <form action="{{route('homeSections.store',['section'=>'2'])}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                    <hr>
                                    <div class="">
                                         <div class="">

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-left col-12  col-lg-3 mx-cap">{{ __('image de section de voiture') }}</label>
                                        <div class="col-sm-12 col-md-7">
                                          <div id="image-preview_1" class="image-preview mx-image-preview">
                                            <label for="image-upload_1" id="image-label_1">Image ici</label>
                                            <input id="image-upload_1" type="file" class=" @error('img_1') is-invalid @enderror" name="img_1" value="{{ old('img_1') }}"  autocomplete="img_1">

                                            @error('img_1')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <img id="img_top_1" src="/storage/{{ $section[0]->first_img }}" alt="img">
                                          </div>
                                        </div>
                                    </div>
                 
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-left col-12  col-lg-3 mx-cap">{{ __("image de section d'immobilier") }}</label>
                                        <div class="col-sm-12 col-md-7">
                                          <div id="image-preview_2" class="image-preview mx-image-preview">
                                            <label for="image-upload_2" id="image-label_2">Image ici</label>
                                            <input id="image-upload_2" type="file" class=" @error('img_2') is-invalid @enderror" name="img_2" value="{{ old('img_2') }}"  autocomplete="img_2">

                                            @error('img_2')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <img id="img_top_2" src="/storage/{{ $section[0]->sec_img }}" alt="img">
                                          </div>
                                        </div>
                                    </div>

                                    <div class="form-group row" style="text-align: center;">
                                        <button class="btn btn-primary btn-wide" name="create_car">modifier</button>
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
