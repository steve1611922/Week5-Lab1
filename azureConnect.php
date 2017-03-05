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

//create a table

//  $con = mssql_connect('LOCALHOST','sa','FYIcenter');
//  mssql_select_db('FyiCenterData', $con);

  # creating a new table
  $sql = "CREATE TABLE login ("
      . " id INT(10) NOT NULL PRIMARY KEY"
      . ", username VARCHAR(255) NOT NULL"
      . ", password VARCHAR(255) NOT NULL"
      . ")";
  $res = mssql_query($sql,$conn);
  if (!$res) {
      print("Table creation failed with error:\n");
      print("   ".mssql_get_last_message()."\n");
  } else {
      print("Table fyi_links created.\n");
  }

  mssql_close($conn);
?>

?>