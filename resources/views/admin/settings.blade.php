@extends('layouts.admin')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Profile</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{route('admin.index')}}">{{__('Tableau de bord')}}</a></div>
            <div class="breadcrumb-item">{{__('Compte')}}</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">{{__('Bonjour, Admin!')}} </h2>
        <p class="section-lead">
        {{__(' Vous pouvez changer vos informations sur cette page.')}}
        </p>

        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card profile-widget">
                    <div class="profile-widget-header">
                        <img alt="image" src="{{url('assetsAdmin/img/avatar/avatar-1.png')}}" class="rounded-circle profile-widget-picture">

                    </div>
                    <div class="profile-widget-description">


                    <div class="card-header">
                            <h4>{{__('Configure votre compte')}}</h4>

                        </div>
                        <div class="card-body">
                        @if(isset($message1))
                                    <span class="alert alert-danger col-md-12 col-12 col-sm-12" role="alert">
                                        <strong>{{ $message1 }}</strong>
                                    </span>
                                @endif
                                @if(isset($message2))
                                    <span class="alert alert-danger  col-md-12 col-12 col-sm-12" role="alert">
                                        <strong>{{ $message2 }}</strong>
                                    </span>
                                @endif
                                 @if(isset($message3))
                                    <span class="alert alert-danger  col-md-12 col-12 col-sm-12" role="alert">
                                        <strong>{{ $message3 }}</strong>
                                    </span>
                                @endif

                            <div class="row">


                                <div class="form-group col-md-6 col-12">
                              <br>

                            <label>{{__('Votre email')}}</label>
                                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" required="" disabled>

                                </div>

                            </div>
                            <div class="form-group col-md-6 col-12">
                            <form method="POST" action="{{ route('admin.password_reset') }}">
                        @csrf

                            <label>{{__('Mot de passe ancien')}}</label>
                                    <input  type="password" class="form-control" value="" name="old_passwd" required>


                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                <label>{{__('Nouveau mot de passe')}}</label>
                                    <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" value="" name="new_passwd"   required>



                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>{{__('Confirmer le nouveau mot de passe')}}</label>
                                    <input id="password-confirm" class="form-control" value="" name="confirmd_passwd" type="password"  required>
                                    <div class="invalid-feedback">
                                    {{__('   confirmer votre nouveau mot de passe')}}
                                    </div>
                                </div>

                            </div>


                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">{{__('Enregistrer les modifications')}}</button>
                        </div>

                    </form>
                     </div>
                    <div class="card-footer text-center">
                    <div class="simple-footer" style="COLOR:white">
                        Copyright &copy; ZH 2020
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-7">
                <div class="card">

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
