<?php get_header(); ?>

<?php /* Template Name: project */ ?>


<?php echo do_shortcode( '[page-slide-thumb]') ?>

<div class="site-main">
<section>

				<div class="container">

					<div class="row">

						<!-- Sidebar start //-->

						<?php get_sidebar(); ?>

						<!-- Sidebar end //-->

						<div class="clearfix hidden-md hidden-lg"></div>

						<div class="col-lg-8 col-md-8 col-lg-offset-1 sm-margin-top-70 md-margin-top-70">

						<?php   while (have_posts()) :the_post(); ?>

							<?php the_content(); ?>


						<?php endwhile; ?>

							<div class="plugin-container riva-sorting margin-top-50" id="project-sorting">

								<!-- Filter //-->

								<div class="filters align-left">

								</div>

								<div class="listing">

									<!-- Project item start //-->
							<?php 
								
								$q = new WP_Query(
					            array('post_type' => 'projectlist',  'order' => 'ASC'));

							 while ($q->have_posts()) : $q->the_post();
				   
						        $prefix = 'clean_';
						        $desc = get_post_meta(get_the_ID(), $prefix . 'jobdesc', true);

						     ?>


									<article class="project-item web">

										<!-- Post image //-->

										<figure>

											<img src="<?php the_post_thumbnail_url(); ?>" alt="">

											<figcaption>

												<a href="<?php the_post_thumbnail_url(); ?>" class="zoom"><i class="fa fa-search"></i></a>

												<a href="<?php the_permalink() ?>" class="title"><?php the_title(); ?></a>

											</figcaption>			

										</figure>

									</article>


									<?php endwhile; ?>

				 


								</div>
								<ul class="pagination clearfix">
					            <li><?php echo get_next_posts_link( 'Next Page', $q->max_num_pages ); ?></li>
					            <li><?php echo get_previous_posts_link( 'Previous Page' ); ?></li>
	        					</ul>


	        					<br>


					        <?php wp_reset_postdata(); ?>

							</div>

							<!-- Pagination start //-->


							<!-- Pagination end //-->

						</div>

					</div>

				</div>

			</section>

 </div>

<?php get_footer(); ?>