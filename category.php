<?php get_header('menu');?> 
 

        <!-- Середина -->

        <div class="home">
            <div class="background_image"><img src="http://vkrwp2/wp-content/uploads/2020/06/booking.jpg" alt=""></div>
            <div class="home_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content text-center">
                                <div class="home_title MyNews">Список постов</div>

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

                            if(have_posts()){
                                while(have_posts()){
                                    the_post();?>

                            <!-- Посты -->
                            <div class="blog_post">
                                <div class="blog_post_image">
                                    <?php the_post_thumbnail('post-slider'); ?>
                                    <div class="blog_post_date"><a href="#"><?php the_time('F jS, Y') ?></a></div>
                                </div>
                                <div class="blog_post_content">
                                    <div class="blog_post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                    <div class="blog_post_info">
                                        <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                            <li class="d-flex flex-row align-items-center justify-content-start">
                                                <a href="#"><?php the_category(); ?></a>
                                            </li>               
                                        </ul>
                                    </div>
                                    <div class="blog_post_text">
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                    <div class="button blog_post_button"><a href="<?php the_permalink(); ?>">Читать далее</a></div>
                                </div>
                            </div>

                                <?php } // конец while ?>
  
                         <?php   } // конец if ?>
 
                        </div>
                    </div>

                    <?php get_sidebar(); ?>

                </div>
            </div>
        </div>
<?php get_footer();?>