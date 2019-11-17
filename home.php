
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Backend Task</title>
<link rel="stylesheet" type="text/css" href="css/handsontable.full.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<script src="js/handsontable.full.min.js"></script>
<script src="js/jquery.min.js"></script>
</head>
<body>
<div id="hot"></div>
<script>
var hot;
var myData=null;
$(document).ready(function(){
  //$("button").click(function(){
    $.ajax({url: "get.php", success: function(result){
      myData = JSON.parse(result);
	  load();
    }});
  //});
});
var container = document.getElementById('hot');
function load(){
	hot = new Handsontable(container, {

  data: myData,
  rowHeaders: true,
  colHeaders: [
    'ID',
    'PARTICULARS',
    'PREVIOUS YEAR',
    'LATEST YEAR'
  ],
  filters: false,
  contextMenu: true,
  dropdownMenu: false,
    afterChange: function (change, source) {
    if (source === 'loadData') {
      return; //don't save this change
    }
    if (!autosave.checked) {
      return;
    }
    clearTimeout(autosaveNotification);
    ajax('update.php', 'POST', {data: change}, function (data) {
      exampleConsole.innerText  = 'Autosaved (' + change.length + ' ' + 'cell' + (change.length > 1 ? 's' : '') + ')';
      autosaveNotification = setTimeout(function() {
        exampleConsole.innerText ='Changes will be autosaved';
      }, 1000);
    });
  }
});
}
Handsontable.Dom.addEvent(save, 'click', function() {
  // save all cell's data
  ajax('update.php', 'POST', {data: hot.getData()}	, function (res) {
    var response = JSON.parse(res.response);

    if (response.result === 'ok') {
      exampleConsole.innerText = 'Data saved';
    }
    else {
      exampleConsole.innerText = 'Save error';
    }
  });
});

</script>
<button>GET DATA</button>
</body>

</html>
