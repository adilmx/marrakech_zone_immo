@extends('layouts.admin')

@section('content')
  <section class="section">
          <div class="section-header">
            <h1>{{__('Tableau de bords')}}</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>{{ __("Nombres d'utilisateurs")}}</h4>
                  </div>
                  <div class="card-body">
                    {{$customers_count}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>{{ __("Nombres de reservations")}}</h4>
                  </div>
                  <div class="card-body">
                    {{$reservation_total_count}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-car"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>{{ __("Nombres de voiture")}}</h4>
                  </div>
                  <div class="card-body">
                    {{$cars_count}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-home"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>{{__("Nombres d'immobiliers")}}</h4>
                  </div>
                  <div class="card-body">
                    {{$immobiliers_count}}
                  </div>
                </div>
              </div>
            </div>
          </div>

          

            <div class="">
              <div class="">
                <div class="card">
                  <div class="card-header">
                    <h4>{{__('Reservations')}}</h4>
                  </div>
                  <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab5" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab5" data-toggle="tab" href="#home5" role="tab" aria-controls="home" aria-selected="true">
                          <i class="fas fa-home"></i> immobiliers(ACHAT/VENTES)</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab5" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile" aria-selected="false">
                          <i class="fas fa-home"></i> immobiliers(LOCATION)</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab5" data-toggle="tab" href="#contact5" role="tab" aria-controls="contact" aria-selected="false">
                          <i class="fas fa-car"></i> véhicules</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent5">
                      <div class="tab-pane fade show active" id="home5" role="tabpanel" aria-labelledby="home-tab5">
                        {{-- start  --}}
                        <div class="">
              <div class="card">
                <div class="card-header">
                  <h4>{{__('Reservations des immobiliers(ACHAT/VENTES)')}}</h4>
                  {{-- <div class="card-header-action">
                    <a href="#" class="btn btn-primary">View All</a>
                  </div> --}}
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped mb-0">
                      <thead>
                      
                        
                      
                        <tr>
                          <th>id</th>
                          <th>nom</th>
                          <th>prenom</th>
                          <th>email</th>
                          <th>tele</th>
                          <th>produit</th>
                          <th>date reservation</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($reservation_ventes as $immobilier)
                        <tr>
                          <td>
                            {{$immobilier->id}}
                          </td>
                          <td>
                          {{$immobilier->last_name}}
                          </td>
                          <td>
                          {{$immobilier->first_name}}
                          </td>
                          <td>
                          {{$immobilier->email}}
                          </td>
                          <td>
                          {{$immobilier->tele}}
                          </td>
                          <td>
                          {{$immobilier->designation}}
                          </td>
                          <td>
                          {{$immobilier->res_created_at}}
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
                        {{-- end  --}}
                      </div>
                      <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab5">
                        {{-- start  --}}
                        <div class="">
              <div class="card">
                <div class="card-header">
                  <h4>{{__('Reservations des immobiliers(Location)')}}</h4>
                  {{-- <div class="card-header-action">
                    <a href="#" class="btn btn-primary">View All</a>
                  </div> --}}
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped mb-0">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>nom</th>
                          <th>prenom</th>
                          <th>email</th>
                          <th>tele</th>
                          <th>nombres de personnes</th>
                          <th>produit</th>
                          <th>patente</th>
                          <th>date reservation</th>
                          <th>date debut</th>
                          <th>date fin</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($reservation_locations as $immobilier)
                        <tr>
                          <td>
                            {{$immobilier->id}}
                          </td>
                          <td>
                          {{$immobilier->last_name}}
                          </td>
                          <td>
                          {{$immobilier->first_name}}
                          </td>
                          <td>
                          {{$immobilier->email}}
                          </td>
                          <td>
                          {{$immobilier->tele}}
                          </td>
                          <td>
                          {{$immobilier->nbr_personnes}}
                          </td>
                          <td>
                          {{$immobilier->designation}}
                          </td>
                          <td>
                          {{$immobilier->patente}}
                          </td>
                          <td>
                          {{$immobilier->res_created_at}}
                          </td>
                          <td>
                          {{$immobilier->date_debut_reservation}}
                          </td>
                          <td>
                          {{$immobilier->date_fin_reservation}}
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
                        {{-- end  --}}
                         </div>
                      <div class="tab-pane fade" id="contact5" role="tabpanel" aria-labelledby="contact-tab5">
                        {{-- start  --}}
                        <div class="">
               <div class="card">
                <div class="card-header">
                  <h4>{{__('Reservations des véhicules')}}</h4>
                  {{-- <div class="card-header-action">
                    <a href="#" class="btn btn-primary">View All</a>
                  </div> --}}
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped mb-0">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>nom</th>
                          <th>prenom</th>
                          <th>email</th>
                          <th>tele</th>
                          <th>produit</th>
                          <th>date reservation</th>
                          <th>date debut</th>
                          <th>date fin</th>
                          <th>avec chauffeur</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($reservation_cars as $car)
                        <tr>
                          <td>
                            {{$car->id}}
                          </td>
                          <td>
                          {{$car->last_name}}
                          </td>
                          <td>
                          {{$car->first_name}}
                          </td>
                          <td>
                          {{$car->email}}
                          </td>
                          <td>
                          {{$car->tele}}
                          </td>
                          <td>
                          {{$car->libelle}}
                          </td>
                          <td>
                          {{$car->res_created_at}}
                          </td>
                          <td>
                          {{$car->date_debut_reservation}}
                          </td>
                          <td>
                          {{$car->date_fin_reservation}}
                          </td>
                          <td>
                          @if($car->car_driver == 1)
                            @php
                              $cd = 'oui';
                            @endphp
                            @else
                            @php
                              $cd = 'non';
                            @endphp
                          @endif
                          {{$cd}}
                          </td>
                        </tr>
                       @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
                        {{-- end  --}}
                        </div>
                    </div>
                  </div>
                </div>
              </div>
           </div>

           <div class="">
              <div class="">
                <div class="card">
                  <div class="card-header">
                    <h4>{{__('Repartition de resarvations sur les produits')}}</h4>
                  </div>
                  <div class="card-body">
                    <canvas id="myChart3"></canvas>
                  </div>
                </div>
              </div>
            </div>


            
          </div>
          
          
        </section>
@endsection
@section('script-details-car')

  <!-- JS Libraies -->
  <script src="{{ asset('/') }}node_modules/chart.js/dist/Chart.min.js"></script>
  <script>
  var ctx = document.getElementById("myChart3").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    datasets: [{
      data: [
        {{$reservation_cars_count}},
        {{$reservation_ventes_count}},
        {{$reservation_locations_count}},
      ],
      backgroundColor: [
        '#ffa426',
        '#fc544b',
        '#6777ef',
      ],
      label: 'Dataset 1'
    }],
    labels: [
      'véhicules',
      'immobilier(Achat/vente)',
      'immobilier(location)'
    ],
  },
  options: {
    responsive: true,
    legend: {
      position: 'bottom',
    },
  }
});
  </script>

@endsection