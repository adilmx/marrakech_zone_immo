@extends('layouts.admin')

@section('section-search')

        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </div>
@endsection

@section('content')
@if(!empty(Session::get('msg')))

<script>
  
	swal('Good Job', 'You clicked the button!', 'success');
 
</script>
@endif
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
                    <h4>{{__('Reservations et demandes')}}</h4>
                  </div>
                  <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab5" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="item-tab1" data-toggle="tab" href="#item1" role="tab" aria-controls="item" aria-selected="true">
                              <i class="fas fa-home"></i> confirmation des biens crées</a>
                          </li>
                      <li class="nav-item">
                        <a class="nav-link" id="home-tab5" data-toggle="tab" href="#home5" role="tab" aria-controls="home" aria-selected="true">
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
                        <div class="tab-pane fade show active" id="item1" role="tabpanel" aria-labelledby="item-tab1">
                            {{-- start  --}}
                            <div class="">
                  <div class="card">
                    <div class="card-header">
                      <h4>{{__('Demandes de creations des biens')}}</h4>
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
                              <th>nom immobilier</th>
                              <th>type</th>
                              <th>adresse</th>
                              <th>superfecie(m<sup>2</sup>)</th>
                              <th>patente</th>
                              <th>nombres de chambres</th>
                              <th>nombres d'etages</th>
                              <th>prix de vente($)</th>
                              <th>date de demande</th>
                              <th>images(cliquer pour mode plein ecran)</th>
                              <th>confirmée</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($immobiliers_nc as $immobilier)
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
                              <td> {{$immobilier->lib}}</td>
                              <td>adresse</td>
                              <td>{{$immobilier->superfecie}}</td>
                              <td>{{$immobilier->patente}}</td>
                              <td>{{$immobilier->nbr_chambre}}</td>
                              <td>{{$immobilier->nbr_etage}}</td>
                              <td>{{$immobilier->price_max}}</td>
                              <td>
                              {{$immobilier->immo_created_at}}
                              </td>
                              <td>
                              <div class="col-12 col-sm-6 col-lg-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Gallerie</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="gallery">
                                        <div class="gallery-item gallery-more" data-image="{{ asset('/') }}storage/{{ $immobilier->pic_src }}" data-title="Image 1">
                                            <div>+5</div>
                                        </div>
                                        <div class="gallery-item gallery-hide" data-image="{{ asset('/') }}storage/{{ $immobilier->first_img }}" data-title="Image 2"></div>
                                        <div class="gallery-item gallery-hide" data-image="{{ asset('/') }}storage/{{ $immobilier->sec_img }}" data-title="Image 3"></div>
                                        <div class="gallery-item gallery-hide" data-image="{{ asset('/') }}storage/{{ $immobilier->third_img }}" data-title="Image 4"></div>
                                        <div class="gallery-item gallery-hide" data-image="{{ asset('/') }}storage/{{ $immobilier->fourth_img }}" data-title="Image 5"></div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                              </td>
                              <td>
                              @if($immobilier->validated == 1)
                                    <button class="btn btn-success btn-mx-ck" data_id="{{$immobilier->immobilier_id}}" data_type="4">{{ __('oui') }}</button>
                                    @else
                                    <button class="btn btn-danger btn-mx-ck" data_id="{{$immobilier->immobilier_id}}" data_type="4">{{ __('non') }}</button>
                                @endif
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
                      <div class="tab-pane fade show" id="home5" role="tabpanel" aria-labelledby="home-tab5">
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
                          <th>action</th>
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
                          <td>

                          <button class="btn btn-danger" data-confirm="{{__('Suppréssion de redervation de ')}} {{$immobilier->first_name}} {{$immobilier->last_name}}?|{{__('voulez vous vraiment supprimer cette redervation')}}?" data-confirm-yes="location.href = '{{ route('reservationIV.delete', ['reservation' => $immobilier->res_id]) }}'">{{ __('Supprimer') }}</button>

                          </td>
                          {{-- <td>
                          @if($immobilier->deleted == 1)
                                <button class="btn btn-success btn-mx-ck" data_id="{{$immobilier->id}}" data_type="1">{{ __('Oui') }}</button>
                                @else
                                <button class="btn btn-danger btn-mx-ck" data_id="{{$immobilier->id}}" data_type="1">{{ __('non') }}</button>
                            @endif
                          </td> --}}

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
                          <th>action</th>
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
                          <td>
                            <button class="btn btn-danger" data-confirm="{{__('Suppréssion de redervation de ')}} {{$immobilier->first_name}} {{$immobilier->last_name}}?|{{__('voulez vous vraiment supprimer cette reservation')}}?" data-confirm-yes="location.href = '{{ route('reservationIL.delete', ['reservation' => $immobilier->res_id]) }}'">{{ __('Supprimer') }}</button>

                          </td>
                          {{-- <td>
                            @if($immobilier->categorie == 2)
                                <button class="btn btn-success btn-mx-ck" data_id="{{$immobilier->id}}" data_type="2">{{ __('Oui') }}</button>
                                @else
                                <button class="btn btn-danger btn-mx-ck" data_id="{{$immobilier->id}}" data_type="2">{{ __('non') }}</button>
                            @endif
                            </td> --}}
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
                          <th>action</th>
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
                          <td>

                            <button class="btn btn-danger" data-confirm="{{__('Suppréssion de redervation de ')}} {{$car->first_name}} {{$car->last_name}}?|{{__('voulez vous vraiment supprimer cette reservation')}}?" data-confirm-yes="location.href = '{{ route('reservationC.delete', ['reservation' => $car->res_id]) }}'">{{ __('Supprimer') }}</button>

                          </td>  {{-- <td>
                          @if($car->deleted == 1)
                                <button class="btn btn-success btn-mx-ck" data_id="{{$car->id}}" data_type="3">{{ __('Oui') }}</button>
                                @else
                                <button class="btn btn-danger btn-mx-ck" data_id="{{$car->id}}" data_type="3">{{ __('non') }}</button>
                            @endif
                          </td> --}}
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


$(".btn-mx-ck").click(function(event){
         var id =  event.target.getAttribute("data_id");
         var type =  event.target.getAttribute("data_type");

        $.ajax({
            headers: {
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            },
            url: "/admin/ajax",
            type: "POST",
            dataType: 'json',
            data: { id : id , type : type },
            success: function(data)
            {
                if(data.res == 1){
                    event.target.classList.remove("btn-danger");
                    event.target.classList.add("btn-success");
                    event.target.innerHTML = "oui";
                }else{
                    event.target.classList.remove("btn-success");
                    event.target.classList.add("btn-danger");
                    event.target.innerHTML = "non";
                }

            }
        });
        });
  </script>

@endsection
