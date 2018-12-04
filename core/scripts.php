<?php
	/**
	 * Created by PhpStorm.
	 * User: alexandrzanko
	 * Date: 10/16/18
	 * Time: 4:30 PM
	 */

	add_action( 'template_redirect', function () {

		add_action( 'wp_enqueue_scripts', function () {


			wp_enqueue_script( 'jq', BASE_URL.'/src-template/js/jquery.min.js', false, null, true );
			wp_enqueue_script( 'js-bootstrap', BASE_URL.'/src-template/js/bootstrap.min.js', false, null, true );
			wp_enqueue_script( 'js-pogo', BASE_URL.'/src-template/js/jquery.pogo-slider.min.js', false, null, true );
			wp_enqueue_script( 'js-pogo-main', BASE_URL.'/src-template/js/pogo-main.js', false, null, true );
			wp_enqueue_script( 'js-owl', BASE_URL.'/src-template/js/owl.carousel.js', false, null, true );
			wp_enqueue_script( 'js-wow', BASE_URL.'/src-template/js/wow.min.js', false, null, true );
			wp_enqueue_script( 'js-counterup', BASE_URL.'/src-template/js/jquery.counterup.min.js', false, null, true );
			wp_enqueue_script( 'js-cloudflare', 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', false, null, true );
			wp_enqueue_script( 'js-pkgd', BASE_URL.'/src-template/js/isotope.pkgd.min.js', false, null, true );
			wp_enqueue_script( 'js-tabs', BASE_URL.'/src-template/js/tabs.min.js', false, null, true );
			wp_enqueue_script( 'js-modernizr', BASE_URL.'/src-template/js/modernizr.js', false, null, true );
			wp_enqueue_script( 'js-map', BASE_URL.'/src-template/js/map.js', false, null, true );
			wp_enqueue_script( 'js-main', BASE_URL.'/src-template/js/main.js', false, null, true );

		} );
	} );