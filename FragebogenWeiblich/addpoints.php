<?php
    $con = mysqli_connect('localhost:8000','root','test','mydb');
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    var value1 = localStorage.getItem(0);
    var value2 = localStorage.getItem(1);
    var value3 = localStorage.getItem(2);
    var value4 = localStorage.getItem(3);
    mysqli_select_db($con,"mydb");
    //$sql="UPDATE test SET test_value = test_value + $value1, test_value2 = test_value2 + $value2, test_value3 = test_value3 + $value3, test_value4 = test_value4 + $value4";
    $sql="INSERT INTO test (test_value) values ('$value')"
    $result = mysqli_query($con,$sql);

    mysqli_close($con);
?>
