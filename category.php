<?php
/**
* A Simple Category Template
*/

$args = array(
    'hide_empty'=> 1,
    'orderby' => 'name',
    'order' => 'ASC'
);
$categories = get_categories($args);

foreach($categories as $category) {
    if(single_cat_title( '', false ) === $category->name) {
        $GLOBALS['catName'] = $category->name;
        $GLOBALS['catImage'] = get_field('category_image', $category->taxonomy . '_' . $category->term_id );
    }
}

// var_export($catImage);
 
get_header(); ?> 
 
<section id="primary" class="site-content">
<div id="content" role="main">
 
<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>
 
 
<?php
 
// The Loop
while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
 
<div class="entry">
<?php the_excerpt(); ?>
 
 <p class="postmetadata"><?php
  comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
?></p>
</div>
 
<?php endwhile; 
 
else: ?>
<p>Sorry, no posts matched your criteria.</p>
 
 
<?php endif; ?>
</div>
</section>
 
 
<?php get_footer(); ?>