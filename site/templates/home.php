<?php snippet('html-top') ?>

<?php snippet('resources', [
  'resources' => page('resources')
    ->children()
    ->listed()
    ->filterBy('featured', true)
    ->shuffle()
    ->limit(3)
]) ?>

<?php snippet('html-bottom') ?>