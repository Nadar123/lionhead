<?php 
$owners_rpt     = get_field('owners_rpt');
$owners_title   = get_field('owners_title');
?>

<section class="tenants-wrapper owners-section">
  <div class="columns">
    <div class="column is-12">
      <div class="tenants-title">
        <h4><?php echo $owners_title; ?></h4>
      </div>
      <div class="tenants-loop">
        <?php if($owners_rpt ): ?>
          <?php foreach($owners_rpt as $item): 
            $icon      = $item['icon']; 
            $text      = $item['text'];
            $link      = $item['link'];
            // var_dump($owners_rpt); 
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