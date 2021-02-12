<?php 

$sidebar_title  = get_field('sidebar_title', 'option');
$sidebar_rpt    = get_field('sidebar_rpt', 'option'); 

?>

<div class="sidebar-wrapper">
  <div class="title">
    <h5><?php echo $sidebar_title; ?></h5>
  </div>
  <?php if($sidebar_rpt  ): ?>
    <?php foreach($sidebar_rpt as $item ) :
    $title      = $item['title'];
    $text       = $item['text'];
    $link       = $item['link']
    ?>
    <div class="content-wrappaer">
      <h5 class="title"><?php echo $title ?></h5>
      <a class="link" href="<?php echo $link ?>">
        <span class="text"> <?php echo $text ?> </span>
      </a>
    </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>