<?php get_header();?> 

<?php
/*
Template Name: О нас
*/
?>


        <!-- Содержимое -->
        <?php 
               // параметры по умолчанию
              $posts2 = get_posts( array(
                'numberposts' => 1,
                'tag' => 'tsj1',
                'orderby'     => 'date',
                'order'       => 'DESC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
              ) );

              foreach( $posts2 as $post ){
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

                    <!-- Изображение -->
                    <div class="col-lg-6">
                        <div class="about_images d-flex flex-row align-items-start justify-content-between flex-wrap">
                            <img src="http://vkrwp2/wp-content/uploads/2020/06/about.jpg" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
              }

              wp_reset_postdata(); // сброс
            ?>

        <!-- Секция середины контента -->
        <?php 
               // параметры по умолчанию
              $posts2 = get_posts( array(
                'numberposts' => 1,
                'tag' => 'tsj2',
                'orderby'     => 'date',
                'order'       => 'DESC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
              ) );

              foreach( $posts2 as $post ){
                setup_postdata($post);
                ?>
        <div class="split_section_right container_custom">
            <div class="container">
                <div class="row row-xl-eq-height">

                    <div class="col-xl-6 order-xl-1 order-2">
                        <div class="split_section_image">
                            <img src="http://vkrwp2/wp-content/uploads/2020/06/754678189399546.jpeg" alt="">
                        </div>
                    </div>

                    <div class="col-xl-6 order-xl-2 order-1">
                        <div class="split_section_right_content">
                            <div class="split_section_title">
                                <h1><?php the_title(); ?></h1>
                            </div>
                            <div class="split_section_text">
                                <p><?php the_content(); ?></p>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php
              }

              wp_reset_postdata(); // сброс
            ?>
        <!-- Левый контент -->
        <?php 
               // параметры по умолчанию
              $posts2 = get_posts( array(
                'numberposts' => 1,
                'tag' => 'tsj3',
                'orderby'     => 'date',
                'order'       => 'DESC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
              ) );

              foreach( $posts2 as $post ){
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

                    <!-- Изображение -->
                    <div class="col-lg-6">
                        <div class="about_images d-flex flex-row align-items-start justify-content-between flex-wrap">
                            <img src="http://vkrwp2/wp-content/uploads/2020/06/about.jpg" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
              }

              wp_reset_postdata(); // сброс
            ?>




        <!-- Сотрудники -->

        <div class="testimonials">
            <div class="parallax_background parallax-window" data-parallax="scroll"
                data-image-src="http://vkrwp2/wp-content/uploads/2020/06/testimonials.jpg" data-speed="0.8"></div>
            <div class="testimonials_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="testimonials_slider_container">

                            <!-- Слайдер -->
                            <div class="owl-carousel owl-theme test_slider">

                              

                                <?php 
                                // параметры по умолчанию
                                $posts = get_posts( array(
                                    'numberposts' => 3,
                                    'category_name' => 'emp',
                                    'orderby'     => 'date',
                                    'order'       => 'DESC',
                                    'post_type'   => 'post',
                                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                ) );

                                foreach( $posts as $post ){
                                    setup_postdata($post);
                                    ?>

                                    <!-- Слайд -->
                                    <div class="test_slider_item text-center">
                                    <div class="rating rating_5 d-flex flex-row align-items-start justify-content-center">
                                    </div>
                                    <div class="testimonial_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                    <div class="testimonial_text">
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                    
                                    
                                    </div>

                                    <?php
                                }

                                wp_reset_postdata(); // сброс
                                ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <?php get_footer();?>

