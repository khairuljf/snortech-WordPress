<?php get_header(); ?>

		<!-- Site header end //-->

		<!-- Layerslider start //-->



		<?php echo do_shortcode('[slider]') ?>
		

		<!-- Layerslider end //-->

		<!-- Action start //-->

		
<?php echo do_shortcode('[home-choose-biss]') ?>

		<!-- Action end //-->

		<!-- Services #1 start //-->
		<?php echo do_shortcode('[home-service]') ?>

		<!-- Services #1 end //-->

		<!-- Fields of expertise start //-->


		<?php echo do_shortcode('[home-advantages]') ?>

		<!-- End Fields of expertise  //-->


	<!-- Testimonials 3 start //-->
		<?php echo do_shortcode( '[home-testimo]') ?>
	<!-- Testimonials 3 end //-->
		

		<!-- Action start //-->

		<?php echo do_shortcode('[home-purchage]') ?>

		<!-- Action end //-->

		<!-- Site footer start //-->

		<?php get_footer(); ?>