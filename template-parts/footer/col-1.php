<?php
$footer_contact_title   = get_field('footer_contact_title', 'option');
$footer_contact_rpt     = get_field('footer_contact_rpt', 'option');
?>

<div class="column is-4">
  <div class="footer-title">
    <h3><?php echo $footer_contact_title; ?></h3>
  </div>
  <?php if($footer_contact_rpt): ?>
    <?php foreach($footer_contact_rpt as $item) : 
      $icon      = $item['icon'];
      $text      = $item['text'];
    ?>
    <div class="content">
      <img class="icon" src="<?php echo $icon; ?>" alt="">
      <p class="text"><?php echo $text ?></p>
    </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>