<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td,
th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

th {
  background-color: #ccd;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

tr:nth-child(odd) {
  background-color: #ddeedd;
}

.highlight {
  background-color: Yellow;
  color: Green;
}
  </style>
</head>
<body>
  <table id="tblData" onclick="getID()">
  <tr>
    <th onclick="getID()">Name</th>
    <th>Age</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Maria Anders</td>
    <td>30</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Francisco Chang</td>
    <td>24</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Roland Mendel</td>
    <td>100</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Helen Bennett</td>
    <td>28</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Yoshi Tannamuri</td>
    <td>35</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Giovanni Rovelli</td>
    <td>46</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>Alex Smith</td>
    <td>59</td>
    <td>USA</td>
  </tr>
</table>
<br/>
<span id="spnText"></span>
</body>
<script>
function getID(){
  alert("row" + element.closest('tr').rowIndex +
      " -column" + element.closest('td').cellIndex);
}

$(document).ready(function() {
$("#tblDatatr:has(td)").mouseover(function(e) {
  $(this).css("cursor", "pointer");
});
$("#tblDatatr:has(td)").click(function(e) {
  $("#tblData td").removeClass("highlight");
  var clickedCell = $(e.target).closest("td");
  clickedCell.addClass("highlight");
  $("#spnText").html(
    'Clicked table cell value is: <b> ' + clickedCell.text() + '</b>');
});
});
</script>
</html>
