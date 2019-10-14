<main>
  <?php foreach ($page->children()->listed() as $part) : ?>
    <section class="<?= $part->intendedTemplate() ?>">
      <?php snippet($part->intendedTemplate(), compact('part')) ?>
    </section>
  <?php endforeach ?>
</main>