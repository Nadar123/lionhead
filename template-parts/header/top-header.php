<?php
    $header_phone        = get_field( 'header_phone', 'option' );
    $header_fax          = get_field( 'header_fax', 'option' );
    $header_mail         = get_field( 'header_mail', 'option' );

    $header_phone_link   = get_field( 'header_phone_link', 'option' );
    $header_fax_link     = get_field( 'header_fax_link', 'option' );
    $header_mail_link    = get_field( 'header_mail_link', 'option' );
    $header_submit_btn   = get_field('header_submit_btn', 'option');
    $header_submit_link  = get_field('header_submit_link', 'option');
    $header_submit_icon  = get_field('header_submit_icon', 'option'); 
?>

<div class="top-header">
  <ul class="header-list">
    <li class="header-item"> 
      <a href="tel:<?php echo $header_phone_link?>">
        <i class="fa fa-mobile" aria-hidden="true"></i>
        <?php echo $header_phone ?>
      </a> 
    </li>
    <li class="header-item"> 
      <a href="<?php echo $header_fax_link?>">
        <i class="fa fa-print" aria-hidden="true"></i>
        <?php echo $header_fax ?>
      </a> 
    </li>
    <li class="header-item">
      <a href="mailto:<?php echo $header_mail_link?>">
        <i class="fa fa-envelope-o" aria-hidden="true"></i>
        <?php echo $header_mail ?>
      </a>
    </li>
      <!-- <div class="pay-rent-btn">
        <a 
          class="pay-rent-submit" 
          href="<?//php echo $header_submit_link?>"> 
        <img 
          class="pay-rent-img" 
          src="<?//php echo $header_submit_icon?>" 
          alt="<?//php echo $header_submit_icon?>"> 
          <?//php echo $header_submit_btn; ?>
        </a>
      </div>
    <li>
    </li> -->
  </ul>
</div>