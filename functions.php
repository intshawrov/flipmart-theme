<?php 

function  flipmart_theme_styles(){
      //css files
      wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
      wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all');
      wp_enqueue_style('blue-css', get_template_directory_uri() . '/assets/css/blue.css', array(), '1.0.0', 'all');
      wp_enqueue_style('owl-carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0.0', 'all');
      wp_enqueue_style('owl-transitions-css', get_template_directory_uri() . '/assets/css/owl.transitions.css', array(), '1.0.0', 'all');
      wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0.0', 'all');
      wp_enqueue_style('rateit-css', get_template_directory_uri() . '/assets/css/rateit.css', array(), '1.0.0', 'all');
      wp_enqueue_style('bootstrap-select-css', get_template_directory_uri() . '/assets/css/bootstrap-select.min.css', array(), '1.0.0', 'all');
      wp_enqueue_style('flipmart-style-css', get_template_directory_uri() . '/assets/css/flipmart-style.css', array(), '1.0.0', 'all');

      // JS Enqueue
      wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0', true);
      wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
      wp_enqueue_script('bootstrap-hover-dropdown-js', get_template_directory_uri() . '/assets/js/bootstrap-hover-dropdown.min.js', array('jquery'), '1.0.0', true);
      wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
      wp_enqueue_script('echo-js', get_template_directory_uri() . '/assets/js/echo.min.js', array('jquery'), '1.0.0', true);
      wp_enqueue_script('jquery-easing-js', get_template_directory_uri() . '/assets/js/jquery.easing-1.3.min.js', array('jquery'), '1.0.0', true);
      wp_enqueue_script('bootstrap-slider-js', get_template_directory_uri() . '/assets/js/bootstrap-slider.min.js', array('jquery'), '1.0.0', true);
      wp_enqueue_script('rateit-js', get_template_directory_uri() . '/assets/js/jquery.rateit.min.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'flipmart_theme_styles');