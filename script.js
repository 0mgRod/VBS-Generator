document.getElementById('copyToClipboard-a').addEventListener('click', function() {
  
  var text = document.getElementById('textA');
  text.select();
  document.execCommand('copy');

})