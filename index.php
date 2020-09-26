<?php get_header();?> 
  
    <!-- Блог -->

    <div class="blog">

      <!-- Слайдер -->
      <div class="blog_slider_container">
        <div class="owl-carousel owl-theme blog_slider">

        <?php 
               // параметры по умолчанию
              $posts = get_posts( array(
                'numberposts' => 3,
                'category_name' => 'news',
                'orderby'     => 'date',
                'order'       => 'DESC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
              ) );

              foreach( $posts as $post ){
                setup_postdata($post);
                ?>
                <!-- Слайд -->
                <div class="blog_slide">
               <div class="background_image"> <?php the_post_thumbnail('board-slider'); ?> </div>
                  <div class="blog_content">
                    <div class="blog_date"><a href="#"><?php the_time('F jS, Y') ?></a></div>
                    <div class="blog_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                  </div>
                </div>
               <?php
              }

              wp_reset_postdata(); // сброс
        ?>

        </div>
      </div>
    </div>









    <!-- Сотрудники -->

    <div class="testimonials">
      <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="http://vkrwp2/wp-content/uploads/2020/06/testimonials.jpg"
        data-speed="0.8"></div>
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