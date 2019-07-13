<?php
/*
# ====================================
# single.php
#
# The template for displaying all single posts
# ====================================
*/
?>

<?php 
	get_header(); 
	$format = get_post_format();
?>

<!--==== Start Post Section ====-->
<div class="section style-full article-page">
	<div>
		<!-- post content -->
		<div class="row">
			<!-- Start single post -->
			<article class="col-xs-12">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div id="post-<?php the_ID(); ?>" <?php post_class( 'post-wrapper' ); ?>>

						<header>
							<h1>
								<?php the_title(); ?>
							</h1>
							<div class="post-meta tags hide">

								<?php akyl_post_meta( 'category' ); ?>

								<?php akyl_post_meta( 'date' ); ?>	
							</div>

							<div class="author-info-wrapper">

								<div class="author-image">
									<?php akyl_post_meta( 'user_avatar' ); ?>
								</div>

								<div class="author-info">
									<?php the_author(); ?>
									<?php akyl_post_meta( 'category' ); ?>
									<?php akyl_post_meta( 'date' ); ?>
								</div>
							</div>
						</header>
						
						<?php if ( $format == 'gallery' && ! has_post_thumbnail() ): ?>

							<div class="flexslider">
								<ul class="slides">

									<?php

									$gallery_images = get_post_gallery_images( $post ); 

									foreach ( $gallery_images as $img ) :

									    echo '<li><img src="' . $img . '" /></li>';
									
									endforeach; 

									?>

								</ul>
							</div>

						<?php elseif ( has_post_thumbnail() ) : ?>

							<div class="featured-image text-center">

								<?php the_post_thumbnail( 'full' ); ?>

								<?php $image_caption = get_post(get_post_thumbnail_id())->post_excerpt; ?>
												
									<div class="media-caption-container">	

										<p class="media-caption"><?php echo $image_caption; ?></p>	
																		
									</div>								

							</div>

						<?php endif; ?>

						<div class="post-content">

							<div class="post-main">

								<?php the_content(); ?>

							</div>
							
							<!-- posts navigation -->
							<div class="post-nav">

								<?php
									/* Posts pagination */
									wp_link_pages( array(
										'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'akyl' ) . '</span>',
										'after'       => '</div>',
										'link_before' => '<span class="num">',
										'link_after'  => '</span>',
										'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'akyl' ) . ' </span>%',
										'separator'   => '<span class="screen-reader-text">, </span>',
									) );
								?>

							</div>
							
							<div class="post-meta tags">
								<?php akyl_post_meta( 'tags' ); ?>
							</div>	
							
						</div>	
						
					</div>
		
				<?php endwhile; endif; ?>

			</article><!-- End single post -->
		</div>
		
		<?php comments_template( '', true ); ?>
	</div>
</div>
<!--==== End Post Section ====-->

<?php get_footer(); ?>