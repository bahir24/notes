const form = document.querySelector('.note__form');
const sendButton = document.querySelector('.note__submit');
const noteTasks = document.querySelector('.note__tasks');
const noteTasksFields = noteTasks.querySelectorAll('.task__input');



var sendFunc = function (event) {
  event.preventDefault();
  var currentNote = {};
  if (validateForm(form)) {
    var noteTaskNumber = 0;
    for (let noteTasksFieldsIndex = 0; noteTasksFieldsIndex < noteTasksFields.length; noteTasksFieldsIndex++) {
      noteTasksField = noteTasksFields[noteTasksFieldsIndex];      
      if (noteTasksField.value !== '') {
        // let noteTaskIndex = 'task' + `${noteTaskNumber}`;
        currentNote[`task` + `${noteTaskNumber}`] = noteTasksField.value;
        noteTaskNumber++;
      };
    };
    
    currentNote.head = form.elements.note_head.value,
    currentNote.date = form.elements.note_date.value,
    currentNote.text = form.elements.note_text.value
  
    
  if (currentNote.head !== '' && currentNote.text !== '') {
    const xhr = new XMLHttpRequest();
    xhr.responseType = 'json';
    xhr.open('POST', 'note_add.php');
    xhr.send(JSON.stringify(currentNote));
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        form.reset();
        noteTasksFields[0].value = '';
        noteTasksFields[1].value = '';
        noteTasksFields[2].value = '';

        CreateLastPrewiew();
      };
    };
  };
};
  function validateForm(form) {
    let valid = true;
    if (!validateField(form.elements.note_head)) {
      valid = false;
    };
    if (!validateField(form.elements.note_date)) {
      valid = false;
    };
    if (!validateField(form.elements.note_text)) {
      valid = false;
    };
    return valid;
  };


  function validateField(field) {
    field.nextElementSibling.textContent = field.validationMessage;
    return field.checkValidity();
  };
};

sendButton.addEventListener('click', sendFunc);