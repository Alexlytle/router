<?php get_header();?>

<h1>Example</h1>
<!-- <hello-world></hello-world> -->
<div id="app"></div>
<?php echo get_query_var('param_one');?>

<?php

    $arg = array(
        'post_type'=>get_query_var('param_one')
    );
    $query = new WP_Query( $arg );
    
    // The Loop
    if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post();
      // Do Stuff

      the_content();


    endwhile;
    endif;
    
    // Reset Post Data
    wp_reset_postdata();
    
?>

           

<?php get_footer();?>