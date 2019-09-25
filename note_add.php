<?php
setlocale(LC_ALL, 'ru_RU.UTF-8');
$json=file_get_contents('php://input'); //получаем json из формы
$data=json_decode($json,true); //декодируем json в массив
print_r($data);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$base = mysqli_connect('localhost', "admin", "Raggacore24", 'test'); //подключаемся к базе
if ( !$base ) die("Error"); //если база не существует возвращаем ошибку

$max_id_command = "SELECT MAX(note_id) FROM notes";
$max_id_query = mysqli_query($base, $max_id_command);
$max_id_response = mysqli_fetch_array($max_id_query);
$max_id = $max_id_response[0];

$query = "INSERT INTO notes (note_id, note_head, note_date, note_text, note_task0, note_task1, note_task2) VALUES ($max_id + 1, \"$data[head]\", NOW(), \"$data[text]\", \"$data[task0]\", \"$data[task1]\", \"$data[task2]\")";

mysqli_query($base, $query);

mysqli_close($base);
?>