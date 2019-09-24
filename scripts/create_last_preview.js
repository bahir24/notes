function CreateLastPrewiew() {
  const asidePreview = document.querySelector('.aside');
  const xhrLast = new XMLHttpRequest();
  xhrLast.open('GET', 'get_last_preview.php', true);
  xhrLast.send();
  xhrLast.onreadystatechange = function () {
    if (xhrLast.readyState === XMLHttpRequest.DONE && xhrLast.status === 200) {
      var lastPreviewItem = (this.responseText);
      asidePreview.insertAdjacentHTML('beforeend', lastPreviewItem);
    };
    DeleteButton();
    EditNote();
  };
};