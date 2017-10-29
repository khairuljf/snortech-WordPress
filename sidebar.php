<div class="col-lg-3 col-md-4 margin-top--70">
					<!-- Search start //-->
					<?php dynamic_sidebar( 'psearch' ) ?>


					
					<!-- Flickr widget end //-->
					<!-- Twitter widget start //-->
					<aside class="widget widget-twitter">
						<h2 class="widget-title">latest tweets</h2>
						<div class="widget-content">
							<script>
								var config = {
								"id": '428880392213381120',
								"domId": 'tweets-list',
								"maxTweets": 3,
								"enableLinks": true,
								"showUser": false,
								"showTime": true,
								"showRetweet": false,
								"lang": 'en'
								};
								twitterFetcher.fetch(config);
							</script>
							<div class="twitter-widget-1" id="tweets-list"></div>
						</div>
					</aside>
					<!-- Twitter widget end //-->
				</div>