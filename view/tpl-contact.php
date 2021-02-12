<?php
$form_title = get_field('form_title');

/* Template Name: Contact Us Template */
get_header();
get_template_part('/template-parts/banner/banner');
?>

<div class="tpl-contact-lh">
  <div class="columns">
    <div class="column is-8 animate__animated animate__fadeIn">
    <div class="form-title-wrapper">
    <p class="form-title"><?php echo $form_title; ?></p>
    </div>
    <?php get_template_part('/template-parts/form/form'); ?>
    </div>
    <div class="column is-3 is-offset-1">
      <?php get_template_part('/template-parts/side-bar/sidebar') ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
