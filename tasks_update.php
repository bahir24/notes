<?php
require 'functions.php';
require 'connection.php'; 
$jsonUpdateTasks=file_get_contents('php://input'); //получаем json из формы
$arUpdateTasks=json_decode($jsonUpdateTasks, true); //декодируем json в массив
print_r($arUpdateTasks);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$baseUpdateTasks = mysqli_connect($host, $user, $password, $database); //подключаемся к базе
if ( !$baseUpdateTasks ) die("Error"); //если база не существует возвращаем ошибку
// $tomorrow = ;
// $tomorrow->strtotime('+1 day');
// $tomorrow->format('d-m-y');
$cmdMaxIdTasksUpdate = "SELECT MAX(task_id) FROM tasks";
$queryMaxIdTasksUpdate = mysqli_query($baseUpdateTasks, $cmdMaxIdTasksUpdate);
$responseMaxIdTasksUpdate = mysqli_fetch_array($queryMaxIdTasksUpdate);
$maxIdTasksUpdate = $responseMaxIdTasksUpdate[0];
if ($arUpdateTasks[dateTask] != 'now') {
  $cmdBaseUpdateTasks = "INSERT INTO tasks (task_id, task_content, task_date) VALUES ($maxIdTasksUpdate + 1, \"$arUpdateTasks[text]\", NOW())";
  // var_dump($cmdBaseUpdateTasks);
} else {
$cmdBaseUpdateTasks = "UPDATE tasks SET task_content = $arUpdateTasks[text], task_date = NOW(), task_ready = $arUpdateTasks[text]) WHERE task_id = $arUpdateTasks[id]";
};

mysqli_query($baseUpdateTasks, $cmdBaseUpdateTasks);



mysqli_close($baseUpdateTasks);
?>