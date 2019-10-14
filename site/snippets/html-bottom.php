<?php snippet('site-footer') ?>

<?php if(kirby()->user()): ?>
  <a href="<?php echo $page->panelUrl(); ?>">Edit Page</a>
<?php endif; ?>
<a href="<?= $site->panelUrl() ?>">Dashboard</a>

<?= js(['build/js/site.js', '@auto']) ?>
<?= js($page->files()->filterBy('extension', 'js')->pluck('url')) ?>
</body>
</html>
