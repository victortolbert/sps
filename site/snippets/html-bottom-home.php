
<?php if(kirby()->user()): ?>
  <a href="<?php echo $page->panelUrl(); ?>">Edit Page</a>
  <a href="<?= $site->panelUrl() ?>">Dashboard</a>
<?php endif; ?>


<?= js(['build/js/site.js', '@auto']) ?>
<?= js($page->files()->filterBy('extension', 'js')->pluck('url')) ?>
</body>
</html>
