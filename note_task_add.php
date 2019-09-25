<?php
$jsonTaskNotesAdd = file_get_contents('php://input'); //получаем json из формы
$arTaskNotesAdd = json_decode($jsonTaskNotesAdd, true);

?>