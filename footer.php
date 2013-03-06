			<footer class="footer" role="contentinfo">
				<div id="social-footer">
					<div class="wrap">
							<div class="sixcol">
				<?php /* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Twitter') ) ; ?>

				<div id="twitter-link">
					 <a href="https://twitter.com/alsoplouie" class="twitter-follow-button" data-show-count="true" data-lang="en">Follow @alsoplouie</a>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	                </nav>
				</div>
					</div>
					<div class="sixcol feed">
						<?php show_flickr_feed_gallery();?>
						<a href="http://www.flickr.com/photos/49281256@N00/" class="button photos">View All Photos</a>
					</div>
					</div>
				</div>
				<div id="outer-footer">
				<div id="inner-footer" class="wrap clearfix">
					
					<nav role="navigation">
						<div class="socialicons"><a href="https://twitter.com/alsoplouie"><img src="<?php echo get_template_directory_uri(); ?>/library/images/social-twitter.png"/></a> <a href="http://www.flickr.com/photos/49281256@N00/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/social-flikr.png"/></a> <a href="https://www.facebook.com/pages/Alsop-Louie-Partners/100705716664097"><img src="<?php echo get_template_directory_uri(); ?>/library/images/social-facebook.png"/></a></div>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
					<a href="http://hnd.sm"><img class="handsome-logo" style="width: 150px;" src="<?php echo get_template_directory_uri(); ?>/library/images/handsome-logo.png"/></a>

				</div>
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
