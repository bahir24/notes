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




  // echo "var_dump($queryGetNotes)";
  // $arGetNotes = array();

  // $arGetNotes = (
  // "First Name" : "Abubaka",
  // 'age' : '32', 
  // 'country' : 'uzbak'
  // );

// $arGetNotes->name = "John";
// $arGetNotes->age = 30;
// $arGetNotes->city = "New York";


// dfgdfg
  // while($row = mysqli_fetch_assoc($queryGetNotes)){
  // $arGetNotes[] = $row[1];
  // }

  // echo "print_r($data)";
  // $notesResponse = json_encode($arGetNotes);


  for ($previewItem = 1; $previewItem < GetBaseLendth() + 1; $previewItem++) {
        $arCurrString = GetStringById($previewItem);
        $currDate = strtotime($arCurrString[note_date]);        
        $currDateDay = date("d", $currDate);
        $currDateMon = $rus_months[date("m", $currDate)-0];
        $currDateWday = $rus_weekdays[date("w", $currDate)];
        if (!$arCurrString[note_deleted]) {




              // else {
    //   console.log('response_is_recieved');




    
        // setlocale(LC_ALL, 'ru_RU.UTF-8');
        // require 'functions.php';

        // for ($previewItem = 1; $previewItem < GetBaseLendth() + 1; $previewItem++) {
        // $arCurrString = GetStringById($previewItem);
        // $currDate = strtotime($arCurrString[note_date]);        
        // $currDateDay = date("d", $currDate);
        // $currDateMon = $rus_months[date("m", $currDate)-0];
        // $currDateWday = $rus_weekdays[date("w", $currDate)];
        // if (!$arCurrString[note_deleted]) {
        // echo 
        <!-- //   <div class=\"preview\">
        //     <date class=\"preview__date\">$currDateDay $currDateMon $currDateWday</date>
        //     <a class=\"preview__btn preview__btn-show\" href=\"#\">
        //       <div class=\"preview__btn-text\">править</div>
        //       <svg class=\"preview__btn-icon\" viewBox=\"0 0 528.899 528.899\" preserveAspectRatio=\"none\">
        //         <use xlink:href=\"./sprite.svg#edit\"></use>
        //       </svg>
        //     </a>
        //     <h3 class=\"preview__head\">$arCurrString[note_head]</h3>
        //     <p class=\"preview__text\">$arCurrString[note_text]</p>
        //     <a class=\"preview__btn preview__btn-del\" href=\"#\">
        //       <div class=\"preview__btn-text\">удалить</div>
        //       <svg class=\"preview__btn-icon\" viewBox=\"-40 0 427 427.001\" preserveAspectRatio=\"none\">
        //         <use xlink:href=\"./sprite.svg#delete\"></use>
        //       </svg>
        //     </a>
        //   </div>";
        // } else {}
        // }           -->
        //  



        // var sendFuncNoteTask = function FuncNoteTask() {
//   var taskDate = new Date();
//   var arNoteTasksValue = [];
//   if (noteEdit.checked !== 'no') {
//     var idTaskForNote = noteEdit.checked;
//     taskDate = 'edit';
//     var taskForNoteId = 'edit';
//   } else {
//     idTaskForNote = 'curr';
//     taskForNoteId = 'curr';
//   };
//   if (form.elements.note_date.value !== '') {
//     taskDate = form.elements.note_date.value;
//   };
//   var fieldName = 0;
//   for (var noteTasksFieldsIndex = 0; noteTasksFieldsIndex < noteTasksFields.length; noteTasksFieldsIndex++) {
//     noteTasksField = noteTasksFields[noteTasksFieldsIndex];
//     var taskContent = {};
//     if (noteTasksField.value !== '') {
//       arNoteTasksValue[fieldName] = taskContent;
//       taskContent.id = taskForNoteId;
//       taskContent.text = noteTasksField.value;
//       taskContent.date = taskDate;
//       taskContent.note_id = idTaskForNote;
//       fieldName++;
//     };
//   };
//   if (form.elements.note_head.value !== '' && form.elements.note_text.value !== '') {
//   for (i = 0; i < arNoteTasksValue.length; i++) {
//     const xhrNoteTask = new XMLHttpRequest();
//     xhrNoteTask.responseType = 'json';
//     xhrNoteTask.open('POST', 'note_task_add.php');
//     xhrNoteTask.send(JSON.stringify(arNoteTasksValue[i]));
//   };
//   };
// };

// sendButton.addEventListener('click', sendFuncNoteTask);