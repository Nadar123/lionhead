<?php
$banner_title   = get_field('banner_title');
$banner_button  = get_field('banner_button');
$banner_link    = get_field('banner_link');
$banner_icon    = get_field('banner_icon');
?>

<section class="tenants-banner">
  <div class="columns">
    <div class="column is-12">
      <div class="content">
        <h3 class="title"><?php echo $banner_title ;?></h3>
        <div class="search-link">
          <a class="link" href="<?php echo $banner_link; ?>">
            <img src="<?php echo $banner_icon; ?>" alt="">
            <span><?php echo $banner_button; ?> </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>