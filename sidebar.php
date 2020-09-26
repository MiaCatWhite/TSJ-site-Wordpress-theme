 <!-- Сайдбар -->
<div class="col-lg-3">
    <div class="sidebar">
        
        <!-- Динамичный Сайдбар -->
        <?php dynamic_sidebar('right_sidebar'); ?>
        <div class="widgettitle" style="margin-top:50px;">Дополнительное меню</div>
       
        <nav class="text-right">
        <?php wp_nav_menu(array(
            'theme_location'  => 'side',
            'container'       => null,
            'menu_class'      => 'Mob'  
          )); ?>
          </nav>
      
    </div>
</div>