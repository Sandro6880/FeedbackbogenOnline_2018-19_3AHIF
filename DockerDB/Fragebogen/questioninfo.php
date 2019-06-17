<?php
echo phpinfo();
/* PDO user API gives no access to connection thread id */
/*$mysql_connection = new PDO("mysql:host=localhost;dbname=mydb", "user", "passme");

/* Convert PDO MySQL handle to mysqlnd handle
$mysqlnd = mysqlnd_uh_convert_to_mysqlnd($mysql_connection);

/* Create Proxy to call mysqlnd connection class methods
$obj = new MySQLndUHConnection();
/* Call mysqlnd_conn::get_thread_id
var_dump($obj->getThreadId($mysqlnd));

/* Use SQL to fetch connection thread id
var_dump($mysql_connection->query("SELECT CONNECTION_ID()")->fetchAll());
/*$link = mysqli_connect("localhost:8000", "user", "passme", "mydb");

if (!$link) {
    echo "Fehler: konnte nicht mit MySQL verbinden." . PHP_EOL;
    echo "Debug-Fehlernummer: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debug-Fehlermeldung: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Erfolg: es wurde ordnungsgemäß mit MySQL verbunden! Die Datenbank \"datenbank\" ist toll." . PHP_EOL;
echo "Host-Informationen: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
*/
/*   include_once('db.php');


    if(mysql_query("INSERT INTO answer VALUES('$class')"))
      echo "Successfully inserted";
    else
      echo "Insertion failed";

    mysql_close($conn);
    <?php
      $servername = "mariadb:3306";
      $username = "user";
      $password = "passme";

    // Create connection
      $conn = new mysql($servername, $username, $password);

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
      echo "Connected successfully";
    ?>
*/
 ?>
