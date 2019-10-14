<?php snippet('html-top') ?>

<h1 class="text-2xl font-bold text-purple-700 mb-6"><?= $page->title() ?></h1>

<?php snippet('resources', [
  'resources' => $page->children()->listed()
]) ?>

<?php snippet('html-bottom') ?>