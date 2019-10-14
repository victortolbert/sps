<nav class="menu flex">
    <?php foreach ($site->children()->listed() as $subpage): ?>
      <a class="hover:underline ml-6" href="<?= $subpage->url() ?>">
        <?= $subpage->title() ?>
      </a>
    <?php endforeach ?>
</nav>