<?php snippet('html-top-home') ?>

<div class="flex items-center justify-center w-full min-h-screen">
<ul class="flex flex-col items-center justify-center">
  <li><a href="/resources" target="_blank">Resources</a></li>
  <li><a href="/training" target="_blank">Training</a></li>
</ul>
</div>

<?php snippet('resources', [
  'resources' => page('resources')
    ->children()
    ->listed()
    ->filterBy('featured', true)
    ->shuffle()
    ->limit(3)
]) ?>

<?php snippet('html-bottom-home') ?>