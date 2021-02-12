<?php 
/* Template Name: Management-services Template */
get_header();
get_template_part('/template-parts/banner/banner');

?>
<div class="tpl-management-services">
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