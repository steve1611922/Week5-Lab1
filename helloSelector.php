<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello Selector</title>
</head>
<body>
<p>
    <?php
    echo "Where would you like to say hello? <br>";
    print( '<a href="helloPrinter.php?planet=Earth">Earth</a>' );
    echo "<br>";
    print( '<a href="helloPrinter.php?planet=Mars">Mars</a>' );
    echo "<br>";
    print( '<a href="helloPrinter.php?planet=Uranus">Uranus</a>' );
    echo "<br>";
    ?>
</p>
</body>
</html>