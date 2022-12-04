<?php
/*Woocomerce hooks go here*/

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

// attach my open 'section' function to the before product summary action
add_action( 'woocommerce_before_single_product', function(){
	echo '<div class = "container">';
});
add_action( 'woocommerce_after_single_product_summary', function(){
	echo '</div>';
});

 
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

add_filter( 'woocommerce_add_to_cart_redirect', 'bbloomer_redirect_checkout_add_cart' );

function bbloomer_redirect_checkout_add_cart() {
	return wc_get_checkout_url();
}