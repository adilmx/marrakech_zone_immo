<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta content="{{ csrf_token() }}" name="csrf-token">

  
  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
   
  <script src="{{url('node_modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<link rel="stylesheet" href="{{url('node_modules/bootstrap-daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{url('node_modules/dropzone/dist/min/dropzone.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ url('node_modules/summernote/dist/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ url('node_modules/selectric/public/selectric.css') }}">
  <link rel="stylesheet" href="{{ url('node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">


  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('/') }}node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="{{ asset('/') }}node_modules/selectric/public/selectric.css">
  <link rel="stylesheet" href="{{ asset('/') }}node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">


  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('/') }}node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="{{ asset('/') }}node_modules/selectric/public/selectric.css">
  <link rel="stylesheet" href="{{ asset('/') }}node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
  
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('/') }}node_modules/chocolat/dist/css/chocolat.css">

	<!-- Fav and Touch Icons -->
    <title>Marrakech Zone Immo</title>
	<link rel="shortcut icon" href="{{ url('images/ico/logo-zh-tours.png') }} ">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('/') }}assetsAdmin/css/style.css">
  <link rel="stylesheet" href="{{ asset('/') }}assetsAdmin/css/components.css">


	<!-- Add your style -->
  <link rel="stylesheet" href="{{ asset('/') }}assetsAdmin/css/custom.css">
</head>

	<!-- Add your style -->
  <link rel="stylesheet" href="{{ url('assetsAdmin/css/custom.css') }}">
</head>
 
<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar mx-flex-right">
      {{-- only on products --}}
      @yield('section-search')
        {{-- end only on products --}}
        <ul class="navbar-nav navbar-right">
          
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <div class="d-sm-none d-lg-inline-block">{{ __('Bonjour')}} Admin</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <!-- <div class="dropdown-title">Logged in 5 min ago</div> -->
              <a href="{{route('admin.edit.profile')}}" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>

              <a href="{{route('admin.settings')}}" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Paramétres
              </a>
              <div class="dropdown-divider"></div>
              <form method="post" action="{{route('logout')}}">
              @csrf
              <button type="submit" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
</button>
              </form>
            </div>
          </li>
        </ul>
    </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{route('admin.index')}}"><img src="{{ asset('/') }}images/ico/logo-zh-tours-mx.png" alt="Logo" style="width: 70%;
    height: auto;" />
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{route('admin.index')}}">MZI</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">{{ __('Tableau de bord') }}</li>
              <li class="nav-item dropdown active">
                <a href="{{ route('admin.index') }}" class="nav-link "><i class="fas fa-fire"></i><span>{{ __('Tableau de bord') }}</span></a>
              </li>

              <li class="menu-header">{{ __('Accueil') }}</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-th-large"></i><span>{{ __('Accueil') }}</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{route('homeCarasoul.create')}}">{{ __('Diaporama') }}</a></li>
                  <li><a class="nav-link" href="{{route('homeSections.create')}}">{{ __('Sections') }}</a></li>
                  <li><a class="nav-link" href="{{route('homeInfos.create')}}">{{ __('Infos et réseau sociaux') }}</a></li>
                </ul>
              </li>

              <li class="menu-header">{{ __('Produits') }}</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-car"></i><span>{{ __('Véhicules') }}</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{route('adminCar.index',['categorie'=>'1'])}}">{{ __('Voitures de Luxe ') }}</a></li>
                  <li><a class="nav-link" href="{{route('adminCar.index',['categorie'=>'2'])}}">{{ __('Transport touristique') }}</a></li>
                </ul>
              </li>
              <li class="menu-header"></li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-home"></i><span>{{ __('Immobiliers') }}</span></a>
                <ul class="dropdown-menu">
                @php $types=Session::get('types_immo')
                 @endphp

                @foreach( $types as $type)
                  <li><a class="nav-link" href="{{route('admin.immobilier',['categorie'=>$type->id])}}">{{ __($type->lib) }}</a></li>
                @endforeach

               
             
                </ul>
              </li>

              <li class="menu-header">{{ __('Paramètre') }}</li>
              <li class="nav-item dropdown ">
                <a href="{{route('admin.settings')}}" class="nav-link "><i class="fas fa-cog"></i><span>{{ __('Paramètre') }}</span></a>
              </li>

            </ul>


        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 <div class="bullet"></div> Marrakech Zone Immo
        </div>
        <div class="footer-right">
          ---
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('/') }}assetsAdmin/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('/') }}node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
  <script src="{{ asset('/') }}node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="{{ asset('/') }}node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="{{ asset('/') }}node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="{{ asset('/') }}node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="{{ asset('/') }}node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <script src="{{ asset('/') }}node_modules/selectric/public/jquery.selectric.min.js"></script>
  <script src="{{ asset('/') }}node_modules/jquery_upload_preview/assets/js/jquery.uploadPreview.js"></script>
  <script src="{{ asset('/') }}node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

  <script src="{{ asset('/') }}node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>


<!-- JS Libraies -->
  <script src="{{ asset('/') }}node_modules/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Template JS File -->
  <script src="{{ asset('/') }}assetsAdmin/js/scripts.js"></script>
  <script src="{{ asset('/') }}assetsAdmin/js/custom.js"></script>


  <!-- Page Specific JS File -->{{--
  <script src="{{ asset('/') }}assetsAdmin/js/page/index-0.js"></script> --}}
  <script src="{{ asset('/') }}assetsAdmin/js/page/features-post-create.js"></script>
  <script src="{{ asset('/') }}assetsAdmin/js/page/modules-sweetalert.js"></script>

  @yield('script-details-car')
  <script>
function goBack() {
  window.history.back();
}
</script>
 @yield('myscripts')
</body>
</html>
