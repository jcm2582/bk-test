


<!doctype html>
<html>
<head><title>CSV</title></head>
<body>

  <form onsubmit="return processFile();" action="#" name="myForm" id="aForm" method="POST">
  <input type="file" id="myFile" name="myFile"><br>
  <input type="submit" name="submitMe" value="Process File">
  </form>
  <section>
  <table id="myTable"></table>
  </section>
</body>
<script type="text/javascript">
//will change notification status
//todo permission issues with xhr need to fix. CORS issue i believe. This is pretty much what killed my time debugging.
//todo need to pass vatiables into functions

function processFile() {
 var fileSize = 0;
 var theFile = document.getElementById("myFile").files[0];
 if (theFile) {
 var table = document.getElementById("myTable");
 var headerLine = "";
 var myReader = new FileReader();
 myReader.onload = function(e) {
 var content = myReader.result;
 var lines = content.split("\r");
 for (var count = 0; count < lines.length; count++) {
 var row = document.createElement("tr");
 var rowContent = lines[count].split(",");
 for (var i = 0; i < rowContent.length; i++) {
 if (count == 0) {
 var cellElement = document.createElement("th");
 } else {
 var cellElement = document.createElement("td");
 }
 var cellContent = document.createTextNode(rowContent[i]);
 cellElement.appendChild(cellContent);
 row.appendChild(cellElement);
 }
 myTable.appendChild(row);
 }
 }
 myReader.readAsText(theFile);
 }
 return false;
}
</script>
