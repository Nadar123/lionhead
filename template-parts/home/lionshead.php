<?php
  $lion_background   = get_field('lion_background');
  $lion_title        = get_field('lion_title');
  $lion_text         = get_field('lion_text');
  ?>
<section 
  class="loinshead-wrapper" 
  style="background-image: url(<?php echo $lion_background; ?>)">
  <div class="columns">
    <div class="column is-12">
      <div class="content">
        <h3 class="title"> 
          <span class="before-title">There is a differene</span> 
          <?php echo $lion_title;?>
        </h3>
        <p><?php echo $lion_text; ?></p>
      </div>
      <!-- <canvas id="c"> 
      </canvas> -->
    </div>
  </div>
  <div class="overlay"></div>
</section>
