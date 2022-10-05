<html lang="<?= $kirby->language()->code() ?>">
  <?= snippet('head') ?>
  
  <body>
    <div class="website-wrapper">
      <?= snippet('body_nav') ?>

      <main class="container">
        <div class="row">
          <div class="col-xs-12 col-lg-offset-1 col-lg-10">
            <div class="page-content">
              <header class="content-padding">
                <h1><?= $page->title() ?></h1>
              </header>
              <section class="content-padding">
                <a class="help-block" href="<?= page('home')->url() ?>"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> <span><?= $page->back_link() ?></span></a><br />
                <div class="main-content">
                  <!-- CUSTOM OFFER START -->
                  <div class="row fuerwen__categories">
                    <div class="col-sm-4">
                      <div class="thumbnail">
                        <img src="<?= $page->category1_image()->toFile()->url() ?>" class="img-responsive" alt="arztpraxen" />
                        <div class="caption">
                          <h3><strong><?= $page->category1_name() ?></strong></h3>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="thumbnail">
                        <img src="<?= $page->category2_image()->toFile()->url() ?>" class="img-responsive" alt="kliniken" />
                        <div class="caption">
                          <h3><strong><?= $page->category2_name() ?></strong></h3>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="thumbnail">
                      <img src="<?= $page->category3_image()->toFile()->url() ?>" class="img-responsive" alt="apotheken" />
                        <div class="caption">
                          <h3><strong><?= $page->category3_name() ?></strong></h3>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="row space-before space-after">
                    <div class="col-sm-offset-1 col-sm-10">
                      <div>
                        <?= $page->text()->toBlocks() ?>
                      </div>
                    </div>
                  </div>
                  <!-- CUSTOM OFFER END -->
                </div>
              </section>

              <?= snippet('offer_bottom') ?>
            </div><!-- / page-content -->
          </div><!-- / col -->
        </div><!-- / row -->
      </main>

      <?= snippet('contact') ?>
      <?= snippet('body_footer') ?>
    </div>
  </body>
</html>
