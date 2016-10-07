<!-- Top bar -->
<?php if($background = $page->image('background.jpg')): ?>
<div class="top-bar" style="background: linear-gradient( rgba(255, 255, 255, .7), rgba(255, 255, 255, .7)), url(<?php echo $background->url(); ?>);
  background-size: cover; background-attachment: fixed; background-position: center center; text-align: center;">

<?php elseif($background = $page->image('background.png')): ?>
<div class="top-bar" style="background: linear-gradient( rgba(255, 255, 255, .7), rgba(255, 255, 255, .7)), url(<?php echo $background->url() ?>);
  background-size: cover; background-attachment: fixed; background-position: center center; text-align: center;">

<?php elseif($image = $site->image('background.jpg')): ?>
<div class="top-bar" style="background: linear-gradient( rgba(255, 255, 255, .7), rgba(255, 255, 255, .7)), url(<?php echo $image->url() ?>);
  background-size: cover; background-attachment: fixed; background-position: center center; text-align: center;">

<?php elseif($image = $site->image('background.png')): ?>
<div class="top-bar" style="background: linear-gradient( rgba(255, 255, 255, .7), rgba(255, 255, 255, .7)), url(<?php echo $image->url() ?>);
  background-size: cover; background-attachment: fixed; background-position: center center; text-align: center;">

<?php endif; ?>

    <h1 style="color: #393939"><?php echo $page->description()->html() ?> </h1>
</div>
<!-- end Top bar -->
