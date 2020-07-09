<?php snippet('html-top') ?>

<article class="container p-6 mx-auto rich-text">
  <a href="/events">
    &larr; Back
  </a>

  <header class="mt-6">
    <h1><?= $page->title() ?></h1>
  </header>

  <?= $page->text()->kirbytext() ?>
</article>


<?php snippet('html-bottom') ?>
