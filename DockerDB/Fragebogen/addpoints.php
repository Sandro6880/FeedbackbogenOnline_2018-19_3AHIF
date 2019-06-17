<?php
    $con = mysqli_connect('mariadb:3306','root','passme');
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    $class = $_POST['class'];
    mysqli_select_db($con,"mydb");
    //$sql="UPDATE test SET test_value = test_value + $value1, test_value2 = test_value2 + $value2, test_value3 = test_value3 + $value3, test_value4 = test_value4 + $value4";
    if(mysql_query("INSERT INTO answer VALUES('$class')"))
      echo "Successfully inserted";
    else
      echo "Insertion failed";


    mysqli_close($con);
?>
