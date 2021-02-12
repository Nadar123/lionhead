<?php 
$tenants_rpt     = get_field('tenants_rpt');
$tenants_title   = get_field('tenants_title');
?>

  <section class="tenants-wrapper">
    <div class="columns">
      <div class="column is-12">
        <div class="tenants-title">
          <h4><?php echo $tenants_title; ?></h4>
        </div>
        <div class="tenants-loop">
        
          <?php if($tenants_rpt ): ?>
            <?php foreach($tenants_rpt as $item): 
              $icon      = $item['icon']; 
              $text      = $item['text']; 
              $link      = $item['link'];
            ?>
            <div class="icon-wrapper">
            <a href="<?php echo $link; ?>">
              <img class="image" src="<?php echo $icon;?>" alt="<?php echo $icon;?>">
              <h4 class="icon-title">
                <?php echo $text; ?>
              </h4>
            </a>
            </div>
            <?php endforeach; ?>
            <?php endif;?>
          
          </div>
      </div>
    </div>
  </section>