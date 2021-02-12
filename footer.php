<?php 
$sitemap      = get_field('sitemap','option');
$rights_loins = get_field('rights_loins', 'option');

?>
    <footer class="footer-wrapper">
    <div class="columns">
      <?php get_template_part('./template-parts/footer/col-1');?>
      <?php get_template_part('./template-parts/footer/col-2');?>
      <?php get_template_part('./template-parts/footer/col-3');?>
    </div>

    <div class="columns">
      <div class="column is-12">
        <div class="site-map-wrapper">
          <p class="sitmap"> <?php echo $sitemap;?> </p>
          <span class="rights">
            <?php echo $rights_loins;?>
          </span>
        </div>
      </div>
    </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html> 