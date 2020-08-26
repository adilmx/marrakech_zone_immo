@extends('layouts.app')

@section('content')
<div class="container mx-container-1 ">
    <div class="breadcrumb-image-bg mx-breadcrumb-image-bg mx-bg-v3" style="background-image: url('/storage/{{ $immobilier->pic_src }}'); background-size: cover;">

        <div class="container mx-container-4">

            <div class="page-title">

                <div class="mx-row row">

                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                        <div data-aos="zoom-out-left">
                        <h2>{{ __("Les meilleurs immobiliers à choisir") }}</h2>
                        <p></p>
                    </div>
                    </div>
                </div>

            </div>

        </div>

    </div>



    <div class="pt-50 pb-50">

        <div id="detail-content-sticky-nav-01" >

            <div class="container">

                <div class="row">

                    <div class="col-xs-12 col-sm-8 col-md-9 col-md-9-mx">


                        <div class="content-wrapper pr mx-pr">

                            <h3 class="section-title section-title-mx">{{ $immobilier->designation }}</h3>

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
                                                @if($immobilier->categorie != 1 || $type->lib == "Terrain" ){{-- 
                                            <div class="mx-txt-detail">{{ __("PRIX minimale") }} : <span>{{ $immobilier->price_min }}$</span></div> --}}
                                            <div class="mx-txt-detail">{{ __("PRIX maximale") }} : <span>{{ $immobilier->price_max }}$</span></div>
                                                 @else
                                                 <div class="mx-txt-detail">{{__('Prix pour plus de')}}  {{$immobilier->date_sep}} {{__('JOURS')}} : <span>{{ $immobilier->price_min }}$/{{__('jour')}}</span></div>
                                            <div class="mx-txt-detail">{{__('Prix pour moins de')}} {{$immobilier->date_sep}} {{__('JOURS')}} : <span>{{ $immobilier->price_max }}$/{{__('jour')}}</span></div>   
                                            @endif
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
                                                   <i class="fas fa-home"></i>

                                               </div>

                                           </div>
                                           <div class="txt-box-infos">
                                           <div class="mx-txt-detail">{{ __("Type immobilier") }} : <span>{{ __($type->lib) }}</span></div>

                                           </div>
                                       </div>

                                   </div>

                               </div>

                           </div>
                           <!-- end box info -->

                            <div class="bt mt-30 mb-40"></div>

                             <!-- start box info -->
                             @if($type->lib != "Terrain")
                             <div class="featured-icon-simple-wrapper">

                                <div class="GridLex-gap-30-mx">

                                    <div class="GridLex-grid-mx-noGutter-equalHeight GridLex-grid-noGutter-equalHeight">

                                        <div class="GridLex-col-mx-4_sm-4-mx_xs-12_xss-12 GridLex-col-mx-4_sm-4_xs-12_xss-12">

                                            <div class="featured-icon-simple-item">
                                                <div class="icon text-primary mx-icone">
                                                    <i class="fas fa-hotel"></i>

                                                </div>

                                            </div>
                                            <div class="txt-box-infos">
                                            <div class="mx-txt-detail">{{ __("nombre d'étages") }} : <span>{{ $immobilier->nbr_etage }} {{ __("étages") }}</span></div>
                                            <div class="mx-txt-detail">{{ __("nombre de chambres") }} : <span>{{ $immobilier->nbr_chambre }} {{ __("Chambres") }}</span></div>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            @endif
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
                                            <div class="mx-txt-detail">{{ __("PATENTE") }} : <span>{{ $immobilier->patente }}</span></div>
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
                                                    <i class="fas fa-vector-square"></i>

                                                </div>

                                            </div>
                                            <div class="txt-box-infos">
                                            <div class="mx-txt-detail">{{ __("SUPERFECIE") }} : <span>{{ $immobilier->superfecie }}{{ __("m") }}<sup>2</sup></span></div>
                                            </div>
                                        </div>



                                    </div>

                                </div>

                            </div>
                            <!-- end box info -->
                            <div class="bt mt-30 mb-40"></div>
                            <!-- start box info -->
                            @if($type->lib != "Terrain")
                            <div class="featured-icon-simple-wrapper">

                                <div class="GridLex-gap-30-mx">

                                    <div class="GridLex-grid-mx-noGutter-equalHeight GridLex-grid-noGutter-equalHeight">

                                        <div class="GridLex-col-mx-4_sm-4-mx_xs-12_xss-12 GridLex-col-mx-4_sm-4_xs-12_xss-12">

                                            <div class="featured-icon-simple-item">
                                                <div class="icon text-primary mx-icone">
                                                    <i class="fas fa-swimming-pool"></i>

                                                </div>

                                            </div>
                                            <div class="txt-box-infos">
                                            <div class="mx-txt-detail">{{ __("SUPERFECIE PISCINE") }} : 
                                                @if($immobilier->piscine != 0)
                                                <span>{{ $immobilier->piscine }}{{ __("m") }}<sup>2</sup></span>
                                                @else
                                                <span>{{ __("Pas de piscine") }}</span>
                                                @endif
                                            </div>
                                            </div>
                                        </div>



                                    </div>

                                </div>

                            </div>
                            @endif
                            <!-- end box info -->

                            <div class="bt mt-30 mb-40"></div>



        <div class="bb mb-40 mt-40-xs"></div>

        <div id="detail-content-sticky-nav-02" >

            <div class="mx-container-1 container">

                <h3 class="section-title">{{ __("Plus d'images") }}</h3>

                <div class="gallery-grid-equal-width-wrapper mb-50">
                    <div id="gallery1">

                    </div>

            </div>
            <div class="col-xs-12 col-sm-6 text-right mx-btn-reserver">
            @if($immobilier->categorie == 3)
            @php
                $url = "reservationVente.create";
            @endphp
            @elseif($immobilier->categorie == 1)
                @php
                    $url = "reservationLocation.create";
                @endphp
            @endif
            <a href="{{ route($url,['lang'=>app()->getLocale(),'immobilier' => $immobilier->id]) }}" class="btn btn-primary ">
                {{ __("Reserver maintenant") }}</a>
        </div>

        </div>

        <div class="bb mb-40 mt-40-xs"></div>



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
			{ src: "{{ asset('/') }}storage/{{ $gallery[0]->first_img }}", alt: 'Second image', title: "{{ __('cliquer pour afficher l image en plein ecran') }}", caption: '{{ __('IMAGE 1')}}' },
			{ src: "{{ asset('/') }}storage/{{ $gallery[0]->sec_img }}", alt: 'Second image', title: "{{ __('cliquer pour afficher l image en plein ecran') }}", caption: '{{ __('IMAGE 2')}}' },
			{ src: "{{ asset('/') }}storage/{{ $gallery[0]->third_img }}", alt: 'Second image', title: "{{ __('cliquer pour afficher l image en plein ecran') }}", caption: '{{ __('IMAGE 3')}}' },
			{ src: "{{ asset('/') }}storage/{{ $gallery[0]->fourth_img }}", alt: 'Second image', title: "{{ __('cliquer pour afficher l image en plein ecran') }}", caption: '{{ __('IMAGE 4')}}' },
			],
		cells: 5,
		align: true
	});

	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		$('#gallery-in-tab').imagesGrid({
			images: [
				{ src: "{{ asset('/') }}storage/{{ $gallery[0]->first_img }}", alt: 'Second image', title: "{{ __('cliquer pour afficher l image en plein ecran') }}", caption: '{{ __('IMAGE 1')}}' },
				{ src: "{{ asset('/') }}storage/{{ $gallery[0]->sec_img }}", alt: 'Second image', title: "{{ __('cliquer pour afficher l image en plein ecran') }}", caption: '{{ __('IMAGE 2')}}' },
				{ src: "{{ asset('/') }}storage/{{ $gallery[0]->third_img }}", alt: 'Second image', title: "{{ __('cliquer pour afficher l image en plein ecran') }}", caption: '{{ __('IMAGE 3')}}' },
				{ src: "{{ asset('/') }}storage/{{ $gallery[0]->fourth_img }}", alt: 'Second image', title: "{{ __('cliquer pour afficher l image en plein ecran') }}", caption: '{{ __('IMAGE 4')}}' },
				],
			cells: 5,
			align: true
		});

		$('.selectpicker-in-tab').selectpicker({ });
	});
</script>
@endsection
