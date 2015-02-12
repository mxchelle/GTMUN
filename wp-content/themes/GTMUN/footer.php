			</div> <!-- end #container -->

			<footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix">
		       
		          <div id="widget-footer" class="clearfix">

		          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>

		          </div>
					
					<nav class="clearfix">
						<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
					
					<div class="container">
						<div class="col-xs-3">
							Header photos from <a href="<?php echo get_site_url(); ?>/credits">flickr</a>.
							<br>[ <a href="<?php echo get_site_url();?>/wp-login.php">Login</a> ]
						</div>

						<div class="col-xs-6">
						<p class="attribution">Page and Content &copy; <?php echo date("Y"); ?> Georgia Tech Model United Nations (GTMUN).</p>
						</div>

						<div class="col-xs-3 align-right">
							Layout by <a href="http://www.michellepartogi.com" target="_blank">Michelle Partogi</a>.<br> Based on <a href="http://320press.com/themes/wp-bootstrap/" target="_blank"> 320Press.</a>
						</div>
						
					</div> <!-- end #container -->
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		


				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

		
		<?php wp_footer(); // js scripts are inserted using this function ?>
		<script src="<?php echo get_template_directory_uri();?>/library/js/animatedHeader.js"/></script>

	</body>

</html>