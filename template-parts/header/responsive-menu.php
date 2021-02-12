<?php 

?>
<div class="mb-menu-wrppaer">
  <div id="toggle">
    <div class="one"></div>
    <div class="two"></div>
    <div class="three"></div>
  </div>
  
<div id="menu">
    <div class="mb-top-menu">
      <nav class="nav">
        <?php if(has_nav_menu('main_menu')): ?>
          <?php wp_nav_menu([
            'theme_location'  => 'main_menu',
            'menu_class'      => 'list-items header_menu_class',
            'container'       => '',
            'depth'           => 0
          ]) ?>
      <?php endif; ?>
      </nav>

    <?//php get_template_part('/top-header'); ?>
    <?//php get_template_part('/main-menu'); ?>

  
    </div>
  </div>
</div>