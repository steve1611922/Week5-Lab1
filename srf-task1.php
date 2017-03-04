<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week5-Lab-Self Referencing Forms- Task1</title>
</head>
<body>
<a href="http://example.com/search.html?query=cat&type=image">example.com</a>
<p>
<?php
    // php code goes here
    //print( '<a href="http://example.com/search.html?query=cat&type=image">example.com</a>' );
    $query = $_GET["query"];
    $type = $_GET["type"];
    echo "The query is " . $query . "and the type is " . $type;
    echo "<br>";
    print( '<a href="helloSelector.php">Go to Hello Selector</a>' );
?>
</p>
</body>
</html>