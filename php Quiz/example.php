<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "Welcome " . $_POST["name"] . "<br>";
    echo "Email address is: " . $_POST["email"] . "<br>";
    echo "Password is: " . $_POST["password"] . "<br>";
?>
</body>
</html>