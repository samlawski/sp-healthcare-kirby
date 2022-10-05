<div class="andere-angebote">
  <?php foreach($page->other_offer_paths()->toStructure() as $offer): ?>
    <a href="/<?= $offer->path() ?>" class="angebot content-padding" style="background-image: linear-gradient( rgba(0,0,0,.3), rgba(0,0,0,.3) ), url('<?= page($offer->path())->header_image()->toFile()->url() ?>');">
      <span class="hidden-xs hidden-sm"><?= page($offer->path())->title() ?></span>
    </a><!-- / angebot -->
  <?php endforeach ?>
</div><!-- / andere-angebote  -->