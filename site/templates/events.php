<?php snippet('html-top') ?>

<section class="events">

  <h1><?= $page->title()->html() ?></h1>

  <?php
  $events = $page->children()->listed();
  if ($events->count() > 0): ?>
  <ul>
    <?php foreach ($events as $event): ?>
    <li class="event">

        <header>
          <h3><a href="<?= $event->url() ?>"><?= $event->title()->html() ?></a></h3>
          <time><?= $event->from()->toDate('d.m.Y') ?> - <?= $event->to()->toDate('d.m.Y') ?></time>
        </header>
        <main>
          <?= $event->text()->kirbytext() ?>
          <?php if ($image = $event->image()): ?>
          <figure><?= $event->image() ?></figure>
          <?php endif ?>
          <a href="<?= $event->link() ?>">Link</a>
        </main>
        <footer><?= $event->location()->html() ?></footer>
    </li>
    <?php endforeach ?>
  </ul>
  <?php endif ?>
</section>

<?php snippet('html-bottom') ?>