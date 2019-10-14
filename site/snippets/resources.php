<ul class="resources">
  <?php foreach ($resources as $resource): ?>
  <li>
    <a href="<?= $resource->url() ?>">
      <?= $resource->image()->crop(500) ?>
      <?= $resource->title() ?>
    </a>
  </li>
  <?php endforeach ?>
</ul>