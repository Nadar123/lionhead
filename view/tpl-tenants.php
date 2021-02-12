<?php
/* Template Name: Tenants Template */

$banner_title   = get_field('banner_title');
$banner_button  = get_field('banner_button');
$banner_link    = get_field('banner_link');
$banner_icon    = get_field('banner_icon');

get_header();

get_template_part('/template-parts/banner/banner');
?>


<div class="information-tenants">
  <div class="columns">
    <div class="column is-8 animate__animated animate__fadeIn ">
      <?php the_content(); ?>
    </div>
    <div class="column is-3 is-offset-1">
     <?php get_template_part('/template-parts/side-bar/sidebar') ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>