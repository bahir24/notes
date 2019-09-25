var noteEdit = {checked: 'no'};
function EditNote() {
  const editButtons = document.querySelectorAll('.preview__btn-show');
  const form = document.querySelector('.note__form');
  const sendButtonEdit = document.querySelector('.note__submit');
  const editnoteTasks = document.querySelector('.note__tasks');
  const noteTasksFields = editnoteTasks.querySelectorAll('.task__input');
  
  var previewItem = null;
  var currEditIndex = null;
  var currLoadfields = function LoadFields() {
    event.preventDefault();
    previewItem = this.parentNode;    
    //удаляем листенер, который создавал новую заметку      
    sendButtonEdit.removeEventListener('click', sendFunc);
    
    sendButtonEdit.addEventListener('click', currSendUpdates);
    //добавляем в переменную текущий элемент
    let noteDate = previewItem.childNodes[1].textContent;
    let noteHead = previewItem.childNodes[5].textContent;
    let noteText = previewItem.childNodes[7].textContent;
    // let arNoteTasks = [];
    // console.log(previewHideTasks);
    let NoteTask0 = previewItem.querySelector('.preview__note-task0').textContent;
    let NoteTask1 = previewItem.querySelector('.preview__note-task1').textContent;
    let NoteTask2 = previewItem.querySelector('.preview__note-task2').textContent;
    console.log(NoteTask0);
    console.log(NoteTask1);
    console.log(NoteTask2);
    
    currEditIndex = this.dataset.previewIndex;
    noteEdit.checked = currEditIndex;
    //выгружаем заметку в поля формы
    form.elements.note_date.value = noteDate;
    form.elements.note_head.value = noteHead;
    form.elements.note_text.value = noteText;
    noteTasksFields[0].value = NoteTask0;
    noteTasksFields[1].value = NoteTask1;
    noteTasksFields[2].value = NoteTask2;

    // console.log(editNoteTasksFields[0]);
    // for (let noteTasksFieldsIndex = 0; noteTasksFieldsIndex < noteTasksFields.length; noteTasksFieldsIndex++) {
    //   noteTasksField = noteTasksFields[noteTasksFieldsIndex];
    //   console.log(noteTasksField);
    //   console.log(noteTasksField.value);
      
    //   noteTasksField.value = arNoteTasks[noteTasksFieldsIndex];
    //   // console.log(noteTaskFielValue);
    // };

  };
  
  for (let editButtonIndex = 0; editButtonIndex < editButtons.length; editButtonIndex++) {
    var editButton = editButtons[editButtonIndex];
    editButton.dataset.previewIndex = editButtonIndex;//добавляем порядковый номер для индексации
    editButton.addEventListener('click', currLoadfields);
  };
  var currSendUpdates = function SendUpdates() {
    event.preventDefault();
    var editedNote = {};
    var noteTaskNumber = 0;
    for (let noteTasksFieldsIndex = 0; noteTasksFieldsIndex < noteTasksFields.length; noteTasksFieldsIndex++) {
      noteTasksField = noteTasksFields[noteTasksFieldsIndex];
      if (noteTasksField.value !== '') {
        // let noteTaskIndex = 'task' + `${noteTaskNumber}`;
        editedNote[`task` + `${noteTaskNumber}`] = noteTasksField.value;
        noteTaskNumber++;
      };
    };
    //создаем именованный массив с данными полей и порядковым номером
    
      editedNote.note_id = currEditIndex,
      editedNote.head = form.elements.note_head.value;
      editedNote.date = form.elements.note_date.value;
      editedNote.text = form.elements.note_text.value;
    
    const xhrEdit = new XMLHttpRequest();
    xhrEdit.responseType = 'json';
    xhrEdit.open('POST', 'note_edit.php');
    xhrEdit.send(JSON.stringify(editedNote));
    xhrEdit.onreadystatechange = function () {
      if (xhrEdit.readyState === XMLHttpRequest.DONE && xhrEdit.status === 200) {
        form.reset();
        noteTasksFields[0].value = '';
        noteTasksFields[1].value = '';
        noteTasksFields[2].value = '';
        previewItem.childNodes[5].textContent = editedNote.head;
        previewItem.childNodes[7].textContent = editedNote.text;
        previewItem.querySelector('.preview__note-task0').textContent = editedNote.task0;
        previewItem.querySelector('.preview__note-task1').textContent = editedNote.task1;
        previewItem.querySelector('.preview__note-task2').textContent = editedNote.task2;
      };
    };
  };        
};