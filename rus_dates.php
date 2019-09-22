<?php
  $month = date("m") - 1;
  $rus_months = [
    'дек',
    'янв',
    'февр',
    'март',
    'апр',
    'май',
    'июнь',
    'июль',
    'авг',
    'сен',
    'окт',
    'ноя',
    'дек'
  ];
  $day = date("w");
  $rus_weekdays = [
    'воскресенье',
    'понедельник',
    'вторник',
    'среда',
    'четверг',
    'пятница',
    'суббота',
    'воскресенье'
  ];
  $current_weekday = $rus_weekdays[$day];
  $current_month = $rus_months[$month+1];
  $current_day = date("j");
  ?>