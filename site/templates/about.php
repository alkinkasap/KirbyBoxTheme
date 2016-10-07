<?php snippet('header') ?>

<?php snippet('menu') ?>
    </div>

<?php snippet('topbar') ?>

    <!-- Main container -->
    <div class="container main-container clearfix">
        <div class="col-md-6">
          <?php if($profile = $page->image('profile.jpg')): ?>
            <img src="<?php echo $profile->url() ?>" class="img-responsive" alt="" />
          <?php elseif($profile = $page->image('profile.png')): ?>
            <img src="<?php echo $profile->url() ?>" class="img-responsive" alt="" />
          <?php endif ?>
        </div>
        <div class="col-md-6">
           <h3 class="uppercase"><?php echo $page->title()->html() ?> </h3>
           <h5><?php echo $page->personalmotto()->html() ?></h5>
           <div class="h-30"></div>
            <?php echo $page->text()->kirbytext() ?>
            <div class="h-10"></div>
            <ul class="social-ul">
              <?php if($site->fb() == '1'): ?>
                <li class="box-social"><a href="<?php echo $site->facebook() ?>"><i class="ion-social-facebook"></i></a></li>
                <?php endif ?>
                <?php if($site->tw() == '1'): ?>
                <li class="box-social"><a href="<?php echo $site->twitter() ?>"><i class="ion-social-twitter"></i></a></li>
                <?php endif ?>
                <?php if($site->ins() == '1'): ?>
                <li class="box-social"><a href="<?php echo $site->instagram() ?>"><i class="ion-social-instagram-outline"></i></a></li>
                <?php endif ?>
                <?php if($site->tm() == '1'): ?>
                <li class="box-social"><a href="<?php echo $site->tumblr() ?>"><i class="ion-social-tumblr"></i></a></li>
                <?php endif ?>
                <?php if($site->pn() == '1'): ?>
                <li class="box-social"><a href="<?php echo $site->pinterest() ?>"><i class="ion-social-pinterest"></i></a></li>
                <?php endif ?>
                <?php if($site->drb() == '1'): ?>
                <li class="box-social"><a href="<?php echo $site->dribbble() ?>"><i class="ion-social-dribbble"></i></a></li>
                <?php endif ?>
                <?php if($site->git() == '1'): ?>
                <li class="box-social"><a href="<?php echo $site->github() ?>"><i class="ion-social-github"></i></a></li>
                <?php endif ?>
                <?php if($site->cdp() == '1'): ?>
                <li class="box-social"><a href="<?php echo $site->codepen() ?>"><i class="ion-social-codepen"></i></a></li>
              <?php endif ?>
            </ul>


        </div>
    </div>
    <!-- end Main container -->


<?php snippet('footer') ?>
