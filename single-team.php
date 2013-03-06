<?php get_header(); ?>
			
			<div id="content">
			<div id="title-overlay">
			</div>	
			<div id="title-head" style="background-image:url('<?php header_image(); ?>'); height:<?php echo get_custom_header()->height; ?>px; width:<?php echo get_custom_header()->width;?>px;">
				<div class="wrap">
			<h1 class="page-title">Our Team</h1>

		</div>
		</div>
				<div id="subhead">
					<div class="wrap">
						<div class="covered-image">

<?php if( get_post_meta($post->ID, "img", true) ): ?>
<a href="<?php echo get_post_meta($post->ID, "imglink", true); ?>"><img class="twitter-profile" src="<?php echo get_post_meta($post->ID, "img", true); ?>"></a>
<?php endif; ?>

<h2 class="team"><?php the_title(); ?></h2>

<?php $title = get_post_meta($post->ID, "Title", true);
if ($title) { ?>
   <h3 class="team-title"><?php echo $title; ?></h3>
<?php } ?>

<?php $school = get_post_meta($post->ID, "School", true);
if ($school) { ?>
   <h3 class="team-school"><?php echo $school; ?></h3>
<?php } ?>


</div>

				<?php echo get_the_post_thumbnail($id, 'full', array('class' => 'covered')); ?>

<!--						<img class="diagnal-cover team" src="<?php echo get_template_directory_uri(); ?>/library/images/diagnal-cover.png"/> -->
					
				</div>
			</div>

								<div id="background-right">


				<div id="inner-content" class="wrap clearfix">
					<?php get_sidebar(); ?>

			
				    <div id="main" class="twelveecol first clearfix" role="main">



					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">
						    </header> <!-- end article header -->
					
						    <section class="entry-content team-content">


<?php $links = get_post_meta($post->ID, "FeaturedLinks", true);
if ($links) { ?>
<div id="FeaturedLinks">
   <h2>Featured</h2>
   <p class="FeaturedLinks">
   	<a href="<?php echo get_post_meta($post->ID, "imglink", true); ?>">
<?php echo $links; ?>
</a>
   </p>
</div>
<?php } ?>



							<div id="team-content">
							    <?php the_content(); ?>
							</div>
						    </section> <!-- end article section -->
						
						    <footer class="article-footer">


							
						    </footer> <!-- end article footer -->
						    
					
					    </article> <!-- end article -->
					
					    <?php endwhile; ?>	
					
					    <?php else : ?>
					
        					<article id="post-not-found" class="hentry clearfix">
        					    <header class="article-header">
        						    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
        						</header>
        					    <section class="entry-content">
        						    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
        						</section>
        						<footer class="article-footer">
        						    <p><?php _e("This is the error message in the page-custom.php template.", "bonestheme"); ?></p>
        						</footer>
        					</article>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
    
				    </div>
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
