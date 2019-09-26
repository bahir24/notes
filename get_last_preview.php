<?php
require 'functions.php';
require 'rus_dates.php';
require 'connection.php'; 
setlocale(LC_ALL, 'ru_RU.UTF-8');

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$lastNotesBase = mysqli_connect($host, $user, $password, $database); //подключаемся к базе
if ( !$lastNotesBase ) die("Error"); //если база не существует возвращаем ошибку

$cmdGetLastNote = "SELECT * FROM notes WHERE note_deleted=0 ORDER BY note_id DESC LIMIT 1";
$queryGetLastNote = mysqli_query($lastNotesBase, $cmdGetLastNote);

$arGetLastNote = Array();

  WHILE($row = mysqli_fetch_array($queryGetLastNote)) {
    $arGetLastNote[head] = $row[1];
    $arGetLastNote[date] = $row[2];
    $arGetLastNote[text] = $row[3];
}
      
      $currDate = strtotime($arGetLastNote[date]);
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
          <h3 class=\"preview__head\">$arGetLastNote[head]</h3>
          <p class=\"preview__text\">$arGetLastNote[text]</p>
          <a class=\"preview__btn preview__btn-del\" href=\"#\">
            <div class=\"preview__btn-text\">удалить</div>
            <svg class=\"preview__btn-icon\" viewBox=\"-40 0 427 427.001\" preserveAspectRatio=\"none\">
              <use xlink:href=\"./sprite.svg#delete\"></use>
            </svg>
          </a>
        </div>";    
  
  mysqli_close($lastNotesBase);
  ?>