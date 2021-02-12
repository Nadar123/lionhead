<?php
$online_portal_title       = get_field('online_portal_title', 'option');

$online_portal_login       = get_field('online_portal_login', 'option');
$online_portal_login_link  = get_field('online_portal_login_link', 'option');

$online_portal_signup      = get_field('online_portal_signup', 'option');
$online_portal_signup_link = get_field('online_portal_signup_link', 'option');


$online_owner_title        = get_field('online_owner_title', 'option');
$owner_portal_login        = get_field('owner_portal_login', 'option');
$owner_portal_login_link   = get_field('owner_portal_login_link', 'option');
$owner_portal_signup       = get_field('owner_portal_signup', 'option');
$owner_portal_signup_link  = get_field('owner_portal_signup_link', 'option');
?>

<div class="column is-4">
  <div class="login-portal">
    <div class="online-title">
      <p class="title"> <?php echo $online_portal_title ;?></p>
    </div>
    <div class="login-signup">
      <a class="login-link" href="<?php echo $online_portal_login_link; ?>">
        <span class="text"><?php echo $online_portal_login; ?></span>
      </a> |
      <a class="signin-link" href="<?php $online_portal_signup_link; ?>">
        <span class="text"><?php echo $online_portal_signup; ?></span>
      </a>
    </div>
    <div class="signup-title">
      <p class="title"> <?php echo $online_owner_title ;?></p>
    </div>
    <div class="owner-login-signup">
      <a class="login-link" href="<?php echo $owner_portal_login_link; ?>">
        <span class="text"><?php echo $owner_portal_login; ?></span>
      </a> |
      <a class="signin-link" href="<?php $owner_portal_signup_link; ?>">
        <span class="text"><?php echo $owner_portal_signup; ?></span>
      </a>
    </div>
  </div>
</div>

