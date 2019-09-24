<?php 
setlocale(LC_ALL, 'ru_RU.UTF-8');
$jsonEditNote=file_get_contents('php://input'); //получаем json из формы
$arEditNote=json_decode($jsonEditNote, true); //декодируем json в массив

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$baseEditNote = mysqli_connect('localhost', "admin", "Raggacore24", 'test'); //подключаемся к базе
if ( !$baseEditNote ) die("Error"); //если база не существует возвращаем ошибку
  $cmdIdEditNote = "SELECT note_id FROM notes WHERE note_deleted = 0";
  $queryIdEditNote = mysqli_query($baseEditNote, $cmdIdEditNote);
  $arIdEditNote = array();  
  WHILE($row = mysqli_fetch_array($queryIdEditNote)) {
    $arIdEditNote[] = $row[0];
  }
  $findIdEditNote = $arIdEditNote[$arEditNote[note_id]];
  $headEditNote = $arEditNote[head];
  $textEditNote = $arEditNote[text];
  $cmdEditNote = "UPDATE notes SET note_head = \"$headEditNote\", note_text = \"$textEditNote\" WHERE note_id = $findIdEditNote";
  echo "var_dump($cmdEditNote)";
  $queryEditNote = mysqli_query($baseEditNote, $cmdEditNote);    
mysqli_close($baseEditNote);
?>