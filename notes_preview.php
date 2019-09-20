<?php
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $notesBase = mysqli_connect('localhost', "admin", "Raggacore24", 'test'); //подключаемся к базе
  // if ( !$notesBase ) die("Error"); //если база не существует возвращаем ошибку

  $cmdGetNotes = "SELECT * FROM notes WHERE note_deleted = 0";
  // echo "var_dump($cmdGetNotes)";
  $queryGetNotes = mysqli_query($notesBase, $cmdGetNotes);
  // echo "var_dump($queryGetNotes)";
  // $arGetNotes = array();

  // $arGetNotes = (
  // "First Name" : "Abubaka",
  // 'age' : '32', 
  // 'country' : 'uzbak'
  // );

$noteField->name = "John";
$noteField->age = 30;
$noteField->city = "New York";

$noteFieldJSON = json_encode($noteField);
// dfgdfg
  // while($row = mysqli_fetch_assoc($queryGetNotes)){
  // $arGetNotes[] = $row[1];
  // }

  // echo "print_r($data)";
  // $notesResponse = json_encode($arGetNotes);
  echo $noteFieldJSON;

  mysqli_close($notesBase);
  ?>