<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>
<body  <?php body_class(); ?>><?php wp_body_open(); ?>

<div id="vue-app">





        <!--fixed-top -->
<nav class="navbar navbar-light navbar-expand-lg  bg-light clean-navbar">
        <div class="container">
                    
                          <?php
                          $custom_logo_id = get_theme_mod( 'custom_logo' );
                          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                           
                          if ( has_custom_logo() ) {
                              echo '<a href="' .  esc_url(site_url('/'))  . '"><img style="width:100px" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
                          } else {
                              echo '<h1>' . get_bloginfo('name') . '</h1>';
                          }
                          ?>

                            
                
            
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                    <span class="visually-hidden">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            <?php
                wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navcol-1',
                    'menu_class'        => 'navbar-nav ms-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
          ?>
        </div>
    </nav>