<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
    header("Location: formget.php"); // Redirecting To Home Page
}
?>

