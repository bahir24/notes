const delButtons = document.querySelectorAll('.preview__btn-del');

for (let delButtonIndex = 0; delButtonIndex < delButtons.length; delButtonIndex++) {
  delButton = delButtons[delButtonIndex];
  delButton.addEventListener('click', function (event) {
  event.preventDefault();
  let currIndex = delButtonIndex;
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'note_delete.php', true);
  xhr.send(currIndex);
  // CreatePreview()
});
}