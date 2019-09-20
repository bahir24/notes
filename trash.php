// for ($i = 1; $i < 9; $i++) {
        // $curr_row = GetStringById(3);
        // var_dump($queryGetString);
        // var_dump($curr_row);

// function GetStringById ($stringId) 
// {
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $connectBase = mysqli_connect('localhost', "admin", "Raggacore24", 'test');
// // var_dump(connectBase);
// if ( !$connectBase ) die("Error");
// $cmdGetString = "SELECT * FROM notes WHERE note_id = $stringId;";
// // var_dump($cmdGetString);
// $queryGetString = mysqli_query($connectBase, $cmdGetString); 
// // var_dump($queryGetString);
// $arStringToArr = mysqli_fetch_array($queryGetString);
// // var_dump(print_r($arStringToArr));
// return $arStringToArr;
// mysqli_close($connectBase);
// }
  // var_dump($curr_row);
        // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        // $base = mysqli_connect('localhost', "admin", "Raggacore24", 'test'); //подключаемся к базе
        // if ( !$base ) die("Error"); //если база не существует возвращаем ошибку
        // $notes_id_command = "SELECT note_id FROM notes";
        // $notes_id_query = mysqli_query($base, $notes_id_command); 
        // var_dump($notes_id_query);
        // $notes_id_array = mysqli_fetch_array($notes_id_query);
        // var_dump($notes_id_array);
        // var_dump($notes_id_array[0]);
        // var_dump($notes_id_array[1]);
        // var_dump($notes_id_array[2]);

        // print_r($notes_id_array);
        // $lendth_notes_id_array = count($notes_id_array);
        // var_dump($lendth_notes_id_array); 
        // for ($i = 1; $i < $lendth_notes_id_array; $i++) {  
          // $curr_id = $notes_id_array[$i];
          // var_dump($curr_id);
          // $curr_row_command = "SELECT * FROM notes WHERE note_id = $curr_id";
          // var_dump($curr_row_command);
          // $curr_row_command_query = mysqli_query($base, $get_curr_row_command);
          // $curr_row_array = mysqli_fetch_array($curr_row_command_query);
          // $curr_date = strtotime($curr_row_array[2]);
          // $curr_date_day = date("d", $curr_date);
          // $curr_date_mon = $rus_months[date("m", $curr_date)-0];
          // $curr_date_wday = $rus_weekdays[date("w", $curr_date)];

          // $curr_head = $curr_row_array[1];
        // $get_curr_row = "SELECT * FROM notes WHERE note_id = $notes_id_array[i]";
        // $row_query = mysqli_query($base, $get_curr_row);
        // $current_row = mysqli_fetch_array($row_query);