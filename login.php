<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }
    else
    {
        // Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];
        // Establishing Connection with Server
        $connectionInfo = array("UID" => "swcadmin@rgu-labs", "pwd" => "Crabby123",
            "Database" => "labs-db", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
        $serverName = "tcp:rgu-labs.database.windows.net,1433";
        $conn = sqlsrv_connect($serverName, $connectionInfo);
        // To protect SQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
     //   $username = mysql_real_escape_string($username);   // need to find equivalent
     //   $password = mysql_real_escape_string($password);   // need to find equivalent
        // SQL query to fetch information of registerd users and finds user match.
        $sql = "select id,username,password from login where password='$password' AND username='$username'";
        $query = sqlsrv_query ($conn, $sql);
        if (!$query) {
            $error = "Username or Password is invalid";
            echo $username.$password;
        } else {
            $_SESSION['login_user']=$username; // Initializing Session
            header("location: profile.php"); // Redirecting To Other Page
        }
        //mysql_close($connection); // Closing Connection
        sqlsrv_close($conn); // Closing Connection
    }
}
?>