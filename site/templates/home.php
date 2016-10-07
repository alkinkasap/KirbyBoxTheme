<?php snippet('header') ?>
<?php snippet('menu') ?>

    <!-- box-intro -->
    <?php if($background = $page->image('background.jpg')): ?>
    <section class="box-intro" style="
    background: linear-gradient( rgba(255, 255, 255, .1), rgba(255, 255, 255, .1)), url(<?php echo $background->url(); ?>);
    background-size: cover; background-attachment: fixed; background-position: center center; text-align: center; " >
    <?php elseif($background = $page->image('background.png')): ?>
    <section class="box-intro" style="
    background: linear-gradient( rgba(255, 255, 255, .1), rgba(255, 255, 255, .1)), url(<?php echo $background->url(); ?>);
    background-size: cover; background-attachment: fixed; background-position: center center; text-align: center; " >
    <?php endif; ?>

        <div class="table-cell">
          <h1 class="box-headline letters rotate-2">
                <span class="box-words-wrapper">

                  <b class="is-visible">
                    <?php echo $page->keyword1()->html() ?> .
                  </b>
                  <b>
                    <?php echo $page->keyword2()->html() ?> .
                  </b>
                  <b>
                    <?php echo $page->keyword3()->html() ?> .
                  </b>

                </span>
          </h1>
          <h5><?php echo $page->motto()->kirbytext() ?> </h5>
        </div>

        <div class="mouse">
          <div class="scroll"></div>
        </div>


    </section>
    <!-- end box-intro -->
</div>


<!-- portfolio div -->
<div class="portfolio-div">
    <div class="portfolio">
        <div class="no-padding portfolio_container">

          <?php foreach(page('projects')->children()->visible()->limit(8) as $project): ?>
              <!-- single work -->
              <div class="col-md-3 col-sm-6  fashion logo">
                  <a href="<?php echo $project->url() ?>"  class="portfolio_item">
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

<?php snippet('footer') ?>
