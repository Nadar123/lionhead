<?php
$portal_offer_title = get_field('portal_offer_title');
$portal_offer_text = get_field('portal_offer_text');
$portal_col_image = get_field('portal_col_image');
$portal_tools_rpt = get_field('portal_tools_rpt');

?>

<section class="portal-offer">
    <div class="columns">
      <div class="column is-12">
        <div class="offers-content">
          <h3 class="offers-title"> <?php echo $portal_offer_title; ?></h3>
          <p class="text"> <?php echo $portal_offer_text; ?></p>
        </div>
      </div>
    </div>
    <div class="columns">
      <div class="column is-4">
        <div class="image-content owner-image-content">
          <img 
            src="<?php echo $portal_col_image; ?>" 
            alt="<?php echo $portal_col_image; ?>">
        </div>
      </div>
      <div class="column is-8 is-offset-2">
        <div class="box-content owner-box-content">
          <?php if($portal_tools_rpt):?>
            <?php foreach($portal_tools_rpt as $item) :
              $icon     = $item['icon'];
              $title    = $item['title'];
              $text     = $item['text'];
             
            ?>
            <div class="box-wrap owner-box-wrap">
              <img src="<?php echo $icon; ?>" alt="<?php echo $icon; ?>">
              <div class="text-box">
                <h4 class="box-title"><?php echo $title; ?></h4>
                <p class="box-text"><?php echo $text;?></p>
              </div>
            </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>