<?php snippet('html-top') ?>
<article class="container p-6 mx-auto rich-text">
  <header>
    <h1 class="text-2xl font-bold text-grey-700">
      <?= $page->title() ?>
    </h1>
  </header>

  <?= $page->text()->kirbytext() ?>
</article>
<?php snippet('html-bottom') ?>
