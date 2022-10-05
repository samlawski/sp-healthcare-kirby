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
                  <h2>
                    <?= $page->titel_1() ?>
                  </h2>

                  <div class="support_types">
                    <?php foreach(page()->main_points()->toStructure() as $point): ?>
                      <div class="support_type__box">
                        <h4><?= $point->title() ?></h4>
                        
                        <ul>
                          <?php foreach($point->body()->toStructure() as $list_item): ?>
                            <li><?= $list_item->text() ?></li>
                          <?php endforeach ?>
                        </ul>
                      </div>
                    <?php endforeach ?>
                  </div>

                  <h2>
                    <?= $page->titel_2() ?>
                  </h2>

                  <div class="text-center">
                    <p><strong><?= $page->subtitle_2() ?></strong></p>
                  </div>

                  <div class="row">
                    <div class="col-sm-offset-2 col-sm-8">
                      <div class="vorteile">
                        <?php foreach(page()->vorteile()->toStructure() as $vorteil): ?>
                          <div class="vorteil"><?= $vorteil->schlagwort() ?></div>
                        <?php endforeach ?>
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
