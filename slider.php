<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>


<div id="slider-main" style="background-image:url('<?php header_image(); ?>'); background-repeat:repeat; height:600px; width: auto; overflow: hidden !important;">
	<?php if ( function_exists( 'get_smooth_slider' ) ) { get_smooth_slider(); }?>
</div>
<div id="slider-overlay">
</div>
<div id="three-main">
	<div class="wrap">
	<div class="main-inner">
	<div class="threecol padtop">
		<img style="width: 175px;" src="<?php echo get_template_directory_uri(); ?>/library/images/investments2x.png"/>
		<?php /* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('The_Team') ) ; ?>
		<a href="http://samuelt.com/al-staging/?team=stewart-alsop-3" class="button">Learn More</a>
	</div>
	<div class="threecol">
		<img style="width: 175px;" src="<?php echo get_template_directory_uri(); ?>/library/images/philosophy2x.png"/>
		<?php /* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Our_Philosophy') ) ; ?>
		<a href="http://samuelt.com/al-staging/?page_id=2" class="button">Learn More</a>

	</div>
	<div class="threecol padtop lastchild">
		<img style="width: 175px;" src="<?php echo get_template_directory_uri(); ?>/library/images/team2x.png"/>
				<?php /* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Our_Investments') ) ; ?>
		<a href="http://samuelt.com/al-staging/?investments=copilot-2" class="button">Learn More</a>

	</div>
</div>
</div>
	</div>
<div id="university-outreach">
	<div class="wrap">
		<h2>University <span class="padleft">Outreach</span></h2>
				<?php /* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('University_Outreach') ) ; ?>
						<a href="http://samuelt.com/al-staging/?team=stewart-alsop-2" class="button outreach">Learn More</a>

	</div>
</div>
<div id="featured-slider-wrap">
<div class="wrap">
<?php include (ABSPATH . '/wp-content/plugins/wp-featured-content-slider/content-slider.php'); ?>

</div></div>