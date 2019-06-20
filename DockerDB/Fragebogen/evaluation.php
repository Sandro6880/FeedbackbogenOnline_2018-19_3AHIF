<!DOCTYPE html>
<html lang="en-US">
<body>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<?php
    $conn = mysqli_connect('mariadb:3306', 'root', 'passme', 'mydb');
    for ($i=1; $i < 41; $i++) {
      $question = mysqli_query($conn, "SELECT * FROM answer WHERE question LIKE 'q$i'");
      $row = $question->fetch_assoc();
      echo'


<div id="piechart'.$i.'"></div>


<script type="text/javascript">
// Load google charts
google.charts.load("current", {"packages":["corechart"]});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ["Frage '.$i.'", "Anzahl"],
  ["Trifft völlig zu", '.$row["c1"].'],
  ["Trifft eher zu", '.$row["c2"].'],
  ["Trifft eher nicht zu", '.$row["c3"].'],
  ["Trifft nicht zu", '.$row["c4"].']
]);

  // Optional; add a title and set the width and height of the chart
  var options = {"title":"Frage '.$i.'", "width":550, "height":400};

  // Display the chart inside the <div> element with id="piechart'.$i.'"
  var chart = new google.visualization.BarChart(document.getElementById("piechart'.$i.'"));
  chart.draw(data, options);
}
</script>


';
    }
    mysqli_close($conn);
 ?>

 </body>
 </html>
