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
  <script async type="text/javascript" src="./create_preview.js"></script>
  <script defer type="text/javascript" src="./note_delete.js"></script>
</body>

</html>
