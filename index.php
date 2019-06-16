<?php
/*
*
* Template Name: Landing Page
*
# ====================================
# index.php
# ====================================
*/
?>

<?php get_header(); ?>

<main>
    <div class="cat-main">
        <div class="cat-wrapper">
            <?php
                echo '<ul class="cat-wrapper-ul">';
                    $args = array(
                        'hide_empty'=> 0,
                        'orderby' => 'name',
                        'order' => 'ASC'
                    );
                    $idx_cats = 0;
                    $max_cats = 13;
                    $categories = get_categories($args);

                    while($idx_cats < $max_cats) {
                        echo 
                        '<li>
                            <a href="category/'.$categories[$idx_cats]->slug.'">    
                                '.$categories[$idx_cats]->name.'
                            </a>
                        </li>';
                        $idx_cats++;
                    }
                echo '<li><a href="categorias"><i class="more-icon"></i></a></li>';
                echo '</ul>';
            ?>
        </div>
    </div>

    <div class="wrapper landing-wrapper">
        <section class="section-recently-added section-decursos clearfix">
            <h2>Agregados recientemente</h2>

            <div class="inner-recently-added">


                <!-- // Define our WP Query Parameters -->
                <?php $the_query_first_image = new WP_Query( 'posts_per_page=1' ); ?>
                <!-- // Start our WP Query -->
                <?php while ($the_query_first_image -> have_posts()) : $the_query_first_image -> the_post();?>
                    <div class="first-recently-added-item">
                        <a href="<?php the_permalink() ?>">
                        
                            <div class="first-recently-added-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>);"></div>
                           
                            <div class="excerpt-text">
                                <!-- // Display the Post Title with Hyperlink -->   
                                <h3><?php the_title(); ?></h3>
                                <!-- // Display the Post Excerpt -->
                                <p><?php the_excerpt(__('(more…)')); ?></p>
                                <div class="article-details">
                                    <p>
                                        <span><?php the_author(); ?></span> en <span><?php 
                                            foreach((the_category(", ")) as $category) { 
                                                echo $category->cat_name . "Yeah";
                                            } 
                                        ?></span>
                                        <br>
                                        <span><?php 
                                            $post_date = get_the_date( 'j F, Y' ); 
                                            echo $post_date;
                                        ?></span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                <!-- // Repeat the process and reset once it hits the limit -->
                <?php 
                endwhile;
                wp_reset_postdata();
                ?>



                <ul class="recently-added-ul">
                    <!-- // Define our WP Query Parameters -->
                    <?php $the_query = new WP_Query( 'posts_per_page=7' ); ?>
                    <!-- // Start our WP Query -->
                    <?php 
                    $i = 0;
                    while ($the_query -> have_posts() ) : $the_query -> the_post();?>
                        <?php if($i > 0) { ?>
                        <li class="recently-added-item">
                            <a href="<?php the_permalink() ?>">
                            
                                <div class="recently-added-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>);"></div>
                                <div class="excerpt-text">
                                    <!-- // Display the Post Title with Hyperlink -->   
                                    <h3 title="<?php the_title(); ?>"><?php the_title(); ?></h3>
                                    <!-- // Display the Post Excerpt -->
                                    <p><?php the_excerpt(__('(more…)')); ?></p>
                                    <div class="article-details">
                                    <p>
                                            <span><?php the_author(); ?></span> en <span><?php 
                                                foreach((the_category(", ")) as $category) { 
                                                    echo $category->cat_name . "Yeah";
                                                } 
                                            ?></span>
                                            <br>
                                            <span><?php 
                                                $post_date = get_the_date( 'j F, Y' ); 
                                                echo $post_date;
                                            ?></span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php } ?>
                    <!-- // Repeat the process and reset once it hits the limit -->
                    <?php 
                    $i++;
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
            <a href="categorias" class="simple-link">
                <span>Ver más</span>
                <i class="right-arrow-icon"></i>
            </a>
        </section>

        <section class="section-recommended section-decursos clearfix">
            <div class="inner-recommended-section">
                <div class="left-col">
                    <h2>Recomendados</h2>

                    <ul>
                    <!-- // Define our WP Query Parameters -->
                    <?php $the_query = new WP_Query( 'posts_per_page= 20' ); ?>
                    <!-- // Start our WP Query -->
                    <?php 
                    
                    while ($the_query -> have_posts()) : $the_query -> the_post();?>
                        <?php 
                        $post_tags = get_the_tags();
                        if ( $post_tags[0]->name == "recomendado") {
                            // echo $post_tags[0]->name; 
                         ?>
                        <li>
                            <!-- <a href="<?php the_permalink() ?>"> -->
                            
                                <a class="recommended-image" href="<?php the_permalink() ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>);"></a>
                                
                                <div class="recommended-text">
                                    <div class="excerpt-text">
                                        <!-- // Display the Post Title with Hyperlink -->   
                                        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                        <!-- // Display the Post Excerpt -->
                                        <p><?php the_excerpt(__('(more…)')); ?></p>
                                        <div class="article-details">
                                        <p>
                                            <span><?php the_author(); ?></span> en <span><?php 
                                                foreach((the_category(", ")) as $category) { 
                                                    echo $category->cat_name . "Yeah";
                                                } 
                                            ?></span>
                                            <br>
                                            <span><?php 
                                                $post_date = get_the_date( 'j F, Y' ); 
                                                echo $post_date;
                                            ?></span>
                                        </p>
                                        </div>
                                    </div>
                                </div>
                            <!-- </a> -->
                        </li>
                        <?php } ?>
                    <!-- // Repeat the process and reset once it hits the limit -->
                    <?php 
          
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </ul>
                </div>
                <div class="right-col hide">
                    <div class="misc-box"></div>
                    <div class="misc-box"></div>
                </div>
            </div>

            <a href="categorias" class="simple-link">
                <span>Ver más</span>
                <i class="right-arrow-icon"></i>
            </a>
        </section>
    </div>

    <section class="section-join-us section-decursos">
        <div class="inner-text">
            <h2>¿Quieres compartir tus ideas y artículos?</h2>
            <p>Muy fácil, solo debes registrate <a href="register">aquí</a> para que puedas empezar a escribir tus artículos con nosotros. Si quieres saber como funciona haz click <a href="#">aquí</a>.</p>
        </div>
        <div class="bg-patron"></div>
        <div class="image-join" style="background-image: url(<?php the_field("bottom_large_image"); ?>);"></div>
    </section>

</main>

<?php get_footer(); ?>