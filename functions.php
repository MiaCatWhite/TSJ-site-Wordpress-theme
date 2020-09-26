<?php 
add_action('after_setup_theme', 'theme_register_nav_menu' );
add_action( 'widgets_init', 'register_my_widgets' );
add_filter('user_contactmethods', 'true_add_contacts');

function theme_register_nav_menu() 
{
  register_nav_menu( 'top', 'Меню в шапке' );
  register_nav_menu( 'top2', 'Меню в шапке2' );
  register_nav_menu( 'side', 'Меню в сайдбаре' );
  add_theme_support('title-tag');
  add_theme_support( 'post-thumbnails', array( 'post' ) ); 
  add_image_size('board-slider',106,106,true);
  add_image_size('board-slider',768,584,true);
  add_image_size('board-slider',1920,1006,true);
  add_image_size('post-slider',852,373,true);
}

function register_my_widgets(){
	register_sidebar( array(
		'name'          => 'Правый Сайдбар',
		'id'            => "right_sidebar",
    'description'   => 'Наш Правый Сайдбар',
    'before_widget' => '<div class="widget_%2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<div class="widgettitle">',
		'after_title'   => "</div>\n"
  ) );
  
  register_sidebar( array(
		'name'          => 'Верхний Сайдбар',
		'id'            => "top_sidebar",
    'description'   => 'Наш Верхний Сайдбар',
    'before_widget' => '<div class="widget_%2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<div class="widgettitle">',
		'after_title'   => "</div>\n"
  ) ); 

  register_sidebar( array(
		'name'          => 'Нижний Сайдбар',
		'id'            => "bottom_sidebar",
    'description'   => 'Наш Нижний Сайдбар',
    'before_widget' => '<div class="widget_%2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<div class="widgettitle">',
		'after_title'   => "</div>\n"
  ) );
}

function true_add_contacts( $contactmethods ) {
  $contactmethods['mainprice'] = 'Лицевой счет';
  $contactmethods['dolg'] = 'Сумма долга';
  $contactmethods['oplata'] = 'К оплате';
  $contactmethods['electr'] = 'Электроэнергия';
  $contactmethods['coldwater'] = 'Холодное водоснабжение';
  $contactmethods['hotwater'] = 'Горячее водоснабжение';
  $contactmethods['gaz'] = 'Газ';
  return $contactmethods;
}

add_action('show_user_profile', 'my_profile_new_fields_add');

function my_profile_new_fields_add($user){ 
  ?>
 <div class="button button-primary"><a style="color: #fff; text-decoration: none;" href="https://www.gosuslugi.ru/10373/1">Оплата коммунальных счетов онлайн</a></div>
<?php            
}


