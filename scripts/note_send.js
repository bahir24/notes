const form = document.querySelector('.note__form');
const sendButton = document.querySelector('.note__submit');
const noteTasks = document.querySelector('.note__tasks');
const noteTasksFields = noteTasks.querySelectorAll('.task__input');



var sendFunc = function (event) {
  event.preventDefault();



  // if (validateForm(form)) {
    var currentNote = {
      head: form.elements.note_head.value,
      date: form.elements.note_date.value,
      text: form.elements.note_text.value
    };
    if (currentNote.head !== '' && currentNote.text !== '') {
    const xhr = new XMLHttpRequest();
    xhr.responseType = 'json';
    xhr.open('POST', 'note_add.php');
    xhr.send(JSON.stringify(currentNote));
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        form.reset();
        CreateLastPrewiew();
      };
    };
  };
};

// const taskFields = document.querySelectorAll('.task');

var sendFuncNoteTask = function FuncNoteTask() {
  var taskDate = new Date();
  // console.log(noteTasks);
  var arNoteTasksValue = [];
  
  console.log(checkbutt);
  if (checkbutt !== 'yes') {
  var check = form.elements.note_text.value;
  // console.log(check);
    
  if (form.elements.note_date.value !== '') {
    taskDate = form.elements.note_date.value;
  };
    console.log(taskDate);

  // if (currentNote.head !== '' && currentNote.text !== '') {

  // }
  for (var noteTasksFieldsIndex = 0; noteTasksFieldsIndex < noteTasksFields.length; noteTasksFieldsIndex++) {
    noteTasksField = noteTasksFields[noteTasksFieldsIndex];
    var taskContent = [];
    // let arGetNameField = 'task' + `${noteTasksFieldsIndex}`;
    arNoteTasksValue[`task` + `${noteTasksFieldsIndex}`] = taskContent;
    arNoteTasksValue[`task` + `${noteTasksFieldsIndex}`].taskContent = noteTasksField.value;
    taskContent.date = taskDate;
    
  }
  console.log(arNoteTasksValue);


};
};

//   function validateForm(form) {
//     let valid = true;
//     if (!validateField(form.elements.note_head)) {
//       valid = false;
//     };
//     if (!validateField(form.elements.note_date)) {
//       valid = false;
//     };
//     if (!validateField(form.elements.note_text)) {
//       valid = false;
//     };
//     return valid;
//   };

//   function validateField(field) {
//     field.nextElementSibling.textContent = field.validationMessage;
//     return field.checkValidity();
//   };
// };

sendButton.addEventListener('click', sendFunc);
sendButton.addEventListener('click', sendFuncNoteTask);
// };