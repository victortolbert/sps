<?php snippet('html-top') ?>

<h1 class="text-2xl font-bold"><?= $page->title() ?></h1>
<?= smartypants($page->title()) ?>

<?php snippet('resources', [
  'resources' => page('resources')
    ->children()
    ->listed()
    ->filterBy('featured', true)
    ->shuffle()
    ->limit(3)
]) ?>

<?php
  // you need a Kirby image object like this
  $image = $page->images()->first();

  // crop a square of 200px x 200px
  echo $image->focusCrop(200);

  // crop a rectangle of 300px x 200px
  echo $image->focusCrop(300, 200);

  // crop a rectangle of 200px x 400px with a quality of 80%
  echo $image->focusCrop(200, 400, ['quality' => 80]);

  // crop a grayscale square of 300px x 300px
  echo $image->focusCrop(300, 300, ['grayscale' => true]);

  // crop a rectangle of 200px x 300px and force coordinates (overrides user input)
  echo $image->focusCrop(200, 300, ['focusX' => 0.3, 'focusY' => 0.6]);
?>


<!-- markdown($page->text()) -->

<?php snippet('html-bottom') ?>
