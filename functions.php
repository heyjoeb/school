<?php
	// REGISTER PRIMARY NAVIGATION
	register_nav_menus( array(
	    'primary' => __( 'Primary Menu', 'schoolTheme' )
	) );

	// ADD FONTS
	function school_google_fonts() {
	wp_enqueue_style( 'school-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,400i,700|PT+Serif:400i&display=swap', false );
	}
	add_action( 'wp_enqueue_scripts', 'school_google_fonts' );

	// ADD SCRIPTS AND STYLES
	function school_scripts() {
	  wp_enqueue_style( 'main', get_stylesheet_uri() );
    wp_enqueue_script( 'buildJs', get_template_directory_uri() . '/js/min/build.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'mainJs', get_template_directory_uri() . '/js/min/main.min.js', array(), '1.0.0', true );
	}
	add_action( 'wp_enqueue_scripts', 'school_scripts' );

	// ADD FEATURED IMAGE TO POSTS
	add_theme_support( 'post-thumbnails' );

	// ADD CLASS TO BODY IF IT'S NOT HOME
	function my_class_names($classes) {
		// add 'class-name' to the $classes array
		if( !is_front_page() ) $classes[] = 'interna';
		// return the $classes array
		return $classes;
	}
	add_filter('body_class','my_class_names');

	// ENABLE OPTIONS PAGE IN ACF
	if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

  }


	// INCREASE UPLOAD LIMIT
	@ini_set( 'upload_max_size' , '64M' );
	@ini_set( 'post_max_size', '64M');
	@ini_set( 'max_execution_time', '300' );















