<?php
require 'connection.php'; 

function GetStringById ($stringId) 
{
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connectBase = mysqli_connect($host, $user, $password, $database);
if ( !$connectBase ) die("Error");
$cmdGetString = "SELECT * FROM notes WHERE note_id = $stringId;";
$queryGetString = mysqli_query($connectBase, $cmdGetString); 
$arStringToArr = mysqli_fetch_array($queryGetString);
return $arStringToArr;
mysqli_close($connectBase);
}

function GetBaseLendth() 
{
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connectBase = mysqli_connect($host, $user, $password, $database);
if ( !$connectBase ) die("Error");
$cmdCountBase = "SELECT COUNT(*) FROM notes";
$queryCountBase = mysqli_query($connectBase, $cmdCountBase); 
$arCountBase = mysqli_fetch_array($queryCountBase);
$baseLendth = $arCountBase[0];
return $baseLendth;
mysqli_close($connectBase);
}
?>