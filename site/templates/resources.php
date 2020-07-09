<?php snippet('html-top') ?>

<article class="container p-6 mx-auto">
  <header>
    <h1 class="mb-6 text-2xl font-bold">
      <?= $page->heading()->or($page->title()) ?>
    </h1>
  </header>

  <?php snippet('resources', [
    'resources' => $page->children()->listed()
  ]) ?>
</article>

<?php snippet('html-bottom') ?>