@extends('layouts.app')

@section('content')
<div class="container mx-container-1">
    <div class="breadcrumb-image-bg mx-breadcrumb-image-bg mx-bg" style="background-image: url('/storage/uploads-mx/bg-car.jpg')">

        <div class="container mx-container-4">

            <div class="page-title">

                <div class="mx-row row">

                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                        <div data-aos="zoom-out-left">
                        <h2>Voitures de luxe</h2>
                        <p>Les meilleurs voitures à choisir</p>
                    </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
<div class="pt-30 mx-pt-30 pb-50">

				<div class="container mx-container-2 ">

					<div class="trip-guide-wrapper">

						<div class="GridLex-gap-20 GridLex-gap-15-mdd GridLex-gap-10-xs">

							<div class="GridLex-grid-noGutter-equalHeight GridLex-grid-center">

                        @foreach ($cars_s as $key=>$car)
                                @php
                                    ++$key;
                                @endphp
                                @if($key < 5)
                                @php
                                    $style = "";
                                @endphp
                                @else
                                @php
                                    $style = "none";
                                @endphp
                                @endif

                                <!-- start car widget -->
								<div class="GridLex-col-3_mdd-4_sm-6_xs-6_xss-12_mx-widget " style="display:{{ $style }}" data-aos="fade-up" data-aos-duration="2000">

									<div class="mx-trip-guide-item trip-guide-item" >
                                     <a href="{{ route('car.show',['car' => $car->id]) }}">
										<div class="trip-guide-image mx-trip-guide-image" title="cliquez ici pour plus de details">
                                            <img src="/storage/{{ $car->pic_src }}" alt="images" />
                                        </div>
                                     </a>

										<div class="trip-guide-content mx-trip-guide-content">
											<h3>{{ $car->libelle }}</h3></div>

										<div class="trip-guide-bottom">
                                            <div class="trip-guide-person mx-trip-guide-person clearfix">
                                                      <i class="fas fa-car-side"> </i>
												<p class="name">Nombre de places : <span>{{ $car->nbr_place }}</span></p>
											</div>
                                            <div class="trip-guide-person mx-trip-guide-person-color mx-trip-guide-person clearfix">
												<i class="fas fa-palette color-ico"> </i>
                                                <p class="name color-txt">Couleur : </p>
                                                <div class="color-fill" style="background-color: {{ $car->couleur }}"></div>
											</div>
											<div class="trip-guide-person mx-trip-guide-person clearfix">
												<i class="fas fa-briefcase"> </i>
												<p class="name">charge maximale: <span>{{ $car->charge_max }}Kg</span></p>
											</div>
											<div class="row gap-10 mx-price">
												<div class="col-xs-12 col-sm-6">
													<div class="trip-guide-price">
														Á partir de
														<span class="number">{{ $car->prix_min_per_day }}$</span>
													</div>
												</div>
												<div class="col-xs-12 col-sm-6 text-right">
													<a href="{{ route('reservationCar.create',['car' => $car->id]) }}" class="btn btn-primary">Reserver</a>
												</div>
											</div>

										</div>

									</div>

								</div>
                            <!-- end car widget -->
                            @endforeach

							</div>

						</div>

					</div>

					<div class="pager-wrappper clearfix">

						<div class="pager-innner">

                                @foreach ($cars_s as $key=>$car)
                                @php
                                    ++$key;
                                @endphp
                                @endforeach
								<div class="clearfix">
									plus de {{ $key }} marques de voitures à choisir
								</div>

								<div class="clearfix">
									<nav class="pager-center">
										<ul class="pagination">
											<li>
												<a href="#" aria-label="Previous">
													<span aria-hidden="true">&laquo;</span>
												</a>
                                            </li>
                                            @php
                                                $counter_nbr = 0 ;
                                                $counter = 0 ;
                                            @endphp

                                            @foreach ($cars_s as $car)
                                            @php
                                                ++$counter;
                                                $cm = $counter%4 ;
                                            @endphp
                                            @if($cm == 1 or $counter == 1)
                                            @if($counter == 1)
                                            <li class="active"><a href="#">{{ ++$counter_nbr }}</a></li>
                                            @else
                                            <li><a href="#">{{ ++$counter_nbr }}</a></li>
                                            @endif
                                            @endif
                                            @endforeach
											<li>
												<a href="#" aria-label="Next">
													<span aria-hidden="true">&raquo;</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>

						</div>

					</div>

				</div>

			</div>
</div>
@endsection
