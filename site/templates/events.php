<?php snippet('html-top') ?>
<?php $events = $page->children()->listed() ?>

<article class="container p-6 mx-auto rich-text">
  <header>
    <h1><?= $page->title() ?></h1>

    <p>From this page you can access and register for statewide GASPS trainings, as well as national trainings provided by our federal partners at the Center for the Application of Prevention Technologies (CAPT).</p>

    <p>Current and future training events are listed on this page. Past trainings are removed and web based trainings are archived to the resources page under the “webinar” heading.</p>

    <p><a href="http://ga-sps.org/search?q=webinar">Click Here For All Archived Webinars</a></p>
  </header>
  <?php if ($events->count() > 0): ?>
  <?php foreach ($events as $event): ?>
  <table class="w-full mt-8">
    <thead>
      <tr>
        <th>Dates</th>
        <th>Training</th>
        <th>Modality</th>
        <th class="text-center">CEUs</th>
        <th class="text-center">Archive</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <time class="justify-between lg:flex">
            <span class="whitespace-no-wrap">
              <?= $event->start_date()->toDate('F d, Y') ?>
            </span>

            <span class="text-right whitespace-no-wrap">
              <?= $event->start_time()->toDate('h:i A') ?> — <?= $event->end_time()->toDate('h:i A') ?>
            </span>
          </time>
        </td>

        <td>
          <a href="<?= $event->url() ?>"><?= $event->title()->html() ?></a>
        </td>
          
        <td>
          <?= $event->modality()->html() ?>
        </td>

        <td class="text-center">
          <?php if ($page->has_ceus()->toBool() === true) : ?>
            <?= $event->ceus() ?>
            <?= $event->ceus()->toFloat() ?>
          <?php else:  ?>
            N/A
          <?php endif ?>
        </td>

        <td class="text-center">
        <?php if ($page->isArchived()->toBool() === true) : ?>
          link
        <?php else:  ?>
          N/A
        <?php endif ?>
        <?= $event->isArchived() ?>
        </td>
      </tr>
      <tr>
        <td colspan="5">
          <p>Please join my meeting from your computer, tablet or smartphone.<br/>
          <a href="<?= $event->meeting_url() ?><?= Str::replace($event->meeting_access_code(), '-', '') ?>">
            <?= $event->meeting_url() ?><?= Str::replace($event->meeting_access_code(), '-', '') ?>
          </a></p>

          <?php if ($event->meeting_phone()->isNotEmpty()): ?>
          <dt class="mt-3"><b>You can also dial in using your phone.</b></dt>
          
          <dd>United States: <?= Html::tel($event->meeting_phone()) ?></dd>

          <p><b>Access Code: <?= $event->meeting_access_code() ?></b></p>
          <?php endif ?>
          
          <?= $event->text()->kirbytext() ?>
        </td>
      </tr>
    </tbody>
  </table>
  <?php endforeach ?>
  <?php endif ?>
</article>
<?php snippet('html-bottom') ?>