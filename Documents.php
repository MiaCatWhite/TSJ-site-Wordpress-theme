<?php get_header('menu');?> 

<?php
/*
Template Name: Документы
*/
?>

        <!-- Середина -->

        <div class="home">
        <div class="background_image"><img src="http://vkrwp2/wp-content/uploads/2020/06/booking.jpg" alt=""></div>
            <div class="home_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content text-center">
                                <div class="home_title MyNews">Документы</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Блог -->

      <div class="blog">
            <div class="container">
                <div class="row">

                    <!-- Посты -->
                    <div class="col-lg-9">
                        <div class="blog_posts">

                         
            <?php 
                // параметры по умолчанию
                $posts = get_posts( array(
                    'numberposts' => 30,
                    'tag' => 'doc',
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                foreach( $posts as $post ){
                    setup_postdata($post);
            ?>
                            

                            <!-- Пост -->
                            <div class="blog_post">
                                <div class="blog_post_image">
                                    <?php the_post_thumbnail(); ?>
                                    <div class="blog_post_date"><a href="#"><?php the_time('F jS, Y') ?></a></div>
                                </div>
                              
                            </div>

            <?php
              }

              wp_reset_postdata(); // сброс
            ?>


                        </div>
                    </div>


                    <!-- Сайдбар -->
                    <?php get_sidebar(); ?>


                </div>
            </div>

        
        </div>

<?php get_footer();?>




