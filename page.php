<?php get_header(); ?>



<?php echo do_shortcode( '[page-slide-thumb]') ?>

<div class="site-main">

<?php  while(have_posts()): the_post();


	the_content();




	endwhile;


 ?>
 </div>

<?php get_footer(); ?>