const sendButtonTasks = document.querySelector('.todo__submit');
const currTasks = document.querySelector('.todo__col-left');
const futureTasks = document.querySelector('.todo__col-right');

const currTasksFields = currTasks.querySelectorAll('.task__input');
const futureTasksFields = futureTasks.querySelectorAll('.task__input');

var listenerFuncTaskSubmit = function FuncTaskSubmit() {
  var arSubmitTasks = [];
  
  for (let futureTasksFieldsIndex = 0; futureTasksFieldsIndex < futureTasksFields.length; futureTasksFieldsIndex++) {
    let futureTasksField = futureTasksFields[futureTasksFieldsIndex];
    let objTaskSubmit = {};
    if (futureTasksField.value !== '') {    
    arSubmitTasks[futureTasksFieldsIndex] = objTaskSubmit;
    objTaskSubmit.text = futureTasksField.value;
    objTaskSubmit.dateTask = 'future';
    objTaskSubmit.ready = false;
    objTaskSubmit.id = futureTasksFieldsIndex;
    };
  };
  
  var arSubmitTasksIndex = arSubmitTasks.length;
  for (let currTasksFieldsIndex = 0; currTasksFieldsIndex < currTasksFields.length; currTasksFieldsIndex++) {
    let currTasksField = currTasksFields[currTasksFieldsIndex];    
    let objTaskSubmit = {};
    if (currTasksField.value !== '') {
      arSubmitTasks[arSubmitTasksIndex] = objTaskSubmit;
      objTaskSubmit.text = currTasksField.value;
      objTaskSubmit.dateTask = 'now';
      if (currTasksField.parentNode.querySelector('.task__icon-checkbox').checked = true) {
        objTaskSubmit.ready = true;
      } else {
        objTaskSubmit.ready = false;
      };
      objTaskSubmit.id = currTasksFieldsIndex;
      arSubmitTasksIndex++;
    };
  };


  for (let taskSubmitIndex = 0; taskSubmitIndex < arSubmitTasks.length; taskSubmitIndex++) {
    const xhrSendTasks = new XMLHttpRequest();
    xhrSendTasks.responseType = 'json';
    xhrSendTasks.open('POST', 'tasks_update.php');
    xhrSendTasks.send(JSON.stringify(arSubmitTasks[taskSubmitIndex]));
    // xhrSendTasks.onreadystatechange = function () {
  };

  console.log(arSubmitTasks);

};

sendButtonTasks.addEventListener('click', listenerFuncTaskSubmit);