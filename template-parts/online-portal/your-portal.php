<?php 
  $portal_phone_img       = get_field('portal_phone_img');
  $portal_way_title       = get_field('portal_way_title');
  $portal_way_text        = get_field('portal_way_text');
  $portal_palm_text       = get_field('portal_palm_text');
  $download_text          = get_field('download_text');

  $app_apple_btn          = get_field('app_apple_btn');
  $app_apple_btn_link     = get_field('app_apple_btn_link');
  $google_play_btn        = get_field('google_play_btn');
  $google_play_btn_link   = get_field('google_play_btn_link');
?>


<section class="your-portal">
  <div class="columns">
    <div class="column is-6">
      <div class="image-wrapper">
        <img 
          class="phone" 
          src="<?php echo $portal_phone_img; ?>"
          alt="<?php echo $portal_phone_img; ?>">
      </div>
    </div>
    <div class="column is-6">
      <div class="portal-content">
        <h3 class="portal-title"><?php echo $portal_way_title ?></h3>
        <p class="portal-text"> <?php echo $portal_way_text; ?></p>
        <p class="quote"><?php echo $portal_palm_text; ?></p>
        <p class="download"><?php echo $download_text; ?></p>

        <div class="appstore-wrapper">
          <a 
            target="_blank" 
            class="appstore-btn" 
            href="<?php echo $app_apple_btn_link; ?>">
              <img src="<?php echo $app_apple_btn ?>" alt="">
          </a>
          <a 
            target="_blank" 
            class="google-btn" 
            href="<?php echo $google_play_btn_link; ?>">
              <img src="<?php echo $google_play_btn ?>" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>