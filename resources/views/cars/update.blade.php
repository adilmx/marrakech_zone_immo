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
<h1>{{__('Modification de fiche de voiture')}}</h1>
</div>
<div class="container">

        <div class="pt-30 pb-50">

				<div class="container mx-container-4">

					<div class="row">

						<div class="col-xs-12 col-sm-8 col-md-8 mt-20">

                            <form action="/scaredit/{{$car[0]->id}}" enctype="multipart/form-data" method="POST">
                                @csrf

                                    <div class="row">
                                         <div class="">
                                           <div id="data_cm" marque="{{$car[0]->libelle}}" categorie="{{$car[0]->designation}}"></div>

                                    <div class="form-group row">
                                                <label for="categorie" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('categorie de voiture') }}</label>


                                                    <select name="categorie" class=" c form-control @error('categorie') is-invalid @enderror" value="{{ old('categorie') }}" name="categorie" id="categorie">
                                                        <option id="c1" data="1" value="Voitures de luxe" @if(old("categorie") == $car[0]->designation) selected @endif>Voitures de luxe</option>
                                                        <option id="c2" data="2" value="Transports touristique" @if(old("categorie") == $car[0]->designation) selected @endif>Transports touristique</option>
                                                    </select>

                                                    @error('categorie')
                                                        <span class="invalid-feedback-mx" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                    </div>

                                    <div class="form-group row">
                                        <label for="marque" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('marque de voiture') }}</label>
                                            <select name="marque_" class="mc form-control @error('marque') is-invalid @enderror" value="{{ old('marque') }}" name="marque" id="marque">
                                                <option class="op" data="0" value="" ></option>
                                                        @if(count($marques) >= 1)
                                                        @foreach($marques as  $marque)
                                                            <option class="op" data="{{$marque->categorie_id}}" value="{{ $marque->libelle }}" @if(old("marque_") == $car[0]->libelle) selected @endif >{{ $marque->libelle }}</option>
                                                        @endforeach
                                                        @endif
                                                        <option value="...">autre</option>
                                            </select>

                                            <input id="marque_sub" type="text" class="form-control @error('marque') is-invalid @enderror" name="marque" value="{{ old('marque') }}"  autocomplete="marque" hidden>
                                            <input id="marque_sub_exc" type="text" class="form-control @error('marque_exc') is-invalid @enderror" name="marque_exc" value="{{ old('marque_exc') }}"  autocomplete="marque_exc" hidden>
                                            @error('marque')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="etat" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('etat de voiture') }}</label>


                                            <input id="etat" type="text" class="form-control @error('etat') is-invalid @enderror" name="etat" value="{{ $car[0]->description }}"  autocomplete="etat">

                                            @error('etat')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="numm_immat" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __("numero d'immatricule") }}</label>


                                            <input id="numm_immat" type="text" class="form-control @error('numm_immat') is-invalid @enderror" name="numm_immat" value="{{ $car[0]->numm_immatric }}"  autocomplete="numm_immat">

                                            @error('numm_immat')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="nbr_place" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('nombre de places de voiture') }}</label>


                                            <input id="nbr_place" type="number" class="form-control @error('nbr_place') is-invalid @enderror" name="nbr_place" value="{{ $car[0]->nbr_place }}"  autocomplete="nbr_place">

                                            @error('nbr_place')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>

                                    <div class="form-group row">
                                        <label for="kilometrage" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('kilometrage(km/h)') }}</label>


                                            <input id="kilometrage" type="text" class="form-control @error('kilometrage') is-invalid @enderror" name="kilometrage" value="{{ $car[0]->kilometrage }}"  autocomplete="kilometrage">

                                            @error('kilometrage')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="prix_min" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('prix minimale pour jour') }}</label>


                                            <input id="prix_min" type="text" class="form-control @error('prix_min') is-invalid @enderror" name="prix_min" value="{{ $car[0]->prix_min_per_day }}"  autocomplete="prix_min">

                                            @error('prix_min')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="prix_max" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('prix maximale pour jour') }}</label>


                                            <input id="prix_max" type="text" class="form-control @error('prix_max') is-invalid @enderror" name="prix_max" value="{{ $car[0]->prix_max_per_day }}"  autocomplete="prix_max">

                                            @error('prix_max')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="days_separator" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('jours separante entre prix max et min') }}</label>


                                            <input id="days_separator" type="text" class="form-control @error('days_separator') is-invalid @enderror" name="days_separator" value="{{ $car[0]->days_separator }}"  autocomplete="days_separator">

                                            @error('days_separator')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="chare_max" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('charge maximale de voiture') }}</label>


                                            <input id="chare_max" type="text" class="form-control @error('chare_max') is-invalid @enderror" name="chare_max" value="{{ $car[0]->charge_max }}"  autocomplete="chare_max">

                                            @error('chare_max')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label for="couleur" class="text-md-left text-md-left col-form-label text-md-left mx-cap">{{ __('couleur de voiture') }}</label>


                                            <input id="couleur" type="color" class="form-control @error('couleur') is-invalid @enderror" name="couleur" value="{{ $car[0]->couleur }}"  autocomplete="couleur">

                                            @error('couleur')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-left col-12   mx-cap">{{ __('image officielle de voiture') }}</label>
                                        <div class="col-sm-12 ">
                                          <div id="image-preview" class="image-preview mx-image-preview" ><label for="image-upload" id="image-label">{{__('Image ici')}}</label>

                                            <input id="image-upload" type="file" class=" @error('pic_src') is-invalid @enderror" name="pic_src" value="/storage/{{ $car[0]->pic_src }}"  autocomplete="pic_src">

                                            @error('pic_src')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <img id="img_top" src="/storage/{{ $car[0]->pic_src }}" alt="img">
                                          </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-left col-12   mx-cap">{{ __('images secondaire 1') }}</label>
                                        <div class="col-sm-12 ">
                                          <div id="image-preview_1" class="image-preview mx-image-preview" >

                                            <label for="image-upload_1" id="image-label_1">{{__('Image ici')}}</label>
                                            <input id="image-upload_1" type="file" class=" @error('img_1') is-invalid @enderror" name="img_1" value="/storage/{{ $car[0]->first_img }}"  autocomplete="img_1">

                                            @error('img_1')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                          <img id="img_top_1" src="/storage/{{ $car[0]->first_img }}" alt="img">
                                          </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-left col-12   mx-cap">{{ __('images secondaire 2') }}</label>
                                        <div class="col-sm-12 ">
                                          <div id="image-preview_2" class="image-preview mx-image-preview">
                                            <label for="image-upload_2" id="image-label_2">{{__('Image ici')}}</label>
                                            <input id="image-upload_2" type="file" class=" @error('img_2') is-invalid @enderror" name="img_2" value="/storage/{{ $car[0]->sec_img }}"  autocomplete="img_2">

                                            @error('img_2')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <img id="img_top_2" src="/storage/{{ $car[0]->sec_img }}" alt="img">
                                          </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-left col-12   mx-cap">{{ __('images secondaire 3') }}</label>
                                        <div class="col-sm-12 ">
                                          <div id="image-preview_3" class="image-preview mx-image-preview">
                                            <label for="image-upload_3" id="image-label_3">{{__('Image ici')}}</label>
                                            <input id="image-upload_3" type="file" class=" @error('img_3') is-invalid @enderror" name="img_3" value="{{ $car[0]->third_img }}"  autocomplete="img_3">

                                            @error('img_3')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <img id="img_top_3" src="/storage/{{ $car[0]->third_img }}" alt="img">
                                          </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-left col-12   mx-cap">{{ __('images secondaire 4') }}</label>
                                        <div class="col-sm-12 ">
                                          <div id="image-preview_4" class="image-preview mx-image-preview">
                                            <label for="image-upload_4" id="image-label_4">{{__('Image ici')}}</label>
                                            <input id="image-upload_4" type="file" class=" @error('img_4') is-invalid @enderror" name="img_4" value="{{ $car[0]->fourth_img }}"  autocomplete="img_4">

                                            @error('img_4')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <img id="img_top_4" src="/storage/{{ $car[0]->fourth_img }}" alt="img">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  mt-0 ml-auto">
                                        <button class="btn btn-primary" name="create_car">{{__('Modifier')}}</button>
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
