<?php get_header(); ?>

<?php /* Template Name: Carirer */ ?>


<?php echo do_shortcode( '[page-slide-thumb]') ?>

<div class="site-main">
	<section class="align-left">

				<div class="container">

					<div class="row">

					<?php  while(have_posts()): the_post();

										the_content();

								endwhile;


							 ?>

					</div>

				</div>

			</section>
	
 </div>

<?php get_footer(); ?>