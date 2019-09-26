<?php
require 'functions.php';
require 'rus_dates.php';
require 'connection.php'; 
  // echo var_dump($baseConfig);
  setlocale(LC_ALL, 'ru_RU.UTF-8');
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $notesBase = mysqli_connect($host, $user, $password, $database); //подключаемся к базе
  if ( !$notesBase ) die("Error"); //если база не существует возвращаем ошибку

  $cmdGetNotes = "SELECT * FROM notes WHERE note_deleted = 0";
  $queryGetNotes = mysqli_query($notesBase, $cmdGetNotes);

  $arGetNotes = Array();
  $arGetNote = Array();

    WHILE($row = mysqli_fetch_array($queryGetNotes)) {
      $arGetNote[head] = $row[1];
      $arGetNote[date] = $row[2];
      $arGetNote[text] = $row[3];
      $arGetNote[task0] = $row[5];
      $arGetNote[task1] = $row[6];
      $arGetNote[task2] = $row[7];

    $arGetNotes[$row[0]] = $arGetNote;
  }
       for ($previewItem = 0; $previewItem < count($arGetNotes); $previewItem++) {
        $arGetNote = $arGetNotes[array_keys($arGetNotes)[$previewItem]];
        $currDate = strtotime($arGetNote[date]);
        $currDateDay = date("d", $currDate);
        $currDateMon = $rus_months[date("m", $currDate)-0];
        $currDateWday = $rus_weekdays[date("w", $currDate)];

    echo "<div class=\"preview\">
            <date class=\"preview__date\">$currDateDay $currDateMon $currDateWday</date>
            <a class=\"preview__btn preview__btn-show\" href=\"#\">
              <div class=\"preview__btn-text\">править</div>
              <svg class=\"preview__btn-icon\" viewBox=\"0 0 528.899 528.899\" preserveAspectRatio=\"none\">
                <use xlink:href=\"./sprite.svg#edit\"></use>
              </svg>
            </a>
            <h3 class=\"preview__head\">$arGetNote[head]</h3>
            <p class=\"preview__text\">$arGetNote[text]</p>
            <a class=\"preview__btn preview__btn-del\" href=\"#\">
              <div class=\"preview__btn-text\">удалить</div>
              <svg class=\"preview__btn-icon\" viewBox=\"-40 0 427 427.001\" preserveAspectRatio=\"none\">
                <use xlink:href=\"./sprite.svg#delete\"></use>
              </svg>
            </a>
            <div class=\"preview__note-tasks\">
              <p class=\"preview__note-task0\">$arGetNote[task0]</p>
              <p class=\"preview__note-task1\">$arGetNote[task1]</p>
              <p class=\"preview__note-task2\">$arGetNote[task2]</p>
            </div>

          </div>";    
  }
  mysqli_close($notesBase);
  ?>