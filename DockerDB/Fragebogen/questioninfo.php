<!DOCTYPE html>
<html>
  <head>
    <title>Php</title>
  </head>
  <body>
<?php
    $conn = mysqli_connect('mariadb:3306', 'root', 'passme', 'mydb');
		if (!$conn) {
    	echo('Verbindung schlug fehl: ');
		}
    $variable = $_GET["answers"];
    if (isset($_GET["test"])) {
      echo "E R R O R";
    }
    for ($i=1; $i < strlen($variable)+1; $i++) {
      $result = mysqli_query($conn,"SELECT * FROM answer WHERE question LIKE 'q$i'");
      if ($result->num_rows < 1) {
        mysqli_query($conn, "INSERT INTO answer (question) VALUES ('q$i')");
      }
      echo "</br>";
      $z = $i-1;
      mysqli_query($conn,"UPDATE answer SET c$variable[$z] = c$variable[$z]+1 WHERE question = 'q$i'");
    }

    mysqli_close($conn);
 ?>
</body>
</html>
