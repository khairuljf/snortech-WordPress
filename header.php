<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
<head>

<meta charset="utf-8" <?php bloginfo( 'charset' );  ?> >
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />


<link rel="shortcut icon" href="favicon.ico">

<!-- CSS includes //-->
<link href='//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Archivo+Black' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()) ?>/css/normalize.css" type="text/css">
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/colorbox-skins/4/colorbox.css" type="text/css">
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/animate.css" type="text/css">
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/font-awesome/css/font-awesome.min.css" type="text/css">
<!-- <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/colorbox-skins/4/colorbox.css" type="text/css"> -->
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/helpers.css" type="text/css">
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/component.css" type="text/css">

<!-- LayerSlider styles -->
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/layerslider/css/layerslider.css" type="text/css">

<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/colors/1.css" type="text/css" id="site-color">

<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ) ?>">






<!-- JS includes //-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries //-->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->




<!-- JS includes //-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries //-->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/twitterFetcher_min.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="margin-top: 80px;">

	<!-- Wrapping all content //-->


	<div id="wrap-all" >

		<!-- Site header start //-->

		<header class="site-header" id="site-header">

			<div class="container">

				<div class="row">

					<div class="col-lg-12">

						<div class="width-100 float-left relative">

							<!-- Site logo start //-->

							<div class="site-logo scroll-hide">

								<a href="<?php bloginfo('home'); ?>">

									<img src="<?php echo get_theme_mod('logo_upload') ?>" >
								</a>

							</div>

							<!-- Site logo end //-->

							<!-- Contacts start //-->

							<div class="header-contacts scroll-hide hidden-xs">

								<p><i class="fa fa-phone"> </i>&nbsp &nbsp<?php echo get_theme_mod('phone') ?></p>

								<div class="cl"></div>

								<p><i class="fa fa-envelope"> </i> &nbsp <?php echo get_theme_mod('mail') ?></p>

							</div>

							<!-- Contacts end //-->

							<div class="width-auto float-right scroll-hide">

								<!-- Sub menu start //-->

								<?php
                                wp_nav_menu(array(
                                    'theme_location'=>'top-right-menu',
                                    'menu_class'=>'',/* add class in ul*/
                                    'container'=>'', /* when you no need class  id or div before ul  */
                                    'container_class'=>'', /* add div with class before ul*/
                                    'container_ud'=>'', /* add div with id before ul */
                                    'fallback_cb'=>'default_menu', /* when menu not selected it will work from default_menu functon functions.php */
                                    
                                ));
                            ?>

								<!-- Sub menu end //-->

								<div class="cl"></div>

								<!-- Social icons start //-->

								<div class="sm-profiles">

									<a href="<?php echo get_theme_mod('twr') ?>"><i class="fa fa-facebook"></i></a>

									<a href="<?php echo get_theme_mod('twr') ?>"><i class="fa fa-twitter"></i></a>

									<a href="<?php echo get_theme_mod('behance') ?>"><i class="fa fa-behance"></i></a>

									<a href="<?php echo get_theme_mod('linke') ?>"><i class="fa fa-linkedin"></i></a>

									<a href="<?php echo get_theme_mod('gplus') ?>"><i class="fa fa-google-plus"></i></a>

									<a href="<?php echo get_theme_mod('rss') ?>"><i class="fa fa-rss"></i></a>

								</div>

								<!-- Social icons end //-->

								<div class="cl hidden-md hidden-lg hidden-sm"></div>

								<!-- Search form start //-->

								<form class="header-search" method="get" action="<?php echo home_url('/'); ?>" >

									<input type="search" placeholder="search..." name="s">

									<button type="submit"><i class="fa fa-search"></i></button>


								</form>

								<!-- Search form end //-->

							</div>

							<div class="cl"></div>

							<nav class="blocked">

								<!-- Mobile nav start //-->

								<div class="mobile-nav-wrapper hidden-lg hidden-md" id="mobile-menu-wrapper">

									<i class="fa fa-bars mobile-nav-icon" id="mobile-nav-icon"></i>

								</div>

								<!-- Mobile nav end //-->

								<!-- Desktop nav start //-->

							 <?php
                                wp_nav_menu(array(
                                    'theme_location'=>'header-menu',
                                    'menu_class'=>'desktop-nav hidden-sm hidden-xs hide-on-tablet',/* add class in ul*/
                                    'container'=>'', /* when you no need class  id or div before ul  */
                                    'container_class'=>'', /* add div with class before ul*/
                                    'container_ud'=>'', /* add div with id before ul */
                                    'fallback_cb'=>'default_menu', /* when menu not selected it will work from default_menu functon functions.php */
                                    
                                ));
                            ?>

								<!-- Desktop nav end //-->

							<!-- Mega nemu #1 start //-->

							<div class="mega-menu-block" id="mega-menu-1">

								<aside>

									<h3>Global Tire</h3>

									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus pharetra ipsum, vitae porttitor ipsum feugiat sit amet. In eu interdum enim. In maximus mauris lorem, sit amet pharetra augue aliquam in. Pellentesque quis lobortis dolor, congue lacinia nulla. Nam ornare iaculis viverra. Cras sit amet scelerisque ex, vitae laoreet ante. Nullam vitae leo sed arcu luctus sollicitudin. Etiam molestie orci sed dignissim maximus. Curabitur sit amet augue vitae metus eleifend euismod. Sed at placerat velit.</p>

								</aside>

								<aside>

									<h3>Weeknight Orange</h3>

									<ul class="style-1">

										<li><i class="fa fa-arrow-circle-right primary-color"></i> Suspendisse ultrices hendrerit elit et sodales.</li>

										<li><i class="fa fa-arrow-circle-right primary-color"></i> Morbi nec enim eleifend, dictum purus in, dapibus justo. </li>

										<li><i class="fa fa-arrow-circle-right primary-color"></i> Donec tincidunt, massa id vestibulum consequat.</li>

										<li><i class="fa fa-arrow-circle-right primary-color"></i> Nam tellus ante, semper at porta vitae.</li>

										<li><i class="fa fa-arrow-circle-right primary-color"></i> Curabitur aliquet sem neque, et consectetur lectus.</li>

										<li><i class="fa fa-arrow-circle-right primary-color"></i>  Proin non mi in ex semper venenatis ac eget tortor.</li>

									</ul>

								</aside>

								<aside>

									<h3>Pointless Spider</h3>

									<div class="flickr-1">

										<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08"></script>

									</div>

								</aside>

							</div>


							<div class="breadscrubms scroll-hide">

							


						</div>

							<!-- Mega nemu #1 end //-->

							</nav>

							<img src="<?php echo get_template_directory_uri(); ?>/img/shadow.png" alt="" class="header-shadow">

						</div>

					</div>

				</div>

			</div>

		</header>