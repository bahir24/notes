
window.onload = function CreatePreview() {

  const xhrpre = new XMLHttpRequest();
  xhrpre.open('GET', 'notes_preview.php', true);
  console.log('OPENED', xhrpre.readyState);
  xhrpre.send();
  
  xhrpre.onreadystatechange = function () {
    console.log('SENDED', xhrpre.readyState);
    if (xhrpre.status != 200) {

      console.log('error');
      console.log(xhrpre.readyState);
    } else {
      // console.log('response_is_recieved');
      if (xhrpre.readyState = 4) {
        var testJson = JSON.parse(this.responseText);
        console.log(testJson);
        // console.log('query_sended');
      } else {
        // console.log('query_failed');
        

      }
    }

  };
};
 