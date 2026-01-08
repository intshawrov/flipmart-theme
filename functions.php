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
      wp_enqueue_style('font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',array(),'6.5.1');
      wp_enqueue_style('style-css', get_stylesheet_uri(), array(), '1.0.0', 'all');

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

add_action('after_setup_theme', 'flipmart_theme_setup');

function flipmart_theme_setup(){

      add_theme_support('title-tag');
      add_theme_support('custom-logo');
      add_theme_support('post-thumbnails');
      add_theme_support('automatic-feed-links');
      add_theme_support('custom-background');
      add_theme_support('custom-header');
      add_theme_support('woocommerce');
      add_theme_support('html5',
            array(
                  'search-form',
                  'comment-form',
                  'comment-list',
                  'gallery',
                  'caption',
            )
      );
      register_nav_menus(
            array(
                  'primary' => __('Primary Menu', 'flipmart'),
                  
            )
      );
}

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}

/**
 * Change WooCommerce Add to Cart button text everywhere
 * Shop page + Single product + All product types
 */
add_filter( 'woocommerce_product_add_to_cart_text', 'flipmart_add_to_cart_text', 10, 2 );
add_filter( 'woocommerce_product_single_add_to_cart_text', 'flipmart_add_to_cart_text', 10, 2 );

function flipmart_add_to_cart_text( $text, $product ) {

    // Variable product
    if ( $product->is_type( 'variable' ) ) {
        return __( 'Select Options', 'woocommerce' );
    }

    // Grouped product
    if ( $product->is_type( 'grouped' ) ) {
        return __( 'View Products', 'woocommerce' );
    }

    // External / Affiliate product
    if ( $product->is_type( 'external' ) ) {
        return __( 'Buy Now', 'woocommerce' );
    }

    // Simple product (default)
    return __( 'Add Cart', 'woocommerce' );
}



//Change several of the breadcrumb defaults

add_filter( 'woocommerce_breadcrumb_defaults', 'flipmart_woocommerce_breadcrumbs' );
function flipmart_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => ' &#47; ',
            'wrap_before' => '<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">',
            'wrap_after'  => '</ul></div>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}


// Remove the breadcrumbs 

add_action( 'init', 'woo_remove_wc_breadcrumbs' );
function woo_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}
// Remove the result count from shop page
add_action( 'init', 'flipmart_remove_wc_breadcrumbs' );
function flipmart_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20, 0 );
}

// Remove woocommerce catalog ordering dropdown
add_action( 'init', 'flipmart_remove_catalog_ordaring' );
function flipmart_remove_catalog_ordaring() {
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30, 0 );
}


function flipmart_pagination() {

global $wp_query;

if ( $wp_query->max_num_pages <= 1 ) return; 

$big = 999999999; // need an unlikely integer

$pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
        'prev_next'          => true,
        'prev_text'          => __( '<i class="fa-solid fa-angles-left"></i>' ),
        'next_text'          => __( '<i class="fa-solid fa-angles-right"></i>' ),
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<div class="pagination-container"><ul class="list-inline list-unstyled">';
        foreach ( $pages as $page ) {
                echo "<li>$page</li>";
        }
       echo '</div></ul>';
        }
}

// Products per page dropdown


function flipmart_wc_products_per_page_dropdown() {

    $per_page = isset($_GET['per_page']) ? intval($_GET['per_page']) : get_option('posts_per_page');
    ?>
    <form method="get" class="fld inline">
        <label>Show </label>
        <select name="per_page" onchange="this.form.submit()">
            <?php
            for ( $i = 1; $i <= 10; $i++ ) {
                echo '<option value="'.$i.'" '.selected($per_page, $i, false).'>'.$i.'</option>';
            }
            ?>
        </select>

        <?php
        // keep other filters (category, search, etc)
        foreach ( $_GET as $key => $value ) {
            if ( 'per_page' === $key ) continue;
            echo '<input type="hidden" name="'.esc_attr($key).'" value="'.esc_attr($value).'">';
        }
        ?>
    </form>
    <?php
}



