<!DOCTYPE html>
<html>
  <head>
    <title>Php</title>
  </head>
  <body>
<?php
    echo "test1";
    $conn = mysqli_connect('mariadb:3306', 'root', 'passme', 'mydb');
		if (!$conn) {
    	echo('Verbindung schlug fehl: ');
		}
    echo "
            <script type=\"text/javascript\">
            var choices = document.getElementsByTagName('question');
            var answerOfUser = document.getElementsByTagName('input');
            </script>
        ";
    if (isset($_GET["test"])) {
      echo "string";
    }
    echo $variable;
    /*mysqli_query($conn,"INSERT INTO answer VALUES('c3')");
    mysqli_close($conn);*/
 ?>
</body>
</html>
