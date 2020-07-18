@extends('layouts.app')

@section('content')
<div class="container mx-container-1 ">
    <div class="pt-50 pb-50">

        <div id="detail-content-sticky-nav-01" >

            <div class="container">

                <div class="row">

                    <div class="col-xs-12 col-sm-8 col-md-9 col-md-9-mx">
                        <div class="breadcrumb-image-bg mx-breadcrumb-image-bg mx-dtl-breadcrumb-image-bg " style="background-image: url(/storage/{{ $car[0]->pic_src }}); background-size: cover;">
                            <div class="container" >

                                <div class="page-title">

                                    <div class="mx-row row">

                                        <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" >
                                            <div data-aos="zoom-out-left">
                                            <h2>l'aventure commence ici</h2>
                                        </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="content-wrapper pr mx-pr">

                            <h3 class="section-title section-title-mx">{{ $car[0]->libelle }}</h3>

                            <div class="bt mt-30 mb-30"></div>

                            <!-- start box info -->
                            <div class="featured-icon-simple-wrapper">

                                <div class="GridLex-gap-30-mx">

                                    <div class="GridLex-grid-mx-noGutter-equalHeight GridLex-grid-noGutter-equalHeight">

                                        <div class="GridLex-col-mx-4_sm-4-mx_xs-12_xss-12 GridLex-col-mx-4_sm-4_xs-12_xss-12">

                                            <div class="featured-icon-simple-item">
                                                <div class="icon text-primary mx-icone">
                                                    <i class="fas fa-dollar-sign"></i>

                                                </div>

                                            </div>
                                            <div class="txt-box-infos">
                                            <div class="mx-txt-detail">PRIX POUR moins DE 7 JOUR : <span>{{ $car[0]->prix_min_per_day }}$</span></div>
                                            <div class="mx-txt-detail">PRIX POUR plus DE 7 JOUR : <span>{{ $car[0]->prix_max_per_day }}$</span></div>
                                            </div>
                                        </div>



                                    </div>

                                </div>

                            </div>
                            <!-- end box info -->

                            <div class="bt mt-30 mb-40"></div>

                             <!-- start box info -->
                             <div class="featured-icon-simple-wrapper">

                                <div class="GridLex-gap-30-mx">

                                    <div class="GridLex-grid-mx-noGutter-equalHeight GridLex-grid-noGutter-equalHeight">

                                        <div class="GridLex-col-mx-4_sm-4-mx_xs-12_xss-12 GridLex-col-mx-4_sm-4_xs-12_xss-12">

                                            <div class="featured-icon-simple-item">
                                                <div class="icon text-primary mx-icone">
                                                    <i class="fas fa-car-side"></i>

                                                </div>

                                            </div>
                                            <div class="txt-box-infos">
                                            <div class="mx-txt-detail">nombre de places : <span>{{ $car[0]->nbr_place }}</span></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- end box info -->

                            <div class="bt mt-30 mb-40"></div>

                             <!-- start box info -->
                             <div class="featured-icon-simple-wrapper">

                                <div class="GridLex-gap-30-mx">

                                    <div class="GridLex-grid-mx-noGutter-equalHeight GridLex-grid-noGutter-equalHeight">

                                        <div class="GridLex-col-mx-4_sm-4-mx_xs-12_xss-12 GridLex-col-mx-4_sm-4_xs-12_xss-12">

                                            <div class="featured-icon-simple-item">
                                                <div class="icon text-primary mx-icone">
                                                    <i class="flaticon-travel-icons-suitcase-1"></i>

                                                </div>

                                            </div>
                                            <div class="txt-box-infos">
                                            <div class="mx-txt-detail">charge maximale : <span>{{ $car[0]->charge_max }}kg</span></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- end box info -->

                            <div class="bt mt-30 mb-40"></div>

                             <!-- start box info -->
                             <div class="featured-icon-simple-wrapper">

                                <div class="GridLex-gap-30-mx">

                                    <div class="GridLex-grid-mx-noGutter-equalHeight GridLex-grid-noGutter-equalHeight">

                                        <div class="GridLex-col-mx-4_sm-4-mx_xs-12_xss-12 GridLex-col-mx-4_sm-4_xs-12_xss-12">

                                            <div class="featured-icon-simple-item">
                                                <div class="icon text-primary mx-icone">
                                                    <i class="fas fa-palette color-ico"></i>

                                                </div>

                                            </div>
                                            <div class="txt-box-infos">
                                            <div class="mx-txt-detail  mx-color-trip-guide-person">
                                                <p class="name color-txt">Couleur : </p>
                                                <div class="color-fill" style="background-color: {{ $car[0]->couleur }}"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- end box info -->

                            <div class="bt mt-30 mb-40"></div>

                             <!-- start box info -->
                             <div class="featured-icon-simple-wrapper">

                                <div class="GridLex-gap-30-mx">

                                    <div class="GridLex-grid-mx-noGutter-equalHeight GridLex-grid-noGutter-equalHeight">

                                        <div class="GridLex-col-mx-4_sm-4-mx_xs-12_xss-12 GridLex-col-mx-4_sm-4_xs-12_xss-12">

                                            <div class="featured-icon-simple-item">
                                                <div class="icon text-primary mx-icone">
                                                    <i class="fas fa-barcode"></i>

                                                </div>

                                            </div>
                                            <div class="txt-box-infos">
                                            <div class="mx-txt-detail">Numero immatriculation : <span>{{ $car[0]->numm_immatric }}</span></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- end box info -->

                            <div class="bt mt-30 mb-40"></div>

                             <!-- start box info -->
                             <div class="featured-icon-simple-wrapper">

                                <div class="GridLex-gap-30-mx">

                                    <div class="GridLex-grid-mx-noGutter-equalHeight GridLex-grid-noGutter-equalHeight">

                                        <div class="GridLex-col-mx-4_sm-4-mx_xs-12_xss-12 GridLex-col-mx-4_sm-4_xs-12_xss-12">

                                            <div class="featured-icon-simple-item">
                                                <div class="icon text-primary mx-icone">
                                                    <i class="fas fa-tachometer-alt"></i>

                                                </div>

                                            </div>
                                            <div class="txt-box-infos">
                                            <div class="mx-txt-detail">kilometrage : <span>{{ $car[0]->kilometrage }}km/h</span></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- end box info -->

                            <div class="bt mt-30 mb-40"></div>


        <div class="bb mb-40 mt-40-xs"></div>

        <div id="detail-content-sticky-nav-02" >

            <div class="mx-container-1 container">

                <h3 class="section-title">Plus d'images</h3>

                <div class="gallery-grid-equal-width-wrapper mb-50">
                    <div id="gallery1">

                    </div>

            </div>

        </div>

        <div class="bb mb-40 mt-40-xs"></div>

        <div class="col-xs-12 col-sm-6 text-right mx-btn-reserver">
            <a href="{{ route('reservationCar.create',['car' => $car[0]->id]) }}" class="btn btn-primary ">
                Reserver maintenant</a>
        </div>

        <div class="bb mb-40 mt-40-xs"></div>



    </div>


</div>
@endsection
@section('script-details-car')
<!-- Detail Page JS -->
<script type="text/javascript" src="{{ asset('/') }}js/jquery.stickit.js"></script>
<script type="text/javascript" src="{{ asset('/') }}js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="{{ asset('/') }}js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}js/jquery.sumogallery.js"></script>
<script type="text/javascript" src="{{ asset('/') }}js/images-grid.js"></script>
<script type="text/javascript" src="{{ asset('/') }}js/jquery.bootstrap-touchspin.js"></script>
<script type="text/javascript" src="{{ asset('/') }}js/customs-detail.js"></script>
<script>
    $('#gallery1').imagesGrid({
	images: [
			{ src: "{{ asset('/') }}storage/{{ $car[0]->first_img }}", alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption One' },
			{ src: "{{ asset('/') }}storage/{{ $car[0]->sec_img }}", alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption Two' },
			{ src: "{{ asset('/') }}storage/{{ $car[0]->third_img }}", alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption Three' },
			{ src: "{{ asset('/') }}storage/{{ $car[0]->fourth_img }}", alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption Fpur' },
			],
		cells: 5,
		align: true
	});

	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		$('#gallery-in-tab').imagesGrid({
			images: [
				{ src: "{{ asset('/') }}storage/{{ $car[0]->first_img }}", alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption One' },
				{ src: "{{ asset('/') }}storage/{{ $car[0]->sec_img }}", alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption Two' },
				{ src: "{{ asset('/') }}storage/{{ $car[0]->third_img }}", alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption Three' },
				{ src: "{{ asset('/') }}storage/{{ $car[0]->fourth_img }}", alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption Fpur' },
				],
			cells: 5,
			align: true
		});

		$('.selectpicker-in-tab').selectpicker({ });
	});
</script>
@endsection
