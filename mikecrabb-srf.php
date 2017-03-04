<!DOCTYPE html> 
<html> 
<head> 
    <title>selfreference</title> 
</head> 
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] ==="GET") { //could use if ($_GET)...
    //get code
    $forename = $_GET["forename"];
    $surname = $_GET["surname"];
    print ("Get Hello {$forename} {$surname}");

}
elseif ($_SERVER["REQUEST_METHOD"]=== "POST"){ // could use if ($_POST)...
    //post code
    $forename = $_POST["forename"];
    $surname = $_POST["surname"];
    print ("Post Hello {$forename} {$surname}");
}
else {
    // can never happen
    echo "an error has occurred";
}
?>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
    <fieldset>
        <legend>Enter your details</legend>
        <label>Forename</label> <input type="text" name="forename" title="forename"> 
        <label>Surname</label> <input type="text" name="surname" title="surname"> 
        <input type="submit" value="Submit">
    </fieldset>
</form>
</body> 
</html>