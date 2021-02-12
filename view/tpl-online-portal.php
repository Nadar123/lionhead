<?php
/* Template Name: Online Portal Template */
get_header();
get_template_part('/template-parts/banner/banner');

?>
<div class="page-online-portal">
  <?php get_template_part('/template-parts/online-portal/top-section') ?>
  <?php get_template_part('/template-parts/online-portal/boxes') ?>
  <?php get_template_part('/template-parts/online-portal/your-portal'); ?>
</div>

<?php get_footer(); ?>


