<?php get_header(); ?>


<?php /* Template Name: contact */ ?>


<?php echo do_shortcode( '[page-slide-thumb]') ?>

<div class="site-main">

<section class="align-left">

				<div class="container contactp">

					<div class="row">


				<?php echo do_shortcode('[contact-form-7 id="167" title="snortech Contact"]') ?>
						

						<div class="col-lg-48 col-md-4">

							<aside class="widget">

								<h3 class="widget-title"><?php echo get_theme_mod('mheader') ?></h3>

								<div class="widget-content">

									<p class="margin-top-0"><?php echo get_theme_mod('mcontent') ?></p>

									<iframe src="<?php echo get_theme_mod('mlink') ?>" width="370" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

								</div>

							</aside>

							<aside class="widget">

								<h3 class="widget-title"><?php echo get_theme_mod('mheader') ?></h3>

								<div class="widget-content">

									<p class="margin-top-0"><?php echo get_theme_mod('ccontent') ?></p>

									<p><i class="fa fa-map-marker primary-color"></i>&nbsp&nbsp&nbsp<?php echo get_theme_mod('clocation') ?> </p>

									<p><i class="fa fa-phone primary-color"></i> &nbsp&nbsp<?php echo get_theme_mod('cphone') ?></p>

									<p><i class="fa fa-envelope primary-color"></i> <a href="<?php echo get_theme_mod('mail') ?>">&nbsp&nbsp<?php echo get_theme_mod('mail') ?></a></p>

								</div>

							</aside>

						</div>

					</div>

				</div>

			</section>
 </div>



<?php get_footer(); ?>