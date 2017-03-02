<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week5-Lab-1</title>
</head>
<body>
<a href="http://example.com/search.html ?query=cat & type=image">Blarg</a>
<p>
<?php
// php code goes here
$query = $_GET["query"];
$type = $_GET["type"];
echo "The query is " . $query . "and the type is " . $type;
?>
</p>
</body>
</html>