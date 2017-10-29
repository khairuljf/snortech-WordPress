<?php get_header() ?>

		<!-- Title bar end //-->

		<!-- Content start //-->

		<?php while (have_posts()) : the_post(); ?>


			<section class="title-bar bg-img-14 transparent-bg-secondary">

			<div class="container">

				<div class="row">

					<div class="col-lg-12">

						<h1><?php the_title() ?></h1>

						<p><?php echo get_the_content(); ?></p>


						<?php	setPostViews(get_the_ID()); ?>
					</div>

				</div>

			</div>

		</section>


		<main class="site-main">

			<!-- Project start //-->

			<section>

				<div class="container">

					<div class="row">

						<div class="col-lg-8 col-md-8">

							<div class="monitor-mockup">

								<img src="<?php echo get_template_directory_uri() ?>/img/mockup-5.png" alt="" class="bg">

								<div class="inner">

									<div class="plugin-container" id="single-imgs">


<?php

			$prefix = 'clean_';
			$entries = get_post_meta( get_the_ID(), $prefix.'my_group3', true );
         

                foreach ( (array) $entries as $key => $entry ) {

                    $img = $title = $desc = '';

                    if ( isset( $entry['slidersimg'] ) ) {
                        $img  = esc_html( $entry['slidersimg'] );
                    }

                     if ( isset( $entry['title'] ) ) {
                        $title = ( $entry['title'] );
                        
                    }

                    if ( isset( $entry['desc'] ) ) {
                        $desc = ( $entry['desc'] );
                        
                    }

              

            echo '<a href="'.$img .'" class="single-imgs">
            <img src="'.$img .'" alt=""></a>';

                  


                } ?>
										<!-- Nav //-->

										<div class="riva-insert-menu-here"></div>

									</div>

								</div>

							</div>

						</div>

						<div class="col-lg-4 col-md-4 margin-top--70 sm-margin-top-0 md-margin-top-0">

							<!-- Short description //-->

							<aside class="widget">

								<h3 class="widget-title">short description</h3>

								<div class="widget-content">

									<p class="margin-top-0"><?php echo get_the_content(); ?></p>

									<p><a href="#" class="biss-btn biss-btn-primary"><i class="fa fa-external-link"></i> launch the project</a></p>

								</div>

							</aside>

							<!-- Used skills //-->

							<aside class="widget">

								<h3 class="widget-title">used skills</h3>

								<div class="widget-content">

								<?php

			$prefix = 'clean_';
			$entries = get_post_meta( get_the_ID(), $prefix.'my_group1', true );
         

                foreach ( (array) $entries as $key => $entry ) {

                    $skill = $skilprg = $desc = '';

                    if ( isset( $entry['skil'] ) ) {
                        $skill  = esc_html( $entry['skil'] );
                    }

                     if ( isset( $entry['skilprg'] ) ) {
                        $skilprg = ( $entry['skilprg'] );
                        
                    }

                    if ( isset( $entry['desc'] ) ) {
                        $desc = ( $entry['desc'] );
                        
                    }

              

            echo '<div class="biss-skill" data-name="'.$skill.'" data-value="'.$skilprg.'" data-animated="0"></div>';

                  


                } ?>

									

								

								</div>

							</aside>

							<!-- Used skills //-->

							<aside class="widget">

								<h3 class="widget-title">developers</h3>

								<div class="widget-content">
								<?php

			$prefix = 'clean_';
			$entries = get_post_meta( get_the_ID(), $prefix.'my_group1', true );
         

                foreach ( (array) $entries as $key => $entry ) {

                    $skill = $developer = $desc = '';

                    if ( isset( $entry['skil'] ) ) {
                        $skill  = esc_html( $entry['skil'] );
                    }

                     if ( isset( $entry['developer'] ) ) {
                        $developer = ( $entry['developer'] );
                        
                    }

                    if ( isset( $entry['desc'] ) ) {
                        $desc = ( $entry['desc'] );
                        
                    }

              

            echo '<p class="single-project-dev ">

										<span class="position">- '.$skill.'</span>

										<span class="name">'.$developer.'</span>

									</p>';

                  


                } ?>

									

									

								

								</div>

							</aside>

						</div>
	<?php endwhile; ?>
						<div class="clearfix"></div>

						<div class="col-lg-12">

							<h2 class="margin-top-70">related projects</h2>

							<div class="plugin-container margin-top-40" id="related">

								<!-- Project item start //-->

								

								<!-- Project item end //-->

								<!-- Project item start //-->


								<?php

					$q = new WP_Query(
					            array('post_type' => 'projectlist',  'order' => 'ASC')
					    );
					while ($q->have_posts()) : $q->the_post();


								 ?>

								<article class="project-item html5">

									<!-- Post image //-->

									<figure>

										<img src="<?php the_post_thumbnail_url(); ?>" alt="">

										<figcaption>

											<a href="<?php the_post_thumbnail_url(); ?>" class="zoom"><i class="fa fa-search"></i></a>

											<a href="<?php the_permalink(); ?>" class="title"><?php echo get_the_title(); ?></a>

										</figcaption>			

									</figure>

									<!-- Project image //-->

								</article>

							<?php endwhile; ?>




							

								<!-- Project item end //-->

								<!-- Nav //-->

								<div class="riva-insert-menu-here"></div>

							</div>

						</div>

					</div>

				</div>

			</section>

			<!-- Project end //-->

			<!-- Services start //-->

			<?php echo do_shortcode('[service-advantages-home]') ?>

			<!-- Services end //-->

		</main>

	

		<!-- Content end //-->

		<!-- Site footer start //-->

		<footer class="site-footer">

			<div class="container">

				<div class="row">

					<!-- Widget "Company info" start //-->

					<div class="col-lg-4">
	<?php dynamic_sidebar( 'footer-widget1' ) ?>
					</div>

					<!-- Widget "Company info" end //-->

					<!-- Widget "Useful links" start //-->

					<div class="col-lg-4 custom-widget">

					<?php dynamic_sidebar( 'footer-widget2' ) ?>

					</div>

					<!-- Widget "Useful links" end //-->

					<!-- Widget "Stay connected" start //-->

					<div class="col-lg-4 social-widget">

					<?php dynamic_sidebar( 'footer-widget3' ) ?>					

					</div>

					<!-- Widget "Stay connected" end //-->

					<!-- Copyrights start //-->

					<div class="col-lg-12">

						<div class="copyrights">

							<p><?php echo get_theme_mod('copyright') ?></p>

						</div>

					</div>

					<!-- Copyrights end //-->

				</div>

			</div>

		</footer>

		<!-- Site footer end //-->

		<!-- Scroll to the top button start //-->

		<div id="scroll-to-the-top">

			<i class="fa fa-angle-up"></i>

		</div>

		<!-- Scroll to the top button end //-->

	</div>

<!-- JS includes //-->
<script src="<?php echo get_template_directory_uri() ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/vendor/jquery-1.11.1.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/masonry.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/less-1.7.4.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.colorbox-min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.rivathemes.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/layerslider/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/layerslider/jquery-transit-modified.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/layerslider/layerslider.transitions.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/layerslider/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/biss.js"></script>

<script>
(function($) {
	"use strict";

	//
	// Preload images
	//

	$('document').ready(function() {

		var $container = $('body'),
			tweetsTimer;

		$container.imagesLoaded( function() {

			$('#single-imgs').rivaCarousel({
				style:'horizontal',
				navigation:'bullets',
				navigation_class:'width-100 margin-top--110 nav-st-1 relative z-100',
				navigation_item_class:'',
				visible: 1,
				selector:'single-imgs',
				gutter:0,
				infinite:1,
				autostart:1
			});

			$('#related').rivaCarousel({
				style:'horizontal',
				navigation:'buttons',
				navigation_class:'width-auto float-left nav-st-3',
				button_left_text:'<i class="fa fa-chevron-left"></i>',
				button_right_text:'<i class="fa fa-chevron-right"></i>',
				visible:3,
				selector:'project-item',
				gutter:30,
				infinite:0,
				interval:2000,
				autostart:0,
				speed:600,
				ease: 'jswing'
			});

		});

		clearTimeout(tweetsTimer);

	});

})(jQuery);
</script>

</body>
</html>