<html lang="<?= $kirby->language()->code() ?>">
  <?= snippet('head') ?>
  
  <body>
    <div class="website-wrapper">
      <?= snippet('body_nav') ?>

      <main>
        <div class="index__angebote container-fluid space-after">
          <div id="angebote" class="row">
            <div class="col-xs-12 visible-sm visible-xs">
              <section class="angebot">
                <div class="content">
                  <h2><?= $page->offers_title() ?></h2>
                </div>
              </section><!-- / angebot -->
            </div><!-- / col -->
            <div class="col-xs-12 col-md-3">
              <section class="angebot">
                <a href="<?= page('fuer-wen')->url() ?>">
                  <header class="content">
                    <h3><?= $page->offer_audiences() ?></h3>
                  </header>
                </a>
                <div class="content">
                  <p><?= $page->offer_audiences_text() ?></p>
                  <a href="<?= page('fuer-wen')->url() ?>"><?= $page->find_out_more() ?></a>
                </div><!-- / content -->
              </section><!-- / angebot -->
            </div><!-- / col -->
            <div class="col-xs-12 col-md-3">
              <section class="angebot">
                <a href="<?= page('loesungen')->url() ?>">
                  <header class="content">
                    <h3><?= $page->offer_solutions() ?></h3>
                  </header>
                </a>
                <div class="content">
                  <p><?= $page->offer_solutions_text() ?></p>
                  <a href="<?= page('loesungen')->url() ?>"><?= $page->find_out_more() ?></a>
                </div><!-- / content -->
              </section><!-- / angebot -->
            </div><!-- / col -->
            <div class="col-xs-12 col-md-3">
              <section class="angebot">
                <a href="<?= page('wofuer-wir-stehen')->url() ?>">
                  <header class="content">
                    <h3><?= $page->offer_aboutus() ?></h3>
                  </header>
                </a>
                <div class="content">
                  <p><?= $page->offer_aboutus_text() ?></p>
                  <a href="<?= page('wofuer-wir-stehen')->url() ?>"><?= $page->find_out_more() ?></a>
                </div><!-- / content -->
              </section><!-- / angebot -->
            </div><!-- / col -->
            <div class="col-xs-12 col-md-3">
              <section class="angebot">
                <a href="<?= page('projektablauf')->url() ?>">
                  <header class="content">
                    <h3><?= $page->offer_process() ?></h3>
                  </header>
                </a>
                <div class="content">
                  <p><?= $page->offer_process_text() ?></p>
                  <a href="<?= page('projektablauf')->url() ?>"><?= $page->find_out_more() ?></a>
                </div><!-- / content -->
              </section><!-- / angebot -->
            </div><!-- / col -->
          </div><!-- / row -->
        </div><!-- / container -->

        <div id="ueber" class="index__ueber container">
          <h1><?= $page->about_title() ?></h1>

          <div class="row">
            <div class="col-sm-offset-1 col-sm-10 space-after space-before">
              <img class="img-responsive margin-center portrait" src="<?= $page->people_image()->toFile()->url() ?>" width="1280" />
            </div>
          </div>
          
          <div class="row">
            <div class="col-xs-12 space-after">
                <div><?= $page->about_text() ?></div>
            </div><!-- / col -->
          </div><!-- row -->
        </div><!-- / container -->

        <div id="referenzen" class="index__referenzen">
          <div class="container">
            <h2><?= $page->references_title() ?></h2>

            <div class="row">
              <div class="col-sm-offset-2 col-sm-8">

                <div class="referenzen-wrapper">
                  <?php foreach(page()->referenzen()->toStructure() as $reference): ?>
                    <section class="referenz">
                      <span><?= $reference->name() ?></span>
                    </section>
                  <?php endforeach ?>
                </div>
              </div>
            </div>
          </div><!-- / container -->
        </div><!-- / netzwerk -->
      </main>

      <?= snippet('contact') ?>
      <?= snippet('body_footer') ?>
    </div>
  </body>
</html>
