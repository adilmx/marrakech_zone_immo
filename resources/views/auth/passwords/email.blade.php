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
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assetsAdmin/css/style.css">
    <link rel="stylesheet" href="assetsAdmin/css/components.css">
</head>

<body style="background-image: url('/images/bg/annie-spratt-IDdpNyXPEjg-unsplash.jpg');background-position:center;background-size:cover">
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('réinitiqlisqtion de mot de passe') }}</div>

                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form method="POST" action="{{ route('password.send') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                @if(session('error'))
                                                <div>
                                                    {{__('email introuvable verifier à nouveau votre email saisie!')}}
                                                </div>
                                                <!-- Core JS -->
                                                    <script type="text/javascript" src="{{ asset('/') }}js/jquery.min.js"></script>
                                                    <script type="text/javascript" src="{{ asset('/') }}bootstrap/js/bootstrap.min.js"></script>
                                                <script>
                                                $(document).ready(function(){
                                                    swal("{{__('Email introuvable!')}}", "{{__('email introuvable verifier à nouveau votre email saisie!')}}", "error");
                                                });
					
					                            </script>
                                                @endif
                                                @if(session('success'))
                                                    <div>
                                                        {{__('message envoyée avec succssée veuillez vérifier votre inbox (ou spam) de votre email !')}}
                                                    </div>
                                                    <!-- Core JS -->
                                                    <script type="text/javascript" src="{{ asset('/') }}js/jquery.min.js"></script>
                                                    <script type="text/javascript" src="{{ asset('/') }}bootstrap/js/bootstrap.min.js"></script>
                                                <script>
                                                $(document).ready(function(){
                                                    swal("{{__('Message envoyé')}} !", "{{__('message envoyée avec succssée veuillez vérifier votre inbox (ou spam) de votre email !')}}", "success");
                                                });
                                                                    
                                                                    </script>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('envoyer') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
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

    <!-- JS Libraies -->
  <script src="{{ asset('/') }}node_modules/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('/') }}assets/js/page/modules-sweetalert.js"></script>
</body>

</html>

