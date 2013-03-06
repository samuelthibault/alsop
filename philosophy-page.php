<?php
/*
Template Name: Philosophy Page
*/
?>

<?php get_header(); ?>
			
			<div id="content">
				<div id="title-overlay">
			</div>	
			<div id="title-head" style="background-image:url('<?php header_image(); ?>'); height:<?php echo get_custom_header()->height; ?>px; width:<?php echo get_custom_header()->width;?>px;">
				<div class="wrap">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</div>
		</div>
				
			<div id="background-right">

				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="twelvecol first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">
							
                 
						
						    </header> <!-- end article header -->
						    <section class="entry-content philosophy-content">
						    	
							    <?php the_content(); ?>

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
    
				    
				</div> <!-- end #inner-content -->
				</div>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
