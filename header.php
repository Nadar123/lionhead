
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script> -->
    <?php wp_head();?>
</head>

<body <?php echo body_class(); ?>>

<!-- <?//php if(function_exists('wp_body_open')){ wp_body_open(); }?> -->

  <header class="header">
    <div class="columns ">
      <div class="column is-12 moblie-col">
        <?php get_template_part('./template-parts/header/top-header'); ?>
        <?php get_template_part('./template-parts/header/main-menu'); ?>
        <?php get_template_part('./template-parts/header/responsive-menu'); ?>

      </div>
    </div>
  </header>