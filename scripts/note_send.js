// function SendButton() {

  const form = document.querySelector('.note__form');
  const sendButton = document.querySelector('.note__submit');


  var sendFunc = function (event) {
    event.preventDefault();
    if (validateForm(form)) {
      var currentNote = {
        head: form.elements.note_head.value,
        date: form.elements.note_date.value,
        text: form.elements.note_text.value
      }
      const xhr = new XMLHttpRequest();
      xhr.responseType = 'json';
      xhr.open('POST', 'note_add.php');
      xhr.send(JSON.stringify(currentNote));
      xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          CreateLastPrewiew();
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

  sendButton.addEventListener('click', sendFunc)
// };