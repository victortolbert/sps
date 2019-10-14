<?php snippet('html-top') ?>

<?= $page->company() ?>
<?= $page->text()->kirbytext() ?>

<h1>Team Members</h1>

<ul>
  <?php foreach ($page->team()->toStructure() as $member): ?>
  <li>
    <a href="<?= $member->url() ?>">
      <?= $member->name() ?>
    </a>
  </li>
  <?php endforeach ?>
</ul>

<?php snippet('html-bottom') ?>