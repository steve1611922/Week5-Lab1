<?php
// PHP Data Objects(PDO) Sample Code:
try {
$conn = new PDO("sqlsrv:server = tcp:rgu-labs.database.windows.net,1433; 
    Database = labs-db", "swcadmin", "Crabby123");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
print("Error connecting to SQL Server.");
die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "swcadmin@rgu-labs", "pwd" => "Crabby123",
    "Database" => "labs-db", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:rgu-labs.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
echo "I seem to be connected... yay";
echo "<br>".$conn;
echo "<br>".$serverName;
echo "<br>";

//create a table

//  $con = mssql_connect('LOCALHOST','sa','FYIcenter');
//  mssql_select_db('FyiCenterData', $con);

  # creating a new table
  $sql = "CREATE TABLE login ("
      . " id INT NOT NULL PRIMARY KEY"
      . ", username VARCHAR(255) NOT NULL"
      . ", password VARCHAR(255) NOT NULL"
      . ")";
    $res = sqlsrv_query ($conn, $sql);
//  $res = mssql_query($sql,"$connectionInfo");
  if (!$res) {
      print("Table creation failed with error:\n");
          foreach( sqlsrv_errors() as $error ) {
              echo "SQLSTATE: ".$error[ 'SQLSTATE']."<br />";
              echo "code: ".$error[ 'code']."<br />";
              echo "message: ".$error[ 'message']."<br />";
          }
      // print("   ".mssql_get_last_message()."\n");
  } else {
      print("Table login created.\n");
  }
    /*$sql = "INSERT INTO login (id,username,password) VALUES (2,'donald', 'duck')";
    $res = sqlsrv_query ($conn, $sql);
    if (!$res) {
        print("Insert failed with error:\n");
            foreach( sqlsrv_errors() as $error ) {
                echo "SQLSTATE: ".$error[ 'SQLSTATE']."<br />";
                echo "code: ".$error[ 'code']."<br />";
                echo "message: ".$error[ 'message']."<br />";
    }
    // print("   ".mssql_get_last_message()."\n");
    } else {
        print("Table row created.\n");
    }
    */
    $sql = "select * from login where password='$password' AND username='$username'";
    $query = sqlsrv_query ($conn, $sql);
    echo $query;
    sqlsrv_close($conn);
?>