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
                        'hide_empty'=> 1,
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
                <div class="first-recently-added-item">
                    <div class="first-recently-added-image" style="background-image: url(https://images.unsplash.com/photo-1558102822-da570eb113ed?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80);"></div>
                    <div class="excerpt-text">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit assumenda ratione repudiandae laborum! Modi aliquid sequi rem, eos nulla quisquam laudantium fugit saepe odit alias deleniti nisi corporis esse reprehenderit!</p>
                        <div class="article-details">
                            <p>
                                <span>Diego Palacios</span> en <span>Tecnología</span>
                                <br>
                                <span>14 de mayo</span>
                            </p>
                        </div>
                    </div>
                </div>

                <ul class="recently-added-ul">
                    <li class="recently-added-item">
                        <div class="recently-added-image" style="background-image: url(https://images.unsplash.com/photo-1558118385-34a216752d40?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1651&q=80);"></div>
                        <div class="excerpt-text">
                            <h3>Lorem ipsum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit assumenda ratione repudiandae laborum! Modi aliquid sequi rem, eos nulla quisquam laudantium fugit saepe odit alias deleniti nisi corporis esse reprehenderit!</p>
                            <div class="article-details">
                            <p>
                                <span>Diego Palacios</span> en <span>Tecnología</span>
                                <br>
                                <span>14 de mayo</span>
                            </p>
                            </div>
                        </div>
                    </li>
                    <li class="recently-added-item">
                        <div class="recently-added-image" style="background-image: url(https://images.unsplash.com/photo-1558130449-1b99c4f99c46?ixlib=rb-1.2.1&auto=format&fit=crop&w=2089&q=80);"></div>
                        <div class="excerpt-text">
                            <h3>Lorem ipsum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit assumenda ratione repudiandae laborum! Modi aliquid sequi rem, eos nulla quisquam laudantium fugit saepe odit alias deleniti nisi corporis esse reprehenderit!</p>
                            <div class="article-details">
                            <p>
                                <span>Diego Palacios</span> en <span>Tecnología</span>
                                <br>
                                <span>14 de mayo</span>
                            </p>
                            </div>
                        </div>
                    </li>
                    <li class="recently-added-item">
                        <div class="recently-added-image" style="background-image: url(https://images.unsplash.com/photo-1558100034-cc1bc7ad09b8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1651&q=80);"></div>
                        <div class="excerpt-text">
                            <h3>Lorem ipsum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit assumenda ratione repudiandae laborum! Modi aliquid sequi rem, eos nulla quisquam laudantium fugit saepe odit alias deleniti nisi corporis esse reprehenderit!</p>
                            <div class="article-details">
                            <p>
                                <span>Diego Palacios</span> en <span>Tecnología</span>
                                <br>
                                <span>14 de mayo</span>
                            </p>
                            </div>
                        </div>
                    </li>
                    <li class="recently-added-item">
                        <div class="recently-added-image" style="background-image: url(https://images.unsplash.com/photo-1558169527-99de3365c5b0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80);"></div>
                        <div class="excerpt-text">
                            <h3>Lorem ipsum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit assumenda ratione repudiandae laborum! Modi aliquid sequi rem, eos nulla quisquam laudantium fugit saepe odit alias deleniti nisi corporis esse reprehenderit!</p>
                            <div class="article-details">
                            <p>
                                <span>Diego Palacios</span> en <span>Tecnología</span>
                                <br>
                                <span>14 de mayo</span>
                            </p>
                            </div>
                        </div>
                    </li>
                    <li class="recently-added-item">
                        <div class="recently-added-image" style="background-image: url(https://images.unsplash.com/photo-1558169527-e8fe3446f232?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80);"></div>
                        <div class="excerpt-text">
                            <h3>Lorem ipsum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit assumenda ratione repudiandae laborum! Modi aliquid sequi rem, eos nulla quisquam laudantium fugit saepe odit alias deleniti nisi corporis esse reprehenderit!</p>
                            <div class="article-details">
                            <p>
                                <span>Diego Palacios</span> en <span>Tecnología</span>
                                <br>
                                <span>14 de mayo</span>
                            </p>
                            </div>
                        </div>
                    </li>
                    <li class="recently-added-item">
                        <div class="recently-added-image" style="background-image: url(https://images.unsplash.com/photo-1558091579-31593a62efdc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1651&q=80);"></div>
                        <div class="excerpt-text">
                            <h3>Lorem ipsum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit assumenda ratione repudiandae laborum! Modi aliquid sequi rem, eos nulla quisquam laudantium fugit saepe odit alias deleniti nisi corporis esse reprehenderit!</p>
                            <div class="article-details">
                            <p>
                                <span>Diego Palacios</span> en <span>Tecnología</span>
                                <br>
                                <span>14 de mayo</span>
                            </p>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
            <a href="#" class="simple-link">
                <span>Ver todos </span>
                <i class="right-arrow-icon"></i>
            </a>
        </section>

        <section class="section-recommended section-decursos clearfix">
            <div class="inner-recommended-section">
                <div class="left-col">
                    <h2>Recomendados</h2>
                    <ul>
                        <li>
                            <div class="recommended-image" style="background-image: url(https://images.unsplash.com/photo-1558118385-34a216752d40?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1651&q=80);"></div>
                            <div class="recommended-text">
                                <div class="excerpt-text">
                                    <h3>Lorem ipsum</h3>
                                    <div class="text-wrapper">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit assumenda ratione repudiandae laborum! Modi aliquid sequi rem, eos nulla quisquam laudantium fugit saepe odit alias deleniti nisi corporis esse reprehenderit! t alias deleniti nisi corporis esse reprehenderit!</p>
                                    </div>
                                    <div class="article-details">
                                        <p>
                                            <span>Diego Palacios</span> en <span>Tecnología</span>
                                            <br>
                                            <span>14 de mayo</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="recommended-image" style="background-image: url(https://images.unsplash.com/photo-1558118385-34a216752d40?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1651&q=80);"></div>
                            <div class="recommended-text">
                                <div class="excerpt-text">
                                    <h3>Lorem ipsum</h3>
                                    <div class="text-wrapper">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit assumenda ratione repudiandae laborum! Modi aliquid sequi rem, eos nulla quisquam laudantium fugit saepe odit alias deleniti nisi corporis esse reprehenderit! t alias deleniti nisi corporis esse reprehenderit!</p>
                                    </div>
                                    <div class="article-details">
                                        <p>
                                            <span>Diego Palacios</span> en <span>Tecnología</span>
                                            <br>
                                            <span>14 de mayo</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="recommended-image" style="background-image: url(https://images.unsplash.com/photo-1558118385-34a216752d40?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1651&q=80);"></div>
                            <div class="recommended-text">
                                <div class="excerpt-text">
                                    <h3>Lorem ipsum</h3>
                                    <div class="text-wrapper">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit assumenda ratione repudiandae laborum! Modi aliquid sequi rem, eos nulla quisquam laudantium fugit saepe odit alias deleniti nisi corporis esse reprehenderit! t alias deleniti nisi corporis esse reprehenderit!</p>
                                    </div>
                                    <div class="article-details">
                                        <p>
                                            <span>Diego Palacios</span> en <span>Tecnología</span>
                                            <br>
                                            <span>14 de mayo</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="recommended-image" style="background-image: url(https://images.unsplash.com/photo-1558118385-34a216752d40?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1651&q=80);"></div>
                            <div class="recommended-text">
                                <div class="excerpt-text">
                                    <h3>Lorem ipsum</h3>
                                    <div class="text-wrapper">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit assumenda ratione repudiandae laborum! Modi aliquid sequi rem, eos nulla quisquam laudantium fugit saepe odit alias deleniti nisi corporis esse reprehenderit! t alias deleniti nisi corporis esse reprehenderit!</p>
                                    </div>
                                    <div class="article-details">
                                        <p>
                                            <span>Diego Palacios</span> en <span>Tecnología</span>
                                            <br>
                                            <span>14 de mayo</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="recommended-image" style="background-image: url(https://images.unsplash.com/photo-1558118385-34a216752d40?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1651&q=80);"></div>
                            <div class="recommended-text">
                                <div class="excerpt-text">
                                    <h3>Lorem ipsum</h3>
                                    <div class="text-wrapper">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit assumenda ratione repudiandae laborum! Modi aliquid sequi rem, eos nulla quisquam laudantium fugit saepe odit alias deleniti nisi corporis esse reprehenderit! t alias deleniti nisi corporis esse reprehenderit!</p>
                                    </div>
                                    <div class="article-details">
                                        <p>
                                            <span>Diego Palacios</span> en <span>Tecnología</span>
                                            <br>
                                            <span>14 de mayo</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="recommended-image" style="background-image: url(https://images.unsplash.com/photo-1558118385-34a216752d40?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1651&q=80);"></div>
                            <div class="recommended-text">
                                <div class="excerpt-text">
                                    <h3>Lorem ipsum</h3>
                                    <div class="text-wrapper">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit assumenda ratione repudiandae laborum! Modi aliquid sequi rem, eos nulla quisquam laudantium fugit saepe odit alias deleniti nisi corporis esse reprehenderit! t alias deleniti nisi corporis esse reprehenderit!</p>
                                    </div>
                                    <div class="article-details">
                                        <p>
                                            <span>Diego Palacios</span> en <span>Tecnología</span>
                                            <br>
                                            <span>14 de mayo</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="recommended-image" style="background-image: url(https://images.unsplash.com/photo-1558118385-34a216752d40?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1651&q=80);"></div>
                            <div class="recommended-text">
                                <div class="excerpt-text">
                                    <h3>Lorem ipsum</h3>
                                    <div class="text-wrapper">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit assumenda ratione repudiandae laborum! Modi aliquid sequi rem, eos nulla quisquam laudantium fugit saepe odit alias deleniti nisi corporis esse reprehenderit! t alias deleniti nisi corporis esse reprehenderit!</p>
                                    </div>
                                    <div class="article-details">
                                        <p>
                                            <span>Diego Palacios</span> en <span>Tecnología</span>
                                            <br>
                                            <span>14 de mayo</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="recommended-image" style="background-image: url(https://images.unsplash.com/photo-1558118385-34a216752d40?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1651&q=80);"></div>
                            <div class="recommended-text">
                                <div class="excerpt-text">
                                    <h3>Lorem ipsum</h3>
                                    <div class="text-wrapper">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit assumenda ratione repudiandae laborum! Modi aliquid sequi rem, eos nulla quisquam laudantium fugit saepe odit alias deleniti nisi corporis esse reprehenderit! t alias deleniti nisi corporis esse reprehenderit!</p>
                                    </div>
                                    <div class="article-details">
                                        <p>
                                            <span>Diego Palacios</span> en <span>Tecnología</span>
                                            <br>
                                            <span>14 de mayo</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="right-col"></div>
            </div>

            <a href="#" class="simple-link">
                <span>Ver todos </span>
                <i class="right-arrow-icon"></i>
            </a>
        </section>

        <section class="section-join-us section-decursos">
            <div class="inner-text">
                <h2>¿Quieres compartir tus ideas y artículos?</h2>
                <p>Muy facil, solo debes registrate <a href="#">aquí</a> y puedes empezar a escribir tus artículos con nosotros. Para saber más de como funciona Decursos haz click <a href="#">aquí</a></p>
            </div>
            <div class="image-join" style="background-image: url(https://images.unsplash.com/photo-1515378960530-7c0da6231fb1?ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80);"></div>
        </section>


    </div>

</main>

<?php get_footer(); ?>