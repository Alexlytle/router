<?php get_header();?>

<h1>Example Post</h1>


<?php while (have_posts()) : the_post(); ?>

           <?php the_id(); ?>
           <?php the_content(); ?>

           
<?php endwhile; ?>
<?php get_footer();?>