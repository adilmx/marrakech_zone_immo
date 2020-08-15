@extends('layouts.admin')

@section('section-search')

        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control"  placeholder="{{__('Chercher')}}" aria-label="Search" data-width="250">
            <button class="btn"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>

          </div>
          <button class="btn btn-all-mx display-wd">{{__('Afficher touts')}}</button>
        </div>
@endsection

@section('content')
<div class="section">
<div class="section-header">
@if (count($cars_s) >= 1)
@foreach ($cars_s as $key=>$car)
 @php
   $categorie_id = $car->categorie_id ;
 @endphp
@endforeach
@if($categorie_id == 1)
 <h1>{{__('Liste des voitures de luxe')}}</h1>
 @else
 <h1>{{__('Liste des voitures de transport touristique')}}</h1>
 @endif
 @else
 <h1>{{__('pas de voiture inserée! vous pouvez creer une!')}}</h1>
@endif
<div class="article-cta section-header-breadcrumb">
                      <a href="{{route('car.create')}}" class="btn btn-primary m-auto">{{__('Creer une fiche de voiture')}}</a>
                    </div>
</div>
<div class="section-body">
      <div class="row">
      @if(isset($cars_s))
        @foreach ($cars_s as $key=>$car)
          {{-- start widget --}}
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mxd-1">
                <article class="article">
                  <div class="article-header">
                    <div class="article-image" data-background="/storage/{{ $car->pic_src }}">
                    </div>

                  </div>
                  <div class="article-details mxd-2">
                      <a class="mxd-3">{{ $car->libelle }}</a>
                    <div class="article-cta">
                      <a href="{{ route('car.edit',['car' => $car->id]) }}" class="btn btn-primary">{{ __('Modifier') }}</a>
                      <button class="btn btn-danger" data-confirm="{{__('Suppréssion de')}} {{$car->libelle}}?|{{__('voulez vous vraiment supprimer ce produit')}}?" data-confirm-yes="location.href = '{{ route('car.delete',['car' => $car->id]) }}'">{{ __('Supprimer') }}</button>
                    </div>
                  </div>
                </article>
            </div>
            {{-- end widget --}}
       @endforeach
@endif
            </div>
</div>
@endsection
