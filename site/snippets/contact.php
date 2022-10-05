<div id="contact" class="container space-before">
  <div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
      <h2>
        <?= page('kontakt')->title() ?>
      </h2>
      <div class="text-center cta-box">
        <div class="lead cta-call">
          <p><?= page('kontakt')->phone() ?></p>
        </div>
        <hr />
        <small><?= page('kontakt')->email_label() ?></small>
        <br />

        <form method="post" action="<?= $page->url() ?>#contact">
          <input type="email" name="email" class="form-control" id="InputEmail" placeholder="<?= page('kontakt')->form_email() ?>" value="<?= esc($data['email'] ?? '', 'attr') ?>" required /><br />
          <?= isset($alert['email']) ? '<p style="color: yellow;">' . esc($alert['email']) . '</p>' : '' ?>

          <input type="text" name="name" class="form-control" id="InputName" placeholder="<?= page('kontakt')->form_name() ?>" value="<?= esc($data['name'] ?? '', 'attr') ?>" required /><br />
          <?= isset($alert['name']) ? '<p style="color: yellow;">' . esc($alert['name']) . '</p>' : '' ?>

          <textarea name="text" class="form-control" rows="4" id="InputNachricht" placeholder="<?= page('kontakt')->form_message() ?>" required><?= esc($data['text'] ?? '') ?></textarea><br />
          <?= isset($alert['text']) ? '<p style="color: yellow;">' . esc($alert['text']) . '</p>' : '' ?>

          <div class="honeypot" style="opacity: 0; height: 1px; overflow: hidden;">
            <label for="website">Website <abbr title="required">*</abbr></label>
            <input type="url" id="website" name="website" tabindex="-1">
          </div>

          <input type="hidden" name="page" value="<?= $page->url() ?>" tabindex="-1">
          <input type="hidden" name="language" value="<?= $kirby->language()->code() ?>" tabindex="-1">
          <input type="hidden" name="contact" value="true" tabindex="-1">
          <button type="submit" name="submit" class="btn btn-cta"><?= page('kontakt')->form_button() ?></button>
        </form>

        <?php if($success): ?>
          <div class="alert alert-success" role="alert">
            <h3><?= page('kontakt')->success_title() ?></h3>
            <p><?= page('kontakt')->success_body() ?></p>
          </div>
        <?php elseif(isset($alert['error'])): ?>
          <div class="alert alert-danger" role="alert">
            <h3><?= page('kontakt')->fail_title() ?>.</h3>
            <p><?= $alert['error'] ?></p>
            <p><?= page('kontakt')->fail_body() ?></p>
          </div>
        <?php endif ?>
      </div><!-- /cta-box -->
    </div><!-- / col -->
  </div><!-- row -->
</div><!-- / container -->
