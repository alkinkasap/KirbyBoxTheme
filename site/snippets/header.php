<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
      <meta name="description" content="<?php echo $site->description()->html() ?>">
      <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

      <!-- Bootstrap -->
      <?php echo css('assets/css/bootstrap.min.css') ?>
      <?php echo css('assets/ionicons/css/ionicons.min.css') ?>
      <?php if($favicon = $site->favicon()->toFile()): ?>
        <link rel="icon" href="<?= $favicon->url() ?>" type="image/x-icon">
      <?php endif ?>

      <!-- main css -->
      <?php echo css('assets/css/style.css') ?>

      <!-- modernizr -->
      <?php echo js('assets/js/modernizr.js') ?>

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>

  <body>

      <!-- Preloader -->
      <div id="preloader">
          <div class="pre-container">
              <div class="spinner">
                  <div class="double-bounce1"></div>
                  <div class="double-bounce2"></div>
              </div>
          </div>
      </div>
      <!-- end Preloader -->



      <div class="container-fluid">
          <!-- box-header -->
          <header class="box-header">
              <div class="box-logo">
                  <a class="logo" href="<?php echo url() ?>">
                    <img src="
                    <?php if($logo = $site->image('logo.jpg')): ?>
                      <?php echo $logo->url(); ?>
                    <?php elseif($logo = $site->image('logo.png')): ?>
                      <?php echo $logo->url(); ?>
                    <?php endif ?>
                    " alt="<?php echo $site->title()->html() ?>" width="80" />
                  </a>
              </div>
              <!-- box-nav -->
              <a class="box-primary-nav-trigger" href="#0">
                  <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
              </a>
              <!-- box-primary-nav-trigger -->
          </header>
          <!-- end box-header -->
