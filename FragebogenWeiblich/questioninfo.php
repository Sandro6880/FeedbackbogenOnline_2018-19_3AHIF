<?php
    include_once('db.php');
    $testvalue = $_POST['testvalue'];

    mysql_query("INSERT INTO answer VALUES('$testvalue')"))
      echo "Successfully inserted";
    else
      echo "Insertion failed";

    mysql_close($conn);

 ?>
