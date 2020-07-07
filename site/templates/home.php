<?php snippet('html-top-home') ?>
<?php snippet('nav') ?>


<?php snippet('resources', [
  'resources' => page('resources')
    ->children()
    ->listed()
    ->filterBy('featured', true)
    ->shuffle()
    ->limit(3)
]) ?>

<?php snippet('html-bottom-home') ?>