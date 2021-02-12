<?php 
  $online_background_img  = get_field('online_background_img');
  $online_title           = get_field('online_title');
  $online_subtitle        = get_field('online_subtitle');
  $online_icon            = get_field('online_icon');
  $online_portal_text    = get_field('online_portal_text');
?>


<section 
  class="online-portal" 
  style="background-image: url(<?php echo $online_background_img; ?>)">
  <div class="columns">
    <div class="column is-6 animate__animated animate__fadeIn">
      <div class="content-wrapper rg-content-wrapper">
        <h1 class="title"><?php echo $online_title;?></h1>
        <p class="text"><?php echo $online_subtitle; ?></p>
      </div>
    </div>
    <div class="column is-6 animate__animated animate__fadeIn">
      <div class="content-wrapper lf-content-wrapper">
        <img class="online-icon" src="<?php echo $online_icon; ?>" alt="">
        <p class="portal-text"><?php echo  $online_portal_text?></p>
        <div class="Login-Portal-btn">
          <button class="login"> 
          <i class="fa fa-sign-in" aria-hidden="true"></i>
            Log In
          </button>
          <div class="register">
            <span class="account">Don't have an account? </span>
            <span class="sign-up">Sign up</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>