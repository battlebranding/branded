<?php

class Branded_Theme {

	protected static $single_instance = null;

	static function init() {

		if ( self::$single_instance === null ) {
			self::$single_instance = new self();
		}

		return self::$single_instance;

	}

	public function __construct() { }

	public function hooks() {

		add_action( 'wp_enqueue_scripts', array( $this, 'theme_enqueue_styles' ) );
		add_action( 'after_setup_theme', array( $this, 'woocommerce_support' ) );

		// Remove default WooCommerce Support
		remove_action( 'woocommerce_before_main_content', array( $this, 'woocommerce_output_content_wrapper' ), 10 );
		remove_action( 'woocommerce_after_main_content', array( $this, 'woocommerce_output_content_wrapper_end' ), 10 );

		// Add custom WooCommerce Headers
		add_action( 'woocommerce_before_main_content', array( $this, 'woo_page_wrapper_start' ), 10 );
		add_action( 'woocommerce_after_main_content', array( $this, 'woo_page_wrapper_end' ), 10 );

		// add_action( 'woocommerce_before_cart_table', array( $this, 'woo_cart_wrapper_start' ), 12 );
		// add_action( 'woocommerce_after_cart', array( $this, 'woo_cart_wrapper_end' ), 12 );

	}

	public function theme_enqueue_styles() {

	    wp_enqueue_style( 'lato', 'http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' );
	    // wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' );
	    wp_enqueue_style( 'branded', get_template_directory_uri() . '/style.css' );

	    // wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array('jquery') );
	    wp_enqueue_script( 'branded', get_template_directory_uri() . '/assets/js/branded.js', array('jquery') );
	    wp_enqueue_script( 'angular', get_template_directory_uri() . '/assets/js/angular.min.js', array('jquery') );

	}

	public function woocommerce_support() {
	    add_theme_support( 'woocommerce' );
	}

	public function woo_page_wrapper_start() {
		echo '<div class="container-fluid stage woocommerce">';
		get_template_part( 'views/menu' );
	}

	public function woo_page_wrapper_end() {
		echo '</div>';
	}

	public function woo_cart_wrapper_start() {
		echo '<div class="container-fluid stage woocommerce">';
		get_template_part( 'views/menu' );
	}

	public function woo_cart_wrapper_end() {
		echo '</div>';
	}

}

add_action( 'after_setup_theme', array( Branded_Theme::init(), 'hooks' ) );
