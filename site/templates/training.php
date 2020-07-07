<?= $page->start_date()->toDate() ?>

<div id="qcEventBanner" class="col-6 col">
  <ul>
    <?php foreach ($page->events()->toStructure() as $event): ?>
    <li><b><?= $event->name() ?></b> <?= $event->description() ?></li>
    <?php endforeach ?>
  </ul>
</div>