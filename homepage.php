<?php
/* Template Name: Homepage Template */
get_header();
?>

<div class="home-page">
  <?php get_template_part('./template-parts/home/gallery'); ?>
  <?php get_template_part('./template-parts/home/tenants'); ?>
  <?php get_template_part('./template-parts/home/owners'); ?>
  <?php get_template_part('./template-parts/home/lionshead');?>
</div>


 
<?php get_footer(); ?>