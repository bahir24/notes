<?php 
$indexInput=file_get_contents('php://input');
$indexInt = (int)$indexInput;

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$noteBase = mysqli_connect('localhost', "admin", "Raggacore24", 'test'); //подключаемся к базе
if ( !$noteBase ) die("Error"); //если база не существует возвращаем ошибку
  $cmdIdNote = "SELECT note_id FROM notes WHERE note_deleted = 0";
  $queryIdNote = mysqli_query($noteBase, $cmdIdNote);
  $arIdNote = array();  
  WHILE($row = mysqli_fetch_array($queryIdNote)) {
    $arIdNote[] = $row[0];
  }
  $findIdNote = $arIdNote[$indexInt];
  $cmdNoteDel = "UPDATE notes SET note_deleted = 1 WHERE note_id = $findIdNote";
  $queryNoteDel = mysqli_query($noteBase, $cmdNoteDel);    
mysqli_close($noteBase);
?>