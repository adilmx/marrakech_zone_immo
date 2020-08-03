<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Fav and Touch Icons -->
    <title>Marrakech Zone Immo</title>
    <link rel="shortcut icon" href="{{ asset('/') }}images/ico/logo-zh-tours.png">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('/') }}node_modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}assetsAdmin/css/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}assetsAdmin/css/components.css">
</head>

<body style="background-image: url('/images/bg/annie-spratt-IDdpNyXPEjg-unsplash.jpg');background-position:center;background-size:cover">
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

                        <div class="card card-primary" style="opacity: 100%;">
                            <div class="login-brand">
                                <img src="{{ asset('/') }}images/ico/logo-zh-tours.png" alt="logo" width="250" class="shadow-light">
                            </div>

                            <div class="card-header">
                                <h4>{{__('Connexion')}}</h4>

                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}" class="needs-validation">
                                    @csrf
                                    @if($errors->any())
   <ul class="alert alert-danger" role="alert">
      @foreach ($errors->all() as $error)
           <li >{{ $error }}</li>
       @endforeach
    </ul>@endif
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>



                         </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">{{__('Mot de passe')}}</label>

                                            @if (Route::has('password.request'))
                                            <div class="float-right">
                                                <a href="{{route('password.forget')}}" class="text-small">
                                                    {{__('Mot de passe oublié?')}}
                                                </a>
                                            </div>
                                            @endif


                                        </div>
                                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>


                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                            <label class="custom-control-label" for="remember-me">{{__('Se souvenir de moi')}}</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            {{__('Connexion')}}
                                        </button>
                                    </div>
                            </div>
                            </form>


                        </div>
                        <div class="simple-footer" style="COLOR:white">
                        Copyright &copy; ZH 2020
                    </div>
                    </div>


                </div>
            </div>
    </div>
    </section>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="assetsAdmin/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="assetsAdmin/js/scripts.js"></script>
    <script src="assetsAdmin/js/custom.js"></script>

    <!-- Page Specific JS File -->
</body>

</html>
