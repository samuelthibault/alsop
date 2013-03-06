<?php get_header(); ?>
			
			<div id="content">

<div id="title-overlay">
			</div>	
			<div id="title-head" style="background-image:url('<?php header_image(); ?>'); height:<?php echo get_custom_header()->height; ?>px; width:<?php echo get_custom_header()->width;?>px;">
				<div class="wrap">
			<h1 class="page-title singleword">Perspectives</h1>
		</div>
		</div>
					<div id="background-right">

				<div id="inner-content" class="wrap clearfix">
			
					<div id="main" class="twelvecol single first clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
								<header class="article-header">
							
									<h2 class="entry-title single-title" itemprop="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                  <p class="byline vcard">
                  	<?php
                    printf(__( '<time class="updated" datetime="%1$s" pubdate>%2$s</time> / by <span class="author">%3$s</span>  ', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('/ F Y', 'bonestheme')), bones_get_the_author_posts_link(), get_the_category_list(', '));
                  ?>
                  	<a href="javascript:history.go(-1)"><img class="back-arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/back-arrow.png"/></a>
              </p>
                 
						
								</header> <!-- end article header -->
					
								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <!-- end article section -->
						
								
					
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
					    		    <p><?php _e("This is the error message in the single.php template.", "bonestheme"); ?></p>
					    		</footer>
							</article>
					
						<?php endif; ?>
			
					</div> <!-- end #main -->
    
</div>
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
