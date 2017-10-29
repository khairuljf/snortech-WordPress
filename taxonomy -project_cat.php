<?php get_header(); ?>



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

							<p class="margin-top-0 font-bold text-uppercase heading-color">Aenean dapibus egestas est sit amet efficitur. Donec sit amet semper ex, ac scelerisque orci. Duis eget dolor et dolor condimentum luctus.</p>

							<p>Fusce accumsan augue nisl, in volutpat nisi tempus nec. Pellentesque nec congue urna. Proin tellus libero, ullamcorper sit amet aliquam a, euismod et dolor. Pellentesque a erat volutpat, ullamcorper mauris et, porta augue. Aenean iaculis accumsan leo. Integer sed metus eros. Pellentesque imperdiet hendrerit augue eget viverra. Nunc nec fringilla neque. </p>

							<div class="plugin-container riva-sorting margin-top-50" id="project-sorting">

								<!-- Filter //-->

								<div class="filters align-left">

								</div>

								<div class="listing">

									<!-- Project item start //-->
							<?php 
								
								

							 while (have_posts()) : the_post();
				   
						     

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

							</div>

							<!-- Pagination start //-->


							<!-- Pagination end //-->

						</div>

					</div>

				</div>

			</section>

 </div>

<?php get_footer(); ?>