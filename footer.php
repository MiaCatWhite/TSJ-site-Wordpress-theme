<!-- Окончание -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5eeaa2f44a7c6258179ad274/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    <footer class="footer">
      <div class="footer_content">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="footer_logo_container text-center">
                <div class="footer_logo">
                  <a href="#"></a>
                  <div><?php bloginfo('name');?></div>
                  <?php 
               // параметры по умолчанию
              $posts2 = get_posts( array(
                'numberposts' => 1,
                'tag' => 'ordate',
                'orderby'     => 'date',
                'order'       => 'DESC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
              ) );

              foreach( $posts2 as $post ){
                setup_postdata($post);
                ?>
                  <div><?php the_title(); ?></div>
                  <?php
              }

              wp_reset_postdata(); // сброс
            ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row footer_row">

            <!-- Адрес -->
            <div class="col-lg-3">
              <div class="footer_title">Адрес</div>
              <div class="footer_list">
                <ul>
                <?php 
               // параметры по умолчанию
              $posts2 = get_posts( array(
                'numberposts' => 3,
                'tag' => 'address',
                'orderby'     => 'date',
                'order'       => 'DESC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
              ) );

              foreach( $posts2 as $post ){
                setup_postdata($post);
                ?>
                  <li><?php the_title(); ?></li>
                  <?php
              }

              wp_reset_postdata(); // сброс
            ?>
                </ul>
              </div>
            </div>

            <!-- Динамичный Сайдбар -->
            <?php dynamic_sidebar('bottom_sidebar'); ?>

            <!-- Контакты -->
            <div class="col-lg-3">
              <div class="footer_title">Контакты</div>
              <div class="footer_list">
                <ul>
                <?php 
               // параметры по умолчанию
              $posts2 = get_posts( array(
                'numberposts' => 2,
                'tag' => 'phone',
                'orderby'     => 'date',
                'order'       => 'DESC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
              ) );

              foreach( $posts2 as $post ){
                setup_postdata($post);
                ?>
                  <li><?php the_title(); ?></li>
                  <?php
              }

              wp_reset_postdata(); // сброс
            ?>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>

    </footer>
  </div>

  </div>
  <script src="<?php bloginfo('template_directory') ?>/assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/css/bootstrap-4.1.2/popper.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/css/bootstrap-4.1.2/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/plugins/greensock/TweenMax.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/plugins/greensock/TimelineMax.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/plugins/greensock/animation.gsap.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/plugins/greensock/ScrollToPlugin.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/plugins/easing/easing.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/plugins/progressbar/progressbar.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/plugins/parallax-js-master/parallax.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/plugins/jquery-datepicker/jquery-ui.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/plugins/colorbox/jquery.colorbox-min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/js/custom.js"></script>
</body>

</html>