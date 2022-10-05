<header>
  <nav class="navbar navbar-fixed-top">
    <div class="nav-top">
      <div class="container">

        <!-- Mobile & Brand -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="logo" href="<?= page('home')->url() ?>">
            <img src="/assets/static/images/logo-2-min.png" alt="SP Healthcare" />
          </a>
        </div><!-- / navbar-header -->

        <!-- Nav Items -->
        <div class="collapse navbar-collapse" id="main-nav">
          <p class="language-links navbar-text navbar-right"><a href="/">DE</a> | <a href="/en">EN</a></p>

          <ul class="nav navbar-nav navbar-right text-right">
            <?php foreach(page('home')->navigation_links()->toStructure() as $nav_item): ?>
              <li><a href="<?= $nav_item->link() ?>"><?= $nav_item->label() ?></a></li>
            <?php endforeach ?>
          </ul>
        </div><!-- / navbar-collapse -->

      </div><!-- / container-fluid -->
    </div>

    <div class="nav-bottom"></div>
  </nav>

  <?php if($page->header_image()->isNotEmpty()): ?>
    <div class="header-image" style="background-image: url('<?= $page->header_image()->toFile()->url() ?>');"></div>
  <?php endif ?>
  
</header>
