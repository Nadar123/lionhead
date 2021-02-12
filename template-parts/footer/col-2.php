<?php
  $footer_stay_contact_title   = get_field('footer_stay_contact_title', 'option');
  $footer_stay_contact_rpt     = get_field('footer_stay_contact_rpt', 'option');
  $footer_associations_title   = get_field('footer_associations_title', 'option');
  $footer_associations_icon    = get_field('footer_associations_icon', 'option');
  $footer_associations_link    = get_field('footer_associations_link', 'option');

?>

<div class="column is-4">
  <div class="footer-stay-contact">
    <h3><?php echo $footer_stay_contact_title; ?></h3>
  </div>
  <div class="content">
    <?php if($footer_stay_contact_rpt): ?>
      <?php foreach($footer_stay_contact_rpt as $item) : 
        $icon      = $item['icon'];
        $link      = $item['link'];
      ?>
        <a class="link" href="<?php echo $link ?>">
          <img class="icon" src="<?php echo $icon; ?>" alt="">
        </a>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="associations-wrapper">
      <h3 class="associations-title"><?php echo $footer_associations_title ?></php></h3>
      <a class="link" href="<?php echo $footer_associations_link;?>">
        <img 
          class="associations-image" 
          src="<?php echo $footer_associations_icon['url']; ?>" 
          alt="<?php echo $footer_associations_icon; ?>">
      </a>
    </div>
  </div>