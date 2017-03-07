<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connectionInfo = array("UID" => "swcadmin@rgu-labs", "pwd" => "Crabby123",
    "Database" => "labs-db", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:rgu-labs.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$sql = "select username from login where username='$user_check'";
$query = sqlsrv_query ($conn, $sql);
$row=sqlsrv_fetch_array($query);
$login_session = $row['username'];
if(!isset($login_session)){
    sqlsrv_close($conn); // Closing Connection
    header('Location: formget.php'); // Redirecting To Home Page
}
?>