<?php
/*
*
* Template Name: Categories List Page
*
# ====================================
# categories.php
# ====================================
*/
?>

<?php get_header(); ?>
    <?php
        // var_dump(get_categories());
        // echo '<pre>';
        // echo print_r(get_categories());
        // echo '</pre>';




        $args = array(
            'hide_empty'=> 1,
            'orderby' => 'name',
            'order' => 'ASC'
        );
        $categories = get_categories($args);

        ?>

        <div class="container categories-container">
            <ul class="categories-ul">
                <?php
                    foreach($categories as $category) { 
                        $image = get_field('category_image', $category->taxonomy . '_' . $category->term_id );
                        echo 
                            '<li style="background-image: url('.$image.')">
                                <a href="/Decursos/category/'.$category->slug.'">    
                                    '.$category->name.'
                                </a>
                            </li>';
                        echo get_field('category-image');
                    }
                ?>
            </ul>
        </div>

<?php get_footer(); ?>