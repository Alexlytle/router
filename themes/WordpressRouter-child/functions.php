<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
require get_template_directory() . '/router/dependency.php';

//load from parent theme
require_once get_template_directory() . '/router/classes/class-custom-routes.php';
require get_template_directory() . '/vendor/meta-box/meta-box.php';

//load from child theme
require_once get_stylesheet_directory() . '/routes/web.php';
require_once get_stylesheet_directory() . '/routes/ajax.php';
require_once get_stylesheet_directory() . '/routes/api.php';
require get_stylesheet_directory() . '/cpt_acf_cat/post.php';
require get_stylesheet_directory() . '/cpt_acf_cat/category.php';
require get_stylesheet_directory() . '/cpt_acf_cat/custom-fields.php';

require get_stylesheet_directory() . '/woocommerce/hooks.php';



function baseTheme() {
    
    // wp_enqueue_script('barba', 'https://unpkg.com/@barba/core', array(), '1.0', true);
	wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css','1.0',false);
    wp_enqueue_style('inter-font', 'https://fonts.googleapis.com/css?family=Inter&amp;display=swap','1.0',false);
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css','1.0',false);

    wp_enqueue_script('gsap','https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js',[],'1.0',true);
    wp_enqueue_script('gsap-scroll-to','https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollToPlugin.min.js',[],'1.0',true);
    

	wp_enqueue_script('axious', 'https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js', array(), '1.0', true);
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), '1.0', true);
    wp_enqueue_script('base-theme-scripts', get_theme_file_uri('dist/app.js'), array(), '1.0', true);
$time = time();
    wp_enqueue_style('base-theme-style',   get_stylesheet_directory_uri()  .'/dist/app.css?v=?'. $time ,array(),'1.0',false);
    wp_localize_script('base-theme-scripts', 'wpRouter', array(
        'root_url' => get_site_url(),
        'nonce' => wp_create_nonce('wp_rest')
    ));
}
add_action('wp_enqueue_scripts', 'baseTheme');



if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	function is_woocommerce_activated() {
		if ( class_exists( 'woocommerce' ) ) { 
			
			require_once get_template_directory() .'/woocommerce/hooks.php';
		 }
	}
}
