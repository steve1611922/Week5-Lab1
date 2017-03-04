<!DOCTYPE html> 
<html> 
<head> 
    <title>selfreference</title> 
</head> 
<body>
 <?php
if ($_SERVER["REQUEST_METHOD"] === "GET"){
?>
    // execute if requested using HTTP GET Method 
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <label>Forename</label> <input type="text" name="forename" title="forename"> 
        <label>Surname</label> <input type="text" name="surname" title="surname"> 
        <p><input type="submit" value="Submit"></p> 
    </form>
    <?php
}?>
elseif ($_SERVER["REQUEST_METHOD"] === "POST")
{ 
    // execute if requested using HTTP POST Method 
    $forename = $_POST["forename"]; 
    $surname = $_POST["surname"]; 
    print("<h1>Hello {$forename} {$surname}</h1>");
     }
else {
    // this is impossible 
    echo "impossible";
}
?> 
</body> 
</html>