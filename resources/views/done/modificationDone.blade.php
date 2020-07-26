@extends('layouts.admin')

@section('content')
<div class="container" >
    <div class="pt-50 pb-50">

        <div class="container">

            <div class="create-done-wrapper">

                <div class="">

                    <div class="">

                        <div class="icon">
                            <div class="icon-inner">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>

                        <h1 class="text-lowercase">Félicitations!</h1>
                        <p class="lead">Votre {{ $lib }} a bien été modifie</p>
                        <h3>vous pouvez verifier votre modification</h3>
                        <a href="{{$url}}" class="btn btn-primary btn-wide">verifier ici</a>
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>
@endsection
