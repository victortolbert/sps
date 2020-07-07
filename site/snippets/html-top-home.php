<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php if ($page->isHomePage()): ?>
    <title><?= $site->title() ?></title>
  <?php else: ?>
    <title><?= $page->title() . ' – ' . $site->title() ?></title>
  <?php endif ?>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="/favicon.ico">
  <?= css(['assets/css/site.css', '@auto']) ?>
  <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons|Audiowide">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <?= css($page->files()->filterBy('extension', 'css')->pluck('url')) ?>
  <script type="text/javascript">
    window.__INITIAL_STATE__ = '{ cars: [{ id: 1, name: "Buick" }] }'
  </script>
</head>
<body>
