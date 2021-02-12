<?php
$image_gallery_rpt        = get_field('image_gallery_rpt');
$home_main_title          = get_field('home_main_title');
$home_sub_title           = get_field('home_sub_title');
$house_img_search         = get_field('house_img_search');
$house_link_search         = get_field('house_link_search');

//$header_submit_btn   = get_field('header_submit_btn', 'option');
$header_submit_link  = get_field('header_submit_link', 'option');
$header_submit_icon  = get_field('header_submit_icon', 'option'); 
?>

<div class="slick-wrapper-gallery">
    <?php if($image_gallery_rpt): ?>
      <?php foreach($image_gallery_rpt as $item) :
        $image      = $item['image'];
      ?>
        <div class="image-wrapper" 
          style="background-image: url(<?php echo $image; ?>)"> </div>
        
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <div class="columns">
    <div class="column is-12 no-padd">
      <div class="home-title-wrapper">
        <h1 class="animate__animated animate__fadeIn title"><?php echo $home_main_title; ?></h1>
        <h3 class="animate__animated animate__fadeIn sub-title"> <?php echo $home_sub_title; ?> </h3>
        <div class="btns-wrapper animate__animated animate__fadeIn">
          <a class="house-link-search" href="<?php echo $house_link_search ?>">
            <img
              class="house-search" 
              src="<?php echo $house_img_search; ?>" 
              alt="<?php echo $house_img_search; ?>">
          </a>
          <div class="pay-rent-btn">
            <a 
              class="pay-rent-submit" 
              href="<?php echo $header_submit_link?>"> 
            <img 
              class="pay-rent-img" 
              src="<?php echo $header_submit_icon?>" 
              alt="<?php echo $header_submit_icon?>"> 
              <?//php echo $header_submit_btn; ?><span class="pay-rent">
                Pay Rent
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>