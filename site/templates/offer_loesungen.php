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
                  
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <?= $page->text_left()->toBlocks() ?>
                    </div>
                    <div class="col-sm-6">
                      <?= $page->text_right()->toBlocks() ?>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12">
                      <br><br>
                      <p class="text-center lead"><?= $page->text_center() ?></p>
                      <h2><?= $page->schlagworte_header() ?></h2>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-7">
                      <?php foreach(page()->schlagworte()->toStructure() as $schlagwort): ?>
                        <div class="schlagwort"><?= $schlagwort->schlagwort() ?></div>
                      <?php endforeach ?>
                    </div>
                    <div class="col-sm-5">
                      <img src="<?= $page->schlagwort_image()->toFile()->url() ?>" alt="Megaphon" class="img-responsive" />
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
