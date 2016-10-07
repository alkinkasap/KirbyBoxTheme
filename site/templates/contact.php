<?php snippet('header') ?>

<style media="text/css">
  .display-none{
    display: none;
  }
</style>

<?php snippet('menu') ?>
</div>
<?php snippet('topbar') ?>








    <!-- main-container -->
    <div class="container main-container">
        <div class="col-md-6">
            <form action="https://formspree.io/<?php echo $page->youremail()?>" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="text" name="name">
                            <span>your name</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="email" name="_replyto">
                            <span>your email</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-contact">
                            <input type="text" name="object">
                            <span>topic</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="textarea-contact">
                            <textarea name="message"></textarea>
                            <span>message</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="hidden" name="_next" value="<?php echo url(page() . '/' . url::paramsToString(['contact' => 'true'])) ?>" />
                        <input type="text" name="_gotcha" style="display:none" />
                        <input type="submit" class="btn btn-box" value="Send">
                        <input type="hidden" name="_subject" value="Contact Page" />
                    </div>
                </div>
            </form>
            <?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
              if (strpos($url,'true') !== false) {
                ?>
                <br>
                <div class="col-md-12 alert alert-success center-block submit-success display-none"><?php echo $page->thankyou()?><br></div>
                <?php
              }
              ?>

        </div>




        <div class="col-md-6">
            <h3 class="text-uppercase"><?php echo $page->title()?></h3>
            <h5><?php echo $page->contactmotto()->html() ?></h5>
            <div class="h-30"></div>
            <?php echo $page->text()->kirbytext() ?>
            <div class="contact-info">
            <?php if($page->tel() == '1'): ?>
          <p><i class="ion-android-call"></i> <?php echo $page->phone()?></p>
            <?php endif ?>
            <?php if($page->mail() == '1'): ?>
          <p><i class="ion-ios-email"></i> <?php echo $page->youremail()?></p>
            <?php endif ?>
            <?php if($page->map() == '1'): ?>
          <p><i class="ion-map"></i> <?php echo $page->city()?></p>
            <?php endif ?>
            </div>
        </div>


    </div>
    <!-- end main-container -->

<?php snippet(footer) ?>
