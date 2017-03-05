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
echo $conn;

?>