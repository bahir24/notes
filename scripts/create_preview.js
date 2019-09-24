function CreatePreview() {
  const asidePreview = document.querySelector('.aside');
  const xhrpre = new XMLHttpRequest();
  xhrpre.open('GET', 'notes_preview.php', true);
  xhrpre.send();
  xhrpre.onreadystatechange = function () {
    if (xhrpre.readyState === XMLHttpRequest.DONE && xhrpre.status === 200) {
      var previewItem = (this.responseText);
      asidePreview.insertAdjacentHTML('beforeend', previewItem);
    };
    DeleteButton();
    EditNote();
  };
};