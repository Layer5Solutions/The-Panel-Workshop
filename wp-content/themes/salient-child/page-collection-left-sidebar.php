<?php
/*template name: Colection Sidebar - Left*/

global $wp_query, $post;
$original_wp_query = $wp_query;
$original_post = $post;

$paged = max(1, get_query_var('paged'));
$product_args = array(
    'post_type'      => 'product',
    'posts_per_page' => 12,
    'paged'          => $paged,
);

$product_query = new WP_Query( $product_args );
$wp_query = $product_query;

add_filter('woocommerce_is_product_archive', '__return_true');
add_filter('is_shop', '__return_true');

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
nectar_page_header( $post->ID );

?>

<div class="container-wrap">
	
	<div class="container main-content">
		
		<div class="row">
			
			<div class="post-area col span_9 col_last">
				<?php

				nectar_hook_before_content(); 

                the_content();
				
				nectar_hook_after_content();
				
				?>
				
			</div><!--/span_9-->
			
			<div id="sidebar" class="col span_3 left-sidebar">
				<?php 
					nectar_hook_sidebar_top();
					if ( is_active_sidebar( 'collection-sidebar' ) ) {
					    dynamic_sidebar( 'collection-sidebar' );
					}
					nectar_hook_sidebar_bottom();
				?>
			</div><!--/span_9-->
			
		</div><!--/row-->
		
	</div><!--/container-->
	<?php nectar_hook_before_container_wrap_close(); ?>
</div><!--/container-wrap-->

<?php 

$wp_query = $original_wp_query;
$post     = $original_post;
setup_postdata( $post );

// remove filters we added (cleanup)
remove_filter( 'woocommerce_is_product_archive', '__return_true' );
remove_filter( 'is_shop', '__return_true' );

get_footer(); 
?>