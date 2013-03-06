<?php get_header(); ?>
			
			<div id="content">
				<div id="title-overlay">
			</div>	
			<div id="title-head" style="background-image:url('<?php header_image(); ?>'); height:<?php echo get_custom_header()->height; ?>px; width:<?php echo get_custom_header()->width;?>px;">
				<div class="wrap">
			<h1 class="page-title singleword">Investments</h1>

		</div>
		</div>
				<div id="subhead">
					<div class="wrap investments-logo">

<a href="<?php echo get_post_meta($post->ID, "LogoLink", true); ?>"><?php echo get_the_post_thumbnail($id, 'full', array('class' => 'logo-investments')); ?></a>
<?php if( get_post_meta($post->ID, "Logo", true) ): ?>
<?php endif; ?>






				</div>
			</div>

								<div id="background-right">

				<div id="inner-content" class="wrap clearfix">

			
				    <div id="main" class="twelevecol first clearfix" role="main">



					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
														        			    <?php get_sidebar(investments); ?>

						    <section class="entry-content">


				        			    <div class="investments-content">
				        			    <h2><?php the_title(); ?></h2>

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
