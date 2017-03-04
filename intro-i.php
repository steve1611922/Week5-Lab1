<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
        <legend>Tell me your name and age...</legend>
        <label for="myname:">Username:</label>
        <input type="text" name="myname" value="steve" title="myname"><br><br>
        <label for="myage">Myage:</label>
        <input type="number" name="myage" value="16" title="myage"><br>
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
    if ($myage > 16) { echo $myname.". You may buy specs.<br>";}
    if($myage > 18) {echo $myname.". You may also buy mugs.<br>";}
    if ($myage > 21) {echo $myname.". You may also buy sausage rolls.<br>";}
    else {echo "You are too young too enjoy life...";}
?>
</p>
</body>
</html>