<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">


  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('/') }}node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="{{ asset('/') }}node_modules/selectric/public/selectric.css">
  <link rel="stylesheet" href="{{ asset('/') }}node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

	<!-- Fav and Touch Icons -->
    <title>Marrakech Zone Immo</title>
	<link rel="shortcut icon" href="{{ asset('/') }}images/ico/logo-zh-tours.png">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('/') }}assetsAdmin/css/style.css">
  <link rel="stylesheet" href="{{ asset('/') }}assetsAdmin/css/components.css">


	<!-- Add your style -->
  <link rel="stylesheet" href="{{ asset('/') }}assetsAdmin/css/custom.css">
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
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ asset('/') }}assetsAdmin/img/avatar/avatar-1.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ asset('/') }}assetsAdmin/img/avatar/avatar-2.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Dedik Sugiharto</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ asset('/') }}assetsAdmin/img/avatar/avatar-3.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ asset('/') }}assetsAdmin/img/avatar/avatar-4.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ asset('/') }}assetsAdmin/img/avatar/avatar-5.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b>
                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to Stisla template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
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
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-home"></i><span>{{ __('Immobiliers') }}</span></a>
                <ul class="dropdown-menu">
                @if(isset($types_immo))

                @foreach($types_immo as $type)
                  <li><a class="nav-link" href="layout-default.html">{{ __($type->lib) }}</a></li>
                @endforeach


                @endif
                </ul>
              </li>

              <li class="menu-header">{{ __('Paramétre') }}</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link " data-toggle="dropdown"><i class="fas fa-cog"></i><span>{{ __('Paramétre') }}</span></a>

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


<!-- JS Libraies -->
  <script src="{{ asset('/') }}node_modules/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Template JS File -->
  <script src="{{ asset('/') }}assetsAdmin/js/scripts.js"></script>
  <script src="{{ asset('/') }}assetsAdmin/js/custom.js"></script>


  <!-- Page Specific JS File -->{{--
  <script src="{{ asset('/') }}assetsAdmin/js/page/index-0.js"></script> --}}
  <script src="{{ asset('/') }}assetsAdmin/js/page/features-post-create.js"></script>

  @yield('script-details-car')
</body>
</html>
