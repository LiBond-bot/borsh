<?php

function fl_front_data(){
  $variables = array('ajax_url' => admin_url('admin-ajax.php'));
  echo('<script type="text/javascript">window.wp_data = '.json_encode($variables).';</script>');
}
add_action('wp_head','fl_front_data');

add_action('wp_enqueue_scripts', 'add_scripts');

function add_scripts(){

  wp_enqueue_script("jquery", true);

  wp_enqueue_script( 'fl-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), "0.0.0.0", true );
  wp_enqueue_script( 'mask', get_template_directory_uri() . '/assets/js/jquery.mask.min.js', array(), '20151215', true );
	wp_enqueue_script( 'mask-email', get_template_directory_uri() . '/assets/js/jquery.inputmask.bundle.js', array(), '20151215', true );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), "0.0.0.0", true );
  wp_enqueue_script( 'bootstrap-select', get_template_directory_uri() . '/assets/vendor/bootstrap-select/js/bootstrap-select.min.js', array(), "0.0.0.0", true );
  wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/vendor/magnific-popup/magnific-popup.js', array(), "0.0.0.0", true );
  wp_enqueue_script( 'masonry', get_template_directory_uri() . '/assets/vendor/masonry/masonry-4.2.2.js', array(), "0.0.0.0", true );
  wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/vendor/masonry/isotope.pkgd.min.js', array(), "0.0.0.0", true );
  wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/vendor/imagesloaded/imagesloaded.js', array(), "0.0.0.0", true );
  wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/vendor/counter/waypoints-min.js', array(), "0.0.0.0", true );
  wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/vendor/wow/wow.js', array(), "0.0.0.0", true );
  wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/vendor/counter/counterup.min.js', array(), "0.0.0.0", true );
  wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), "0.0.0.0", true );
  wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/vendor/popper/popper.js', array(), "0.0.0.0", true );
  wp_enqueue_script( 'tempus-dominus', get_template_directory_uri() . '/assets/vendor/tempus-dominus/js/tempus-dominus.min.js', array(), "0.0.0.0", true );
	wp_enqueue_script( 'tilt', get_template_directory_uri() . '/assets/vendor/tilt/tilt.jquery.min.js', array(), "0.0.0.0", true );
	wp_enqueue_script( 'lightgallery', get_template_directory_uri() . '/assets/vendor/lightgallery/dist/lightgallery.min.js', array(), "0.0.0.0", true );
	wp_enqueue_script( 'lg-thumbnail', get_template_directory_uri() . '/assets/vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js', array(), "0.0.0.0", true );
	wp_enqueue_script( 'lg-zoom', get_template_directory_uri() . '/assets/vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js', array(), "0.0.0.0", true );
	wp_enqueue_script( 'dz-carousel', get_template_directory_uri() . '/assets/js/dz.carousel.js', array(), "0.0.0.0", true );
	wp_enqueue_script( 'dz-ajax', get_template_directory_uri() . '/assets/js/dz.ajax.js', array(), "0.0.0.0", true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array(), "0.0.0.0", true );
	wp_enqueue_script( 'dznav-init', get_template_directory_uri() . '/assets/js/dznav-init.js', array(), "0.0.0.0", true ); 
}
