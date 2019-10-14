<?php snippet('html-top') ?>

<h1 class="text-2xl font-bold mb-6"><?= $page->heading()->or($page->title()) ?></h1>

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

<?php snippet('html-bottom') ?>
