<?php snippet('header') ?>
<?php snippet('menu') ?>

<?php snippet('topbar') ?>


    <!-- main-container -->
    <div class="container main-container">
        <div class="col-md-12">
          <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
            <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>" alt="" class="img-responsive" />
          <?php endforeach ?>
            <div class="h-30"></div>
        </div>

        <div class="col-md-12">
           <h3 class="uppercase"><?php echo $page->title()->html() ?> </h3>
           <h5><?php echo $page->projectmotto()->html() ?></h5>
            <div class="h-30"></div>
        </div>

        <div class="col-md-9">
          <?php echo $page->text()->kirbytext() ?>
        </div>

        <div class="col-md-3">
            <ul class="cat-ul">
              <?php  foreach($page->tags()->split(',') as $tag): ?>
                <li><i class="ion-ios-circle-filled"></i> <?php echo ucfirst("$tag") ?></li>
                <?php endforeach ?>
            </ul>
            <div class="h-10"> </div>
        </div>
    </div>
    <!-- end main-container -->


<?php snippet('footer') ?>
