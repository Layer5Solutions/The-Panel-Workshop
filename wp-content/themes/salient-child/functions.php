<?php 

add_action( 'wp_enqueue_scripts', 'salient_child_enqueue_styles', 100);

function salient_child_enqueue_styles() {
		
		$nectar_theme_version = nectar_get_theme_version();
		wp_enqueue_style( 'salient-child-style', get_stylesheet_directory_uri() . '/style.css', '', $nectar_theme_version );
		
    if ( is_rtl() ) {
   		wp_enqueue_style(  'salient-rtl',  get_template_directory_uri(). '/rtl.css', array(), '1', 'screen' );
		}
}


/**
 * Register widget areas.
 *
 * @since 2.0
 */
function nectar_register_widget_areas_child_theme() {
	register_sidebar(
		array(
			'name'          => 'Collection Sidebar',
			'id'            => 'collection-sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);
}

add_action( 'widgets_init', 'nectar_register_widget_areas_child_theme', 99 );


/**
 * Register product shortcode.
 *
 * @since 1.0
 */
function nectar_register_products_list() {
    global $wp_query;

    ob_start();

    if ( $wp_query->have_posts() ) {

        woocommerce_product_loop_start();

        while ( $wp_query->have_posts() ) {
            $wp_query->the_post();
            wc_get_template_part( 'content', 'product' );
        }

        woocommerce_product_loop_end();

        woocommerce_pagination();

    } else {
        wc_no_products_found();
    }

    return ob_get_clean();
}
add_shortcode( 'nectar_products_list', 'nectar_register_products_list' );

?>