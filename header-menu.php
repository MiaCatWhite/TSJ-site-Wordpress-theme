<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>\assets\css\bootstrap-4.1.2\bootstrap.min.css" />
<link href="<?php bloginfo('template_directory') ?>\assets\plugins\font-awesome-4.7.0\css\font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>\assets\plugins\OwlCarousel2-2.3.4\owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>\assets\plugins\OwlCarousel2-2.3.4\owl.theme.default.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>\assets\plugins\OwlCarousel2-2.3.4\animate.css" />
<link href="<?php bloginfo('template_directory') ?>\assets\plugins\jquery-datepicker\jquery-ui.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory') ?>\assets\plugins\colorbox\colorbox.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>\assets\css\main_styles.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>\assets\css\responsive.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>\assets\css\blog.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>\assets\css\blog_responsive.css">
</head>

<body>
  <div class="super_container">
    <!-- Головной -->

    <header class="header">
      <div class="header_content d-flex flex-row align-items-center justify-content-start">
        <div class="logo"><a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a></div>
        <div class="ml-auto d-flex flex-row align-items-center justify-content-start">
          <nav class="main_nav">
          <?php wp_nav_menu(array(
            'theme_location'  => 'top',
            'container'       => null,
            'menu_class'      => 'd-flex flex-row align-items-start justify-content-start'  
          )); ?>
           
          </nav>
 
        <!-- Динамичный Сайдбар -->
        <?php dynamic_sidebar('top_sidebar'); ?>
          <div class="header_phone d-flex flex-row align-items-center justify-content-center">
            <img src="<?php bloginfo('template_directory') ?>/assets/images/phone.png" alt="" />
            <?php 
               // параметры по умолчанию
              $posts2 = get_posts( array(
                'numberposts' => 1,
                'tag' => 'phone',
                'orderby'     => 'date',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
              ) );

              foreach( $posts2 as $post ){
                setup_postdata($post);
                ?>

            <span><?php the_title(); ?></span>
            <?php
              }

              wp_reset_postdata(); // сброс
            ?>
          </div>

          
          <div class="hamburger">
            <i class="fa fa-bars" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </header>

    <!-- Меню -->

    <div class="menu trans_400 d-flex flex-column align-items-end justify-content-start">
      <div class="menu_close">
        <i class="fa fa-times" aria-hidden="true"></i>
      </div>
      <div class="menu_content">
        <nav class="menu_nav text-right">
        <?php wp_nav_menu(array(
            'theme_location'  => 'top2',
            'container'       => null,
            'menu_class'      => 'Mob'  
          )); ?>
        </nav>
      </div>
      <div class="menu_extra">

      <!-- Динамичный Сайдбар -->
      <?php dynamic_sidebar('top_sidebar'); ?>
      </div>
    </div>


     