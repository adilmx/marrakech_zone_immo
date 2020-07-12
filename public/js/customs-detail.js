
jQuery(function($) {

	"use strict";

	/**
	 * Smooth scroll to anchor
	 */

	$('.with-multiple-sticky a.anchor[href*=#]:not([href=#])').on("click",function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: (target.offset().top - 95) // 70px offset for navbar menu
				}, 1000);
				return false;
			}
		}
	});


	/**
	 * Sidebar Sticky
	*/

	$('.sidebar-sticky').stickit({
		screenMinWidth: 992,
		top: 45,
		zIndex: 9995,
		className: 'when-sticky-on',
		overflowScrolling: true,
		extraHeight: 0
	});

	$('.sidebar-sticky.sidebar-sticky-extra-height').stickit({
		screenMinWidth: 992,
		top: 45,
		zIndex: 9995,
		className: 'when-sticky-on',
		overflowScrolling: true,
		extraHeight: 100
	});

	$('#sidebar-sticky').stickit({
		screenMinWidth: 992,
		top: 45,
		zIndex: 9995,
		className: 'when-sticky-on-id',
		overflowScrolling: true,
		extraHeight: 100,
	});


	/**
	 * Image Grid with Lightbox
	*/

	$('#gallery1').imagesGrid({
	images: [
			{ src: 'images/trip/bg.jpg', alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption One' },
			{ src: 'images/trip/bg.jpg', alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption Two' },
			{ src: 'images/trip/bg.jpg', alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption Three' },
			{ src: 'images/trip/bg.jpg', alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption Fpur' },
			],
		cells: 5,
		align: true
	});

	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		$('#gallery-in-tab').imagesGrid({
			images: [
				{ src: 'images/trip/bg.jpg', alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption One' },
				{ src: 'images/trip/bg.jpg', alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption Two' },
				{ src: 'images/trip/bg.jpg', alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption Three' },
				{ src: 'images/trip/bg.jpg', alt: 'Second image', title: "cliquer pour afficher l'image en plein ecran", caption: 'Image Caption Fpur' },
				],
			cells: 5,
			align: true
		});

		$('.selectpicker-in-tab').selectpicker({ });
	});

	/**
	 * Tokenfield for Bootstrap
	 * http://sliptree.github.io/bootstrap-tokenfield/
	*/

	$('.tokenfield').tokenfield()

	// Autocomplete Tagging
	var engine = new Bloodhound({
		local: [{value: 'Paris'}, {value: 'London'}, {value: 'Bangkok'} , {value: 'Bali'}, {value: 'Hongkong'}, {value: 'Rome'}, {value: 'Dubai'}, {value: 'Cairo'}, {value: 'Istanbul'}],
		datumTokenizer: function(d) {
			return Bloodhound.tokenizers.whitespace(d.value);
		},
		queryTokenizer: Bloodhound.tokenizers.whitespace
	});
	engine.initialize();
	$('#autocompleteTagging').tokenfield({
		typeahead: [null, { source: engine.ttAdapter() }],
		limit: '4',
	});


	/**
	 * Input Spinner
	*/
	$(".form-spin").TouchSpin({
		buttondown_class: 'btn btn-spinner-down',
		buttonup_class: 'btn btn-spinner-up',
		buttondown_txt: '<i class="ion-minus"></i>',
		buttonup_txt: '<i class="ion-plus"></i>'
	});


});

