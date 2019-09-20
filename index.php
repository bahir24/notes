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

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>| Notes</title>
  <link href="./main.9423124b15019cd65bee.css" rel="stylesheet">
</head>

<body>
  <div class="wrapper">
    <section class="hero">
      <div class="container">
        <aside class="aside">
        <?php
        setlocale(LC_ALL, 'ru_RU.UTF-8');
        require 'functions.php';

        for ($previewItem = 1; $previewItem < GetBaseLendth() + 1; $previewItem++) {
        $arCurrString = GetStringById($previewItem);
        $currDate = strtotime($arCurrString[note_date]);        
        $currDateDay = date("d", $currDate);
        $currDateMon = $rus_months[date("m", $currDate)-0];
        $currDateWday = $rus_weekdays[date("w", $currDate)];
        if (!$arCurrString[note_deleted]) {
        echo "
          <div class=\"preview\">
            <date class=\"preview__date\">$currDateDay $currDateMon $currDateWday</date>
            <a class=\"preview__btn preview__btn-show\" href=\"#\">
              <div class=\"preview__btn-text\">править</div>
              <svg class=\"preview__btn-icon\" viewBox=\"0 0 528.899 528.899\" preserveAspectRatio=\"none\">
                <use xlink:href=\"./sprite.svg#edit\"></use>
              </svg>
            </a>
            <h3 class=\"preview__head\">$arCurrString[note_head]</h3>
            <p class=\"preview__text\">$arCurrString[note_text]</p>
            <a class=\"preview__btn preview__btn-del\" href=\"#\">
              <div class=\"preview__btn-text\">удалить</div>
              <svg class=\"preview__btn-icon\" viewBox=\"-40 0 427 427.001\" preserveAspectRatio=\"none\">
                <use xlink:href=\"./sprite.svg#delete\"></use>
              </svg>
            </a>
          </div>";
        } else {}
        }          
          ?>
        </aside>
        <main class="diary">
          <article class="note">
            <h2 class="note__head">Заметка</h2>  
            <form class="note__form" name="note__form">
              <div class="note__row">
                <label class="note__description">
                  <h3 class="note__description-head">Заголовок</h3>
                  <input class="note__description-input" name="note_head" type="text">
                </label>
                <label class="note__description">
                  <h3 class="note__description-head">Дата</h3>
                  <input class="note__description-input" name="note_date" type="text" value = "<?php echo "$current_day $current_month $current_weekday"?>">
                </label>
              </div>
              <label class="note__text">
                <h3 class="note__text-head">Текст заметки</h3>
                <textarea class="note__text-area" name="note_text" type="text"></textarea>
              </label>
            </form>
            <div class="note__row">
              <ul class="note__tasks">
                <li class="note__task">
                  <label class="task">
                    <input class="task__input" disabled>
                    <svg class="task__icon" viewBox="0 0 512 512" preserveAspectRatio="none">
                      <use xlink:href="./sprite.svg#task"></use>
                    </svg>
                  </label>
                </li>
                <li class="note__task">
                  <label class="task">
                    <input class="task__input" disabled>
                    <svg class="task__icon" viewBox="0 0 512 512" preserveAspectRatio="none">
                      <use xlink:href="./sprite.svg#task"></use>
                    </svg>
                  </label>
                </li>
                <li class="note__task">
                  <label class="task">
                    <input class="task__input" disabled>
                    <svg class="task__icon" viewBox="0 0 512 512" preserveAspectRatio="none">
                      <use xlink:href="./sprite.svg#task"></use>
                    </svg>
                  </label>
                </li>
              </ul>
              <button class="note__submit" form="note__form">Сохранить</button>
            </div>
          </article>
          <article class="todo">
            <h2 class="todo__head">TO DO лист</h2>
            <div class="todo__columns">
              <div class="todo__col-right">
                <div class="shedule">
                  <h3 class="shedule-head">Текущие задачи</h3>
                  <ul class="shedule__tasks">
                    <li class="shedule__task"><label class="task"><input class="task__input" disabled><svg
                          class="task__icon" viewBox="0 0 512 512" preserveAspectRatio="none">
                          <use xlink:href="./sprite.svg#task"></use>
                        </svg></label></li>
                    <li class="shedule__task"><label class="task"><input class="task__input" disabled><svg
                          class="task__icon" viewBox="0 0 512 512" preserveAspectRatio="none">
                          <use xlink:href="./sprite.svg#task"></use>
                        </svg></label></li>
                    <li class="shedule__task"><label class="task"><input class="task__input" disabled><svg
                          class="task__icon" viewBox="0 0 512 512" preserveAspectRatio="none">
                          <use xlink:href="./sprite.svg#task"></use>
                        </svg></label></li>
                    <li class="shedule__task"><label class="task"><input class="task__input" disabled><svg
                          class="task__icon" viewBox="0 0 512 512" preserveAspectRatio="none">
                          <use xlink:href="./sprite.svg#task"></use>
                        </svg></label></li>
                  </ul>
                </div>
              </div>
              <div class="todo__col-left">
                <div class="shedule">
                  <h3 class="shedule-head">Новые задачи</h3>
                  <ul class="shedule__tasks">
                    <li class="shedule__task"><label class="task"><input class="task__input" disabled><svg
                          class="task__icon" viewBox="0 0 512 512" preserveAspectRatio="none">
                          <use xlink:href="./sprite.svg#task"></use>
                        </svg></label></li>
                    <li class="shedule__task"><label class="task"><input class="task__input" disabled><svg
                          class="task__icon" viewBox="0 0 512 512" preserveAspectRatio="none">
                          <use xlink:href="./sprite.svg#task"></use>
                        </svg></label></li>
                    <li class="shedule__task"><label class="task"><input class="task__input" disabled><svg
                          class="task__icon" viewBox="0 0 512 512" preserveAspectRatio="none">
                          <use xlink:href="./sprite.svg#task"></use>
                        </svg></label></li>
                    <li class="shedule__task"><label class="task"><input class="task__input" disabled><svg
                          class="task__icon" viewBox="0 0 512 512" preserveAspectRatio="none">
                          <use xlink:href="./sprite.svg#task"></use>
                        </svg></label></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="todo__button"><button class="todo__submit">Сохранить</button></div>
          </article>
        </main>
      </div>
    </section>
  </div>
  <script type="text/javascript" src="./main.2945bca2de8976305cc8.build.js"></script>
  <script type="text/javascript" src="./note_send.js"></script>
  <script type="text/javascript" src="./note_delete.js"></script>
  <script async type="text/javascript" src="./create_preview.js"></script>
</body>

</html>
