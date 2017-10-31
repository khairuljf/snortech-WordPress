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
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/masonry.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/less-1.7.4.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.colorbox-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.rivathemes.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/layerslider/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/layerslider/jquery-transit-modified.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/layerslider/layerslider.transitions.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/layerslider/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/biss.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnT6ewhJpccffkJRlbAPyCQeQKJxJfLQ8&libraries=places">
	
</script>
<script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 10,
    center: new google.maps.LatLng(-37.813611, 144.963056),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>









<?php if(is_home()){ ?>
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

			$('#layerslider').layerSlider({
				skinsPath               : 'css/layerslider/skins/',
				skin : 'fullwidth',
				firstLayer: 2,
				thumbnailNavigation : 'hover',
				hoverPrevNext : true,
				responsive : true,
				responsiveUnder : 1170,
				sublayerContainer : 1170
			});

			$('#logo-group').rivaLogoGroup({
				selector:'logo-group-item',
				padding:40,
				row:3
			});

			$('#testimonials').rivaCarousel({
				style:'horizontal',
				navigation:'bullets',
				navigation_class:'width-auto float-left nav-st-3',
				button_left_text:'<i class="fa fa-chevron-left"></i>',
				button_right_text:'<i class="fa fa-chevron-right"></i>',
				visible:3,
				selector:'rivaCarouselItem',
				gutter:20,
				infinite:1,
				interval:3500,
				autostart:1,
				speed:1000,
				ease: 'jswing'
			});

			$('#company-events').rivaCarousel({
				style:'horizontal',
				navigation:'buttons',
				navigation_class:'width-auto float-left nav-st-2',
				button_left_text:'<i class="fa fa-chevron-left"></i>',
				button_right_text:'<i class="fa fa-chevron-right"></i>',
				visible:1,
				selector:'item',
				gutter:20,
				infinite:0,
				interval:2000,
				autostart:0,
				speed:600,
				ease: 'easeInQuad'
			});

			$('#project-sorting').rivaSorting({
				selector	: 'project-item',
				gutter		: 0,
				inRow		: 3
			});

		});

		clearTimeout(tweetsTimer);

		
		// $(".site-header nav.blocked > ul > li").mouseover(function(){
		// 	$(".mega-menu-block").css({"display":"none"})

		// });
		// $(".site-header nav.blocked > ul > li:nth-child(2) ").mouseover(function(){
		// 	$(".mega-menu-block").css({"display":"block"})

		// });



		

	});

})(jQuery);

</script>


	 <?php }
	else { ?>


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

			$('#team').rivaCarousel({
				style:'horizontal',
				navigation:'buttons',
				navigation_class:'width-100 float-left nav-st-3',
				button_left_text:'<i class="fa fa-chevron-left"></i>',
				button_right_text:'<i class="fa fa-chevron-right"></i>',
				visible:5,
				selector:'team-member',
				gutter:30,
				infinite:0,
				interval:2000,
				autostart:0,
				speed:350,
				ease: 'easeInBack'
			});

			$('#logo-group').rivaLogoGroup({
				selector:'logo-group-item',
				padding:40,
				row:3
			});

			$('#testimonials').rivaCarousel({
				style:'horizontal',
				navigation:'buttons',
				navigation_class:'width-auto float-left nav-st-3',
				button_left_text:'<i class="fa fa-chevron-left"></i>',
				button_right_text:'<i class="fa fa-chevron-right"></i>',
				visible:2,
				selector:'testimonials-1-item',
				gutter:20,
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



	<?php  }

	 ?>
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

			$('#faq-sorting').rivaSorting({
				selector	: 'item',
				gutter		: 0,
				inRow		: 1
			});

		});

		clearTimeout(tweetsTimer);

	});

})(jQuery);
</script>

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

			$('#project-sorting').rivaSorting({
				selector	: 'project-item',
				gutter		: 15,
				inRow		: 2
			});

			tweetsTimer = setTimeout(function() {
				$('#tweets-list').each(function() {
					$(this).find('ul > li').addClass('tweet-item');
					$('<i class="fa fa-twitter"></i>').prependTo($(this).find('.tweet-item'));
					$('.tweet-item').find('p.interact').remove().detach();
					$(this).show();
				})
			}, 3000);

		});

		clearTimeout(tweetsTimer);

	});

})(jQuery);
</script>




<?php wp_footer(); ?>
</body>
</html>