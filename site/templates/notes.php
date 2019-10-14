<?php snippet('html-top') ?>

<main>
<?= $page->text()->kt() ?>
  <div class="notes">
   
    <?php foreach ($page->children()->listed()->sortBy('date', 'desc') as $note): ?>
    <article class="note">
      <header class="note-header">
        <a href="<?= $note->url() ?>">
          <h2><?= $note->title() ?></h2>
          <time><?= $note->date()->toDate('d F Y') ?></time>

        </a>
      </header>
    </article>
    <?php endforeach ?>
  </div>
</main>

<?php snippet('html-bottom') ?>
