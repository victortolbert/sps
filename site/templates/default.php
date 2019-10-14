<?php snippet('html-top') ?>

<?php dump($page->blueprint()); ?>
<?php
// $kirby->collection("articles");
// $kirby->collection("admins");
// $kirby->collection("resource-covers");
// $kirby->collection("articles/latest");
?>
<h1 class="text-red-700">
    <?= $page->title() ?>
</h1>

<h1 class="text-2xl font-bold text-red-700 mb-6">
  <?= $page->title() ?>
</h1>

<?= $page->text() ?>

<?php
    $image = new Asset('assets/images/hero-default.jpg');
    echo $image->resize(50)->url();
  ?>

<?php
  // $asset = new Asset("assets/images/someimage.jpg");
  // echo $asset->resize(100);
?>

<?php if ($tag->file($tag->poster)): ?>
  // do stuff
<?php endif ?>


<?php foreach ($page->social()->toStructure() as $social): ?>
 <li><?= html::a($social->url(), $social->platform(), ['target' => '_blank']) ?></li>
 <?php endforeach ?>

<?php snippet('html-bottom') ?>
