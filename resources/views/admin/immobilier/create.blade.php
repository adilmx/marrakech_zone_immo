@extends('layouts.admin')
@section('section-search')

        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </div>
@endsection
@section('content')

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
<section class="section">
    <div class="section-header">
        <div class="section-header-back">


            <a href="#" onclick="goBack()" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Créer une fiche immobilier</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Tableau de bord</a></div>
            <div class="breadcrumb-item"><a href="#">Immobiliers</a></div>
            <div class="breadcrumb-item">Créer une fiche immobilier</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Créer un nouveau immobilier</h2>
        <p class="section-lead">
            Dans cette page vous pouvez créer votre immobilier en remplissant les champs suivants. </p>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Insérer votre immobilier</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('immobilier.create')}}" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Catégorie</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control selectric" id="myCat" name="mycategorie" required onchange="callme2();">
                                        <option value="3">Immobilier pour vente</option>
                                        <option value="1">Immobilier pour location</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control selectric" id="mytype" name="type" onchange="callme();" >
                                        @php $types=Session::get('types_immo')
                                        @endphp

                                        @foreach( $types as $type)
                                        <option>{{ $type->lib }}</option>

@endforeach
                                        <option value="...">Autre</option>

                                    </select>
                                    <input id="type_sub" type="text" class="form-control"   hidden>

                                    <script>
                                        function callme() {
                                            var selectVal = $("#mytype").val();

                                            if (selectVal == "...") {

                                                $("#type_sub").prop("hidden", false);
                                            } else {
                                                $("#type_sub").prop("hidden", true);
                                            }
                                            $("#type_sub").val($("#mytype").val());
                                            if(selectVal=="Terrain"){
                                            document.getElementById("nbr_chbr").disabled = true;
                                             document.getElementById("nbr_chbr").value=0;

                                            document.getElementById("nbr_etg").disabled = true;
                                            document.getElementById("nbr_etg").value=0;

                                            document.getElementById("prix_min").disabled = true;
                                            document.getElementById("prix_min").value=0;


                                            document.getElementById("date_sep").disabled = true;
                                            document.getElementById("date_sep").value=0;

                                            document.getElementById("superficie_psc").disabled = true;
                                            document.getElementById("superficie_psc").value=0;


                                          }
                                          else{
                                            document.getElementById("nbr_chbr").disabled =false;
                                            document.getElementById("nbr_chbr").value=0;

                                            document.getElementById("nbr_etg").disabled =false;
                                            document.getElementById("nbr_etg").value=0;

                                            document.getElementById("prix_min").disabled =false;
                                            document.getElementById("prix_min").value=0;


                                            document.getElementById("date_sep").disabled =false;
                                            document.getElementById("date_sep").value=0;

                                            document.getElementById("superficie_psc").disabled =false;
                                            document.getElementById("superficie_psc").value=0;

                                          }

                                        // alert('hello');

                                        }
                                        function callme2() {
                                            var selectVal = $("#myCat").val();

                                            
                                            if(selectVal== 3){

                                            document.getElementById("prix_min").disabled = true;
                                            document.getElementById("prix_min").value=0;


                                            document.getElementById("date_sep").disabled = true;
                                            document.getElementById("date_sep").value=0;


                                          }
                                          else{

                                            document.getElementById("prix_min").disabled =false;
                                            document.getElementById("prix_min").value=0;


                                            document.getElementById("date_sep").disabled =false;
                                            document.getElementById("date_sep").value=0;

                                          }

                                        // alert('hello');

                                        }
                                        $(document).ready(function(){
                                            callme();
                                        });
                                    </script>

                                </div>
                            </div>


                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Désignation</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" required>
                                    @error('designation')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                   @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Patente</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="patente" required>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Superficie (en m²) </label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="superficie" required>
                                    @if(isset($msgErr2))
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $msgErr }}</strong>
                                                </span>
                                     @endif
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Superficie piscine (en m²) </label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="superficie_psc" id="superficie_psc" required>
                                    @if(isset($msgErr2))
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $msgErr }}</strong>
                                                </span>
                                     @endif
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date séparateur en (jours) </label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" min="0"  class="form-control" name="date_sep" id="date_sep" required>
                                </div>
                            </div>


                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Adresse</label>
                                <div class="col-sm-12 col-md-7">
                                <textarea class="form-control" required name="adresse"></textarea>

                                 </div>
                            </div>



                            <div class="form-inline form-group row mb-4">
                                <label class=" col-form-label text-md-right col-12 col-md-3 col-lg-3" for="inlineFormInputName2">Nombre d'étage</label>
                                <input type="number" min="0" class="meri-number form-control mb-2 mr-sm-2" style="padding-left:15px !important;" id="nbr_etg" placeholder="1,2,3..." name="nbr_etage">

                                <label class="col-6 col-md-3 col-lg-3" for="inlineFormInputGroupUsername2">Nombre de chambre</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="number" min="0" class="meri-number form-control" name="nbr_chbr" id="nbr_chbr" placeholder="1,2,3..." required>
                                </div>
                            </div>

                        <!-- ce champ pour définir le temps separateur pour le prix -->
                        <!-- <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Patente</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" min="0" class="form-control" name="patente" required>
                                </div>
                            </div> -->


                        <div class="form-inline form-group row mb-4">
                                <label class=" col-form-label text-md-right col-12 col-md-3 col-lg-3" for="inlineFormInputName2">Prix Min ( en $)</label>

                                <input type="text" class="meri-number form-control mb-2 mr-sm-2" name="prix_min" id="prix_min" required>

                                <label class="col-6 col-md-3 col-lg-3" for="inlineFormInputGroupUsername2">Prix Max ( en $)</label>
                                <div class="input-group mb-2 mr-sm-2">

                                    <input type="text" class=" meri-number form-control" name="prix_max" id="prix_max" required>

                                    @if(isset($msgErr1))
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $msgErr }}</strong>
                                                </span>
                                     @endif
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image Source</label>
                                <div class="col-sm-12 col-md-7">
                                    <div id="image-preview" class="image-preview mx-image-preview">
                                        <label for="image-upload" id="image-label">Choisir une image</label>
                                        <input class="@error('image_src') is-invalid @enderror" type="file" name="image_src" id="image-upload" required/>
                                        @error('image_src')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                            </div>

                           <!--  start images secondaire -->
                           <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ __('images secondaire 1') }}</label>
                                        <div class="col-sm-12 col-md-7">
                                          <div id="image-preview_1" class="image-preview mx-image-preview">
                                            <label for="image-upload_1" id="image-label_1">Image ici</label>
                                            <input id="image-upload_1" type="file" class=" @error('img_1') is-invalid @enderror" name="img_1" value="{{ old('img_1') }}"  autocomplete="img_1">

                                            @error('img_1')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ __('images secondaire 2') }}</label>
                                        <div class="col-sm-12 col-md-7">
                                          <div id="image-preview_2" class="image-preview mx-image-preview">
                                            <label for="image-upload_2" id="image-label_2">Image ici</label>
                                            <input id="image-upload_2" type="file" class=" @error('img_2') is-invalid @enderror" name="img_2" value="{{ old('img_2') }}"  autocomplete="img_2">

                                            @error('img_2')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ __('images secondaire 3') }}</label>
                                        <div class="col-sm-12 col-md-7">
                                          <div id="image-preview_3" class="image-preview mx-image-preview">
                                            <label for="image-upload_3" id="image-label_3">Image ici</label>
                                            <input id="image-upload_3" type="file" class=" @error('img_3') is-invalid @enderror" name="img_3" value="{{ old('img_3') }}"  autocomplete="img_3">

                                            @error('img_3')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ __('images secondaire 4') }}</label>
                                        <div class="col-sm-12 col-md-7">
                                          <div id="image-preview_4" class="image-preview mx-image-preview">
                                            <label for="image-upload_4" id="image-label_4">Image ici</label>
                                            <input id="image-upload_4" type="file" class=" @error('img_4') is-invalid @enderror" name="img_4" value="{{ old('img_4') }}"  autocomplete="img_4">

                                            @error('img_4')
                                                <span class="invalid-feedback-mx" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                        </div>
                                    </div>
                           <!-- end images secondaire -->


                            <button class="btn btn-primary" name="swal3" id="swal-3" style="display: none;">Launch</button>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" class="btn btn-primary">Créer cet immobilier</button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</section>
@section('myscripts')
<script src="{{url('node_modules/dropzone/dist/min/dropzone.min.js')}}"></script>
<script src="{{url('assetsAdmin/js/page/forms-advanced-forms.js')}}"></script>
<script src="{{url('node_modules/selectric/public/jquery.selectric.min.js')}}"></script>
<script src="{{url('node_modules/jquery_upload_preview/assets/js/jquery.uploadPreview.min.js')}}"></script>
<script src="{{url('node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>

<script src="{{url('assetsAdmin/js/page/features-post-create.js')}}"></script>

<script src="{{url('assetsAdmin/js/page/components-multiple-upload.js')}}"></script>
@endsection

@endsection
