  <?php snippet('header') ?>
  <?php snippet('menu') ?>
</div>
  <?php snippet('topbar') ?>

    <!-- main container -->
    <div class="main-container portfolio-inner clearfix">
        <!-- portfolio div -->
        <div class="portfolio-div">
            <div class="portfolio">
                <!-- portfolio_filter -->
                <div class="categories-grid wow fadeInLeft">
                    <nav class="categories text-center">
                        <ul class="portfolio_filter">
                            <li><a href="" class="active" data-filter="*">All</a></li>
                          <?php  foreach($site->tags()->split(',') as $tag): ?>
                            <li><a href="" data-filter=".<?php echo  lcfirst("$tag") ?>"> <?php echo ucfirst("$tag") ?></a></li>
                          <?php endforeach ?>
                        </ul>
                    </nav>
                </div>
                <!-- portfolio_filter -->

                <!-- portfolio_container -->
                <div class="no-padding portfolio_container clearfix">


                  <?php foreach(page('projects')->children()->visible() as $project): ?>
                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 <?php echo implode( ' ', $project->tags()->split(',')) ?> ">
                        <a href="<?php echo $project->url() ?>" class="portfolio_item">
                          <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
                            <img src="<?php echo $image->resize(1000, 1000)->url() ?>" alt="<?php echo $project->title()->html() ?>" class="img-responsive" />
                          <?php endif ?>
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span><?php echo $project->title()->html() ?></span>
                                        <em><?php echo $project->text()->excerpt(25) ?></em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->
                    <?php endforeach ?>

                </div>
                <!-- end portfolio_container -->
            </div>
            <!-- portfolio -->
        </div>
        <!-- end portfolio div -->
    </div>
    <!-- end main container -->

<?php snippet('footer') ?>
