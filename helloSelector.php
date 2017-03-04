<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello Selector</title>
</head>
<body>
<p>
    <?php
        echo "Where would you like to say hello?";
        print( '<a href="helloPrinter.php?planet=Earth">Earth</a>' );
        print( '<a href="helloPrinter.php?planet=Mars">Mars</a>' );
        print( '<a href="helloPrinter.php?planet=Uranus">Uranus</a>' );
    ?>
</p>
</body>
</html>