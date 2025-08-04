<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="./01_Form.php" method="post">
        <label>Username: </label>
        <input type="text" name="username">

        <br>
        <br>

        <label>Email: </label>
        <input type="email" name="email" id="email">

        <br>
        <br>

        <label>Password: </label>
        <input type="password" name="password" id="password">

        <br>
        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    $name = "{$_POST["username"]}" ?? "";
    $email = "{$_POST["email"]}" ?? "";
    $password = "{$_POST["password"]}" ?? "";

    // echo $name . "<br>";
    // echo $email . "<br>";
    // echo $password . "<br>";

    echo $_SERVER["PHP_SELF"];
?>