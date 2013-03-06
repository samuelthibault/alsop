<?php get_header(); ?>
			
			<div id="content">
<div id="title-overlay">
			</div>	
			<div id="title-head" style="background-image:url('<?php header_image(); ?>'); height:<?php echo get_custom_header()->height; ?>px; width:<?php echo get_custom_header()->width;?>px;">
				<div class="wrap">
			<h1 class="page-title singleword"><?php single_cat_title(); ?></h1>
		</div>
		</div>

		<div id="subhead">
								<div class="wrap">

										<div class="covered-image sticky">

			<?php query_posts(array("post__not_in" =>get_option("sticky_posts"), 'paged' => get_query_var('paged'))); ?>	
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		
		<article <?php post_class(); ?>>
			<div class="title">
				 <h2 class="entry-title single-title" itemprop="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                  <p class="byline vcard">
                  	<?php
                    printf(__( '<time class="updated" datetime="%1$s" pubdate>%2$s</time> / by <span class="author">%3$s</span>  ', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('/ F Y', 'bonestheme')), bones_get_the_author_posts_link(), get_the_category_list(', '));
                  ?>
              </p>
			</div>
			
			<?php the_excerpt(); ?>
			
		</article>
		
		<?php endwhile; ?>
		
		
	<?php endif; ?>
	
<?php wp_reset_query(); ?>
</div>
						<?php echo get_the_post_thumbnail($id, 'full', array('class' => 'covered')); ?>

		</div>
	</div>

					<div id="background-right">

			
				<div id="inner-content" class="wrap clearfix">
				
				    <div id="main" class="tencol perspectives first clearfix" role="main">
				
					    <?php if (is_category()) { ?>
						 
					    <?php } elseif (is_tag()) { ?> 
						    <h1 class="archive-title h2">
							    <span><?php _e("Posts Tagged:", "bonestheme"); ?></span> <?php single_tag_title(); ?>
						    </h1>
					    
					    <?php } elseif (is_author()) { 
					    	global $post;
					    	$author_id = $post->post_author;
					    ?>
						    <h1 class="archive-title h2">

						    	<span><?php _e("Posts By:", "bonestheme"); ?></span> <?php echo get_the_author_meta('display_name', $author_id); ?>

						    </h1>
					    <?php } elseif (is_day()) { ?>
						    <h1 class="archive-title h2">
	    						<span><?php _e("Daily Archives:", "bonestheme"); ?></span> <?php the_time('l, F j, Y'); ?>
						    </h1>
		
		    			<?php } elseif (is_month()) { ?>
			    		    <h1 class="archive-title h2">
				    	    	<span><?php _e("Monthly Archives:", "bonestheme"); ?></span> <?php the_time('F Y'); ?>
					        </h1>
					
					    <?php } elseif (is_year()) { ?>
					        <h1 class="archive-title h2">
					    	    <span><?php _e("Yearly Archives:", "bonestheme"); ?></span> <?php the_time('Y'); ?>
					        </h1>
					    <?php } ?>

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">
							
							    <h2 class="entry-title single-title" itemprop="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                  <p class="byline vcard">
                  	<?php
                    printf(__( '<time class="updated" datetime="%1$s" pubdate>%2$s</time> / by <span class="author">%3$s</span>  ', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('/ F Y', 'bonestheme')), bones_get_the_author_posts_link(), get_the_category_list(', '));
                  ?>
              </p>

                  

						    </header> <!-- end article header -->
					
						    <section class="entry-content clearfix">
						
						
							    <?php the_excerpt(); ?>
					
						    </section> <!-- end article section -->
						
						    <footer class="article-footer">
							
						    </footer> <!-- end article footer -->
					
					    </article> <!-- end article -->
					
					    <?php endwhile; ?>	
					




						<!-- // Hide to let the Ajax loader show more posts instead of pagination
					        <?php if (function_exists('bones_page_navi')) { ?>
						        <?php bones_page_navi(); ?>
					        <?php } else { ?>
						        <nav class="wp-prev-next">
							        <ul class="clearfix">
								        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
								        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
							        </ul>
					    	    </nav>
					        <?php } ?>
					    -->
					
					    <?php else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    						    <header class="article-header">
    							    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
    					    	</header>
    						    <section class="entry-content">
    							    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
        						</section>
    	    					<footer class="article-footer">
    		    				    <p><?php _e("This is the error message in the archive.php template.", "bonestheme"); ?></p>
    			    			</footer>
    				    	</article>
					
					    <?php endif; ?>
			
    				</div> <!-- end #main -->
    </div>
                
                </div> <!-- end #inner-content -->
                
			</div> <!-- end #content -->

<?php get_footer(); ?>
