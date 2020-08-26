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
                        @if($type_pro == "immobilier_v")
                        @php
                            $url = 3;
                        @endphp
                        @elseif($type_pro == "immobilier_loc")
                        @php
                            $url = 1
                        @endphp
                        @endif
                        <a href="{{route('immobilier.show',['lang'=> app()->getLocale(),'mycategorie'=> $url,'type'=> $immo[0]->id_type])}}" class="btn btn-primary btn-wide">{{__("retour au choix des immobiliers")}}</a>
                    </div>
            </div>

        </div>

    </div>
</div>
@endsection
