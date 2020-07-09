<?php snippet('html-top') ?>

<article class="container p-6 mx-auto">
  <header>
    <h1 class="mb-6 text-2xl font-bold">
      <?= $page->heading()->or($page->title()) ?>
    </h1>
  </header>

  <div class="text">
    <?= $page->text()->kirbytext() ?>
  </div>

  <ul class="gallery">
    <?php foreach($page->images()->sortBy('sort') as $image): ?>
    <li>
      <a href="<?= $image->url() ?>">
        <?= $image->resize(1200) ?>
        <?= $image->caption() ?>
        <?= $image->photographer() ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</article>
<?php snippet('html-bottom') ?>
