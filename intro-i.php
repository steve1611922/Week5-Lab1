<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Intro to PHP-Activity I</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
        <legend>Tell me your name and age...</legend>
        <label for="myname:">Name:</label>
        <input type="text" name="myname" title="myname"><br>
        <label for="myage">Myage:</label>
        <input type="number" name="myage" title="myage"><br>
        <input type="submit" value="Submit"><br>
    </fieldset>
</form>
<p>
    <?php
    // php code goes here
    //$myage=19;
    //$myname="Steve";
    $myname = $_POST["myname"];
    $myage = $_POST["myage"];
    if ($myage <= 16){ echo "You are to young to enjoy life...";}
    else {
        if ($myage > 16) {echo ucfirst($myname).", you are ".$myage." you may buy specs.<br>";}
        if ($myage > 18) {echo ucfirst($myname).", you are ".$myage." you may also buy mugs.<br>";}
        if ($myage > 21) {echo ucfirst($myname).", you are ".$myage." may also buy sausage rolls.<br>";}
    }
?>
</p>
</body>
</html>