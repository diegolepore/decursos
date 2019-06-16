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

        foreach($categories as $category) { 
            $image = get_field('category_image', $category->taxonomy . '_' . $category->term_id );
            echo 
                '<li>
                    <img src="'.$image.'" width="200px">
                    <a href="/Decursos/category/'.$category->slug.'">    
                        '.$category->name.'
                    </a>
                </li>';

            echo get_field('category-image');
        }
    ?>

<?php get_footer(); ?>