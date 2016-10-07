
        <!-- nav -->
        <nav>
            <ul class="box-primary-nav">
            <?php foreach($pages->visible() as $p): ?>
              <li  ><a href="<?php echo $p->url() ?>"> <?php echo $p->title()->html() ?></a><i <?php e($p->isOpen(), ' class="ion-ios-circle-filled color"') ?> ></i></li>
            <?php endforeach ?>




                <li class="box-label">Follow me</li>
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
        </nav>
        <!-- end nav -->
