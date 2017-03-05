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
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
        // $connection = mysql_connect("localhost", "root", "");
        $connectionInfo = array("UID" => "swcadmin@rgu-labs", "pwd" => "Crabby123",
            "Database" => "labs-db", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
        $serverName = "tcp:rgu-labs.database.windows.net,1433";
        $conn = sqlsrv_connect($serverName, $connectionInfo);
// To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
     //   $username = mysql_real_escape_string($username);
     //   $password = mysql_real_escape_string($password);
// Selecting Database
     //   $db = mysql_select_db("company", $connection);
// SQL query to fetch information of registerd users and finds user match.

        $sql = "select id,username,password from login where password='$password' AND username='$username'";
        $query = sqlsrv_query ($conn, $sql);
        if (!$query)
        {
            print("Select failed with error:\n");
            foreach (sqlsrv_errors() as $error)
            {
                echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                echo "code: " . $error['code'] . "<br />";
                echo "message: " . $error['message'] . "<br />";
            }
        }
        else
        {
            while ($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
                echo $row['id'] . ", " . $row['username'] . ", " . $row['password'] . "\n"."<br>";
            }
        }
        $rows = sqlsrv_num_rows($query);
        echo "rows:".$rows;
        echo "conn".$conn;
        echo "query:".$query;
        if ($rows === 1) {
            $_SESSION['login_user']=$username; // Initializing Session
            header("location: profile.php"); // Redirecting To Other Page
        } else {
            $error = "Username or Password is invalid";
            echo $username.$password;
        }
        //mysql_close($connection); // Closing Connection
        sqlsrv_close($conn); // Closing Connection
    }
}
?>