@extends('layouts.admin')

@section('content')
<div class="section">
<div class="section-header">
    
<h1>Liste des voitures </h1>
<div class="article-cta section-header-breadcrumb">
                      <a href="{{route('car.create')}}" class="btn btn-primary m-auto">Creer une fiche de voiture</a>
                    </div>
</div>
<div class="section-body">
      <div class="row">
        @foreach ($cars_s as $key=>$car)
          {{-- start widget --}}
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article">
                  <div class="article-header">
                    <div class="article-image" data-background="/storage/{{ $car->pic_src }}">
                    </div>

                  </div>
                  <div class="article-details">
                      <a>{{ $car->libelle }}</a>
                    <div class="article-cta">
                      <a href="{{ route('car.edit',['car' => $car->id]) }}" class="btn btn-primary">Modifier</a>
                      <button class="btn btn-danger" data-confirm="Suppréssion de {{$car->libelle}}?|voulez vous vraiment supprimer ce produit?" data-confirm-yes="location.href = '{{ route('car.delete',['car' => $car->id]) }}'">Supprimer</button>
                    </div>
                  </div>
                </article>
            </div>
            {{-- end widget --}}
       @endforeach

            </div>
</div>
@endsection
