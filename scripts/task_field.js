var taskCheckboxes = document.querySelectorAll('.task__icon-checkbox');

var currDisableInput = function DisableInput() {
  let currLabel = this.parentNode;
  let currField = currLabel.previousElementSibling;
  currField.disabled = true;
  this.removeEventListener('change', currDisableInput);
  this.addEventListener('change', currEnableInput);
};

var currEnableInput = function EnableInput() {
  let currLabel = this.parentNode;
  let currField = currLabel.previousElementSibling;
  currField.disabled = false;
  this.removeEventListener('change', currEnableInput);
  this.addEventListener('change', currDisableInput);
};

for (var taskCheckboxIndex = 0; taskCheckboxIndex < taskCheckboxes.length; taskCheckboxIndex++) {
  var taskCheckbox = taskCheckboxes[taskCheckboxIndex];
  taskCheckbox.addEventListener('change', currEnableInput);
};