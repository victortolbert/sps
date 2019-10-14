  if (jQuery.isFunction(jQuery.fn.countDown)) {
    $('#qcEventCountDown').countDown({
      targetDate: {
        'day': <?= $site->day() ?>,
        'month': <?= $site->month() ?>,
        'year': <?= $site->year() ?>,
        'hour': 0,
        'min': 0,
        'sec': 0
      },
      omitWeeks: true
    });
  }