@extends('layouts.app')

@section('content')
<div class="container mx-container-1 ">
    <div class="breadcrumb-image-bg mx-breadcrumb-image-bg mx-bg-v3" style="background-image: url('/storage/{{ $immobilier->pic_src }}'); background-size: cover;">

        <div class="container mx-container-4">

            <div class="page-title">

                <div class="mx-row row">

                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                        <div data-aos="zoom-out-left">
                        <h2>Bienvenu</h2>
                        <p>Les meilleurs immobiliers à choisir</p>
                    </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="card" style="width: 18rem;margin-top:-100%">
  <img class="card-img-top" src="/images/bg/bg1/jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
    <div class="pt-50 pb-50">

     

        <div class="bb mb-40 mt-40-xs"></div>

        <div class="col-xs-12 col-sm-6 text-right mx-btn-reserver">
            <a href="{{ route('reservationVente.create',['immobilier' => $immobilier->id]) }}" class="btn btn-primary ">
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
			{ src: "{{ asset('/') }}storage/{{ $gallery[0]->first_img }}", alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption One' },
			{ src: "{{ asset('/') }}storage/{{ $gallery[0]->sec_img }}", alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption Two' },
			{ src: "{{ asset('/') }}storage/{{ $gallery[0]->third_img }}", alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption Three' },
			{ src: "{{ asset('/') }}storage/{{ $gallery[0]->fourth_img }}", alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption Fpur' },
			],
		cells: 5,
		align: true
	});

	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		$('#gallery-in-tab').imagesGrid({
			images: [
				{ src: "{{ asset('/') }}storage/{{ $gallery[0]->first_img }}", alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption One' },
				{ src: "{{ asset('/') }}storage/{{ $gallery[0]->sec_img }}", alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption Two' },
				{ src: "{{ asset('/') }}storage/{{ $gallery[0]->third_img }}", alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption Three' },
				{ src: "{{ asset('/') }}storage/{{ $gallery[0]->fourth_img }}", alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption Fpur' },
				],
			cells: 5,
			align: true
		});

		$('.selectpicker-in-tab').selectpicker({ });
	});
</script>
@endsection
