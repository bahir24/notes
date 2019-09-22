
const asidePreview = document.querySelector('.aside');
// window.onload = function CreatePreview() {

  const xhrpre = new XMLHttpRequest();
  xhrpre.open('GET', 'notes_preview.php', true);
  xhrpre.send();
  xhrpre.onreadystatechange = function () {
    if (xhrpre.readyState === XMLHttpRequest.DONE && xhrpre.status === 200) {
      var previewItem = (this.responseText);
      asidePreview.insertAdjacentHTML('beforeend', previewItem);
    }
  };
 
// };

// const delButtons = document.querySelectorAll('.preview__btn-del');

// for (let delButtonIndex = 0; delButtonIndex < delButtons.length; delButtonIndex++) {
//   delButton = delButtons[delButtonIndex];
//   delButton.addEventListener('click', function (event) {
//     event.preventDefault();
//     let currIndex = delButtonIndex;
//     const xhr = new XMLHttpRequest();
//     xhr.open('POST', 'note_delete.php', true);
//     xhr.send(currIndex);
//     // CreatePreview()
//   });
// }