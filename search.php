<?php get_header(); ?>

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

							<a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>


							<?php the_content(); ?>


						<?php endwhile; ?>

							<div class="plugin-container riva-sorting margin-top-50" id="project-sorting">

								<!-- Filter //-->

								<div class="filters align-left">

								</div>

								<div class="listing">

									<!-- Project item start //-->
							

				 


								</div>
							


	        					<br>


					    

							</div>

							<!-- Pagination start //-->


							<!-- Pagination end //-->

						</div>

					</div>

				</div>

			</section>

 </div>

<?php get_footer(); ?>