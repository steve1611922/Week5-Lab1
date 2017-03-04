<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>action_page</title>
</head>
<body>
<p>
    <?php
    // php code goes here
    $f_uname = $_POST["uname"];
    $f_pws = $_POST["pws"];
    echo $f_uname.$f_pws;
    echo "Setting cookies...";
    setcookie("access_level","standarduser");
    setcookie("customer",$f_uname);
    echo "<br>";
    echo "You can check your access level by visiting this link<br>";
    print( '<a href="homepage.php">Check access Level</a>' );
?>
</p>
</body>
</html>



