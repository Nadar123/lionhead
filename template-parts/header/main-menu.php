<?php
    $header_logo = get_field( 'header_logo', 'option' );
?>

<div class="menu-main">
  <div class="logo">
    <a href="<?php echo home_url(); ?>" role="logo">
      <?php if($header_logo) : ?>
        <img 
          src="<?php echo $header_logo['url']; ?>" 
          alt="logo">
      <?php endif; ?>    
    </a>
  </div>
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
</div>