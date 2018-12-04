<?php
	/**
	 * Created by PhpStorm.
	 * User: alexandrzanko
	 * Date: 10/16/18
	 * Time: 4:30 PM
	 */

	add_action( 'template_redirect', function () {

		add_action( 'wp_enqueue_scripts', function () {

			wp_enqueue_style( 'google-fonts', "https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&amp;subset=latin-ext,vietnamese", false, null );
			wp_enqueue_style( 'bootstrap', BASE_URL . '/src-template/css/bootstrap.min.css', false, null );
			wp_enqueue_style( 'font-awesome', BASE_URL . '/src-template/css/font-awesome.css', false, null );
			wp_enqueue_style( 'icomoon', BASE_URL . '/src-template/css/icomoon.css', false, null );
			wp_enqueue_style( 'pogo-slider', BASE_URL . '/src-template/css/pogo-slider.min.css', false, null );
			wp_enqueue_style( 'slider', BASE_URL . '/src-template/css/slider.css', false, null );
			wp_enqueue_style( 'animate', BASE_URL . '/src-template/css/animate.css', false, null );
			wp_enqueue_style( 'owl-carousel', BASE_URL . '/src-template/css/owl.carousel.css', false, null );
			wp_enqueue_style( 'default', BASE_URL . '/src-template/css/default.css', false, null );
			wp_enqueue_style( 'styles', BASE_URL . '/src-template/css/styles.css', false, null );
			wp_enqueue_style( 'style', BASE_URL . '/style.css', false, null );

		} );
	} );
