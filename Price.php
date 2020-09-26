<?php get_header('menu');?> 

<?php
/*
Template Name: Тарифы
*/
?>

        <!-- Заголовок -->

        <div class="home">
        <div class="background_image"><img src="http://vkrwp2/wp-content/uploads/2020/06/booking.jpg" alt=""></div>
            <div class="home_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content text-center">
                                <div class="home_title MyNews">Тарифы</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Середина -->
        <?php 
        // параметры по умолчанию
        $posts = get_posts( array(
        'numberposts' => 1,
        'tag' => 'price',
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'post',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                ) );

        foreach( $posts as $post ){
        setup_postdata($post);
        ?>
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about_title">
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row about_row">

                    <!-- Контент -->
                    <div class="col-lg-6">
                        <div class="about_content">
                            <div class="about_text">
                                <p><?php the_content(); ?></p>


                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3"></div>
                         <!-- Сайдбар -->
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
        <?php
              }

              wp_reset_postdata(); // сброс
            ?>

<?php get_footer();?>




