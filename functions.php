<?php
add_action( 'wp_enqueue_scripts', 'theme_name_styles');
add_action( 'wp_enqueue_scripts', 'air_scripts', 1 );

function theme_name_styles() {
	wp_enqueue_style( 'animate-style', get_template_directory_uri().'/assets/css/animate.css');
	wp_enqueue_style( 'layout-rtl-style', get_template_directory_uri().'/assets/css/layout-rtl.css');
	wp_enqueue_style( 'magnific-popup-style', get_template_directory_uri().'/assets/vendor/magnific-popup/magnific-popup.css');
	wp_enqueue_style( 'swiper-style', get_template_directory_uri().'/assets/vendor/swiper/css/swiper.min.css');
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style( 'simple-line-icons-style', get_template_directory_uri().'/assets/vendor/simple-line-icons/css/simple-line-icons.css');
	wp_enqueue_style( 'style', get_stylesheet_uri());
}

function air_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/vendor/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/assets/vendor/jquery-migrate.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/vendor/jquery.easing.js', array('jquery'), null, true);
	wp_enqueue_script( 'back-to-top', get_template_directory_uri() . '/assets/vendor/jquery.back-to-top.js', array('jquery'), null, true);
	wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/assets/vendor/jquery.smooth-scroll.js', array('jquery'), null, true);
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/vendor/jquery.wow.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/vendor/swiper/js/swiper.jquery.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/vendor/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'masonry', get_template_directory_uri() . '/assets/vendor/masonry/jquery.masonry.pkgd.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/vendor/masonry/imagesloaded.pkgd.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'layout', get_template_directory_uri() . '/assets/js/layout.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'wow-min', get_template_directory_uri() . '/assets/js/components/wow.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'swiper-min', get_template_directory_uri() . '/assets/js/components/swiper.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'maginific-popup', get_template_directory_uri() . '/assets/js/components/maginific-popup.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'masonry-min', get_template_directory_uri() . '/assets/js/components/masonry.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'gmap', get_template_directory_uri() . '/assets/js/components/gmap.min.js', array('jquery'), null, true);
	
}

add_theme_support('custom-logo');

add_filter( 'get_custom_logo', 'change_logo_class' );


function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo-link', 'logo-wrap', $html );
    $html = str_replace( 'custom-logo', 'logo-img logo-img-main', $html );

    return $html;
}


add_theme_support( 'post-thumbnails' );

