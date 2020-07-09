  </main>
  <footer class="container p-6 mx-auto">
    <nav class="flex space-x-3">
      <?php if(kirby()->user()): ?><a href="<?php echo $page->panelUrl(); ?>">Edit this page</a><?php endif; ?>
    </nav>
  </footer>
</div>
<?= js(['build/js/site.js', '@auto']) ?>
<?= js($page->files()->filterBy('extension', 'js')->pluck('url')) ?>
</body>
</html>
