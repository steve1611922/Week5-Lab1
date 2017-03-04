<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>
    <?php
    // php code goes here
    $myage=16;
    $myname="Steve";
    if ($myage > 16) { echo $myname.". You may buy specs.<br>";}
    if($myage > 18) {echo $myname.". You may also buy mugs.<br>";}
    if ($myage > 21) {echo $myname.". You may also buy sausage rolls.<br>";}
    else {echo "You are too young tpo enjoy life...";}
?>
</p>
</body>
</html>