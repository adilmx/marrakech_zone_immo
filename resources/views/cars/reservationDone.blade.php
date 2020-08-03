@extends('layouts.app')

@section('content')
<div class="container mx-container-7" >
    <div class="pt-50 pb-50">

        <div class="container">

            <div class="create-done-wrapper">

                <div class="row">

                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                        <div class="icon">
                            <div class="icon-inner">
                                <i class="ti-check"></i>
                            </div>
                        </div>

                        <h1 class="text-lowercase">{{__('Félicitations!')}}</h1>
                        <p class="lead">{{__('Votre reservation a bien été crée')}}</p>
                        <h3>{{__('Merci pour votre confiance')}}</h3>
                        <a href="{{ route('car.index',['lang'=>app()->getLocale(),'categorie' => $data['c_id'] ]) }}" class="btn btn-primary btn-wide">{{__('choisir une autre voiture')}}</a>
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>
@endsection
