<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="avatar.php" method="post">
    <fieldset>
        <legend>Super hero, enter your details...</legend>
        <label for="fname">First Name:</label><input type="text" name="fname" value=""><br>
        <label for="lname">Last Name:</label><input type="text" name="lname" value=""><br>
        <label for="gender">Male</label><input type="radio" name="gender" value="male"><br>
        <label for="gender">Female</label><input type="radio" name="gender" value="female"><br>
        <label for="power">Superpower:</label><input type="text" name="power" value=""><br>
        <input type="submit" value="Register" />
    </fieldset>
</form>
</body>
</html>