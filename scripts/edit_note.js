function EditNote() {
  const editButtons = document.querySelectorAll('.preview__btn-show');
  const form = document.querySelector('.note__form');
  const sendButtonEdit = document.querySelector('.note__submit');
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
    currEditIndex = this.dataset.previewIndex;
    //выгружаем заметку в поля формы
    form.elements.note_date.value = noteDate;
    form.elements.note_head.value = noteHead;
    form.elements.note_text.value = noteText;
  };
  
  for (let editButtonIndex = 0; editButtonIndex < editButtons.length; editButtonIndex++) {
    var editButton = editButtons[editButtonIndex];
    // console.log(editButtons.length);
    editButton.dataset.previewIndex = editButtonIndex;//добавляем порядковый номер для индексации
    editButton.addEventListener('click', currLoadfields);
  };
  var currSendUpdates = function SendUpdates() {
    event.preventDefault();
    // console.log(currEditIndex);

    //создаем именованный массив с данными полей и порядковым номером
    var editedNote = {
      note_id: currEditIndex,
      head: form.elements.note_head.value,
      date: form.elements.note_date.value,
      text: form.elements.note_text.value
    };
    const xhrEdit = new XMLHttpRequest();
    xhrEdit.responseType = 'json';
    xhrEdit.open('POST', 'note_edit.php');
    xhrEdit.send(JSON.stringify(editedNote));
    xhrEdit.onreadystatechange = function () {
      if (xhrEdit.readyState === XMLHttpRequest.DONE && xhrEdit.status === 200) {
        form.reset();
        previewItem.childNodes[5].textContent = editedNote.head;
        previewItem.childNodes[7].textContent = editedNote.text;
      };
    };
  };        
};