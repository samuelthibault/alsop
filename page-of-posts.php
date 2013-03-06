<?php
/*
Template Name: Page Of Posts
*/

/* if you are not using this in a child of Twenty Eleven, 
*  you need to replicate the html structure of your own theme.
*/

//for each category, show all posts
?>
<?php get_header(); ?>
      
      <div id="content">

      <div id="title-head" style="background-image:url('<?php header_image(); ?>'); height:<?php echo get_custom_header()->height; ?>px; width:<?php echo get_custom_header()->width;?>px;">
        <div class="wrap">
      <h1 class="page-title"><?php single_cat_title(); ?></h1>
    </div>
    </div>
      
        <div id="inner-content" class="wrap clearfix">
        
            <div id="main" class="tencol first clearfix" role="main">
              <?php





$categories=get_categories($cat_args);
  foreach($categories as $category) {
    $args=array(
      'showposts' => -1,
      'category__in' => array($category->term_id),
      'caller_get_posts'=>1,
    );
    $posts=get_posts($args);
      if ($posts) {
        foreach($posts as $post) {
          setup_postdata($post); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
            
                <header class="article-header">
              
                  <h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                  <p class="byline vcard">

                    <?php
                    printf(__('%4$s. <time class="updated" datetime="%1$s" pubdate>%2$s</time> / by <span class="author">%3$s</span> / ', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('/ F Y', 'bonestheme')), bones_get_the_author_posts_link(), get_the_category_list(', '));
                  ?></p>
          <?php
        } // foreach($posts
      } // if ($posts
    } // foreach($categories
?>



            </div> <!-- end #main -->
    
                
                </div> <!-- end #inner-content -->
                
      </div> <!-- end #content -->

<?php get_footer(); ?>