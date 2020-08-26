
@extends('layouts.admin')
@section('section-search')

<div class="form-inline mr-auto">
  <ul class="navbar-nav mr-3">
    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
  </ul>
</div>
@endsection

@section('content')


<button class="btn btn-primary" id="swal-2" style="display:none;">Launch</button>

<button class="btn btn-primary" id="swal-4" style="display:none;">Launch</button>


@if(isset($update_success))
<script>
      window.onload=function(){
        document.getElementById("swal-2").click();
    }</script>
@endif

@if(isset($empty) && $empty==1)

<script>
    window.onload=function(){
        document.getElementById("swal-4").click();
    }



</script>
@endif
 @if(isset($success)==1)

<script>
    window.onload=function(){
        document.getElementById("swal-2").click();
    }



</script>
@endif

<div class="section">

<div class="section-header">
<a href="#" onclick="goBack()" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>

<h1>Liste des immobiliers :&nbsp;&nbsp;&nbsp;{{ $lib_type }} </h1>
<div class="article-cta section-header-breadcrumb">
                      <a href="{{route('immobilier.indexCreate')}}" class="btn btn-primary m-auto">{{__('Créer une fiche immobilier')}}</a>
                    </div>
</div>
<div class="row">
@if(count($immos)>0)
    @foreach($immos as $immo)
    <div class="col-12 col col-sm-6 col-md-6 col-lg-3">

        <div class="card card-danger">
            <div class="card-header">

                <div class="card-header-action">

                    <div class="dropdown text-center">
                        <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle pull-right">Options</a>
                        <div class="dropdown-menu">
                             <a href="{{route('admin.immobilier.indexUpdate',['immobilier'=>$immo->id])}}" class="dropdown-item has-icon"><i class="far fa-edit"></i>Modifier/Voir</a>
                            <div class="dropdown-divider"></div>
                            {{-- <a id="deleteMe" href="{{route('admin.immo.delete',['immobilier'=>$immo->id])}}" style="display:none" class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt"></i> Supprimer</a> --}}

                            <a class="btn btn-danger"   data-confirm="Sur?|Est ce que vous voulez vraiment supprimer cet immobilier?" data-confirm-yes="location.href = '{{route('admin.immo.delete',['immobilier'=>$immo->id])}}'">Supprimer</a>
                             {{-- <a class="btn btn-danger"   data-confirm="Sur?|Est ce que vous voulez vraiment supprimer cet immobilier?" data-confirm-yes="goToLink();">Supprimer</a>
                            <script>
                                function goToLink(){
                                  document.getElementById("deleteMe").click();
                                }
                            </script> --}}
                         </div>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <article class="article article-style-b">
                    <div class="article-header">
                        <div class="article-image" style="background-image: url(/storage/{{$immo->pic_src}});">
                        </div>
                    </div>
                    <div class="article-details">
                        <div class="article-title text-center">
                            <h2><a href="#"> {{$immo->designation}}</a></h2>
                        </div>

                        <!-- <div class="article-cta">
                            <a href="#">{{__('Plus de détails')}} <i class="fas fa-chevron-right"></i></a>
                        </div> -->
                    </div>
                </article>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>

@endif
@endsection
