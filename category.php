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
<div id="content" class="container container-category-articles" role="main">
 

<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?> 
<?php
 
// The Loop
while ( have_posts() ) : the_post(); ?>
    <div class="article-item">
        <a class="article-image" href="<?php the_permalink() ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>);"></a>

        <div class="article-text">
            <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
            
            <div class="entry">
                <?php the_excerpt(); ?>
                <!-- <p class="postmetadata"><?php
                //   comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
                ?></p> -->
            </div>
            <div class="article-details">
                <span>
                    <?php the_time('j F, Y') ?>
                </span> 
                por 
                <span>
                    <?php the_author_posts_link() ?>
                </span>
            </div>
        </div>
    </div>
<?php endwhile; 
 
else: ?>
<p>Sorry, no posts matched your criteria.</p>
 
 
<?php endif; ?>
</div>
</section>
 
 
<?php get_footer(); ?>