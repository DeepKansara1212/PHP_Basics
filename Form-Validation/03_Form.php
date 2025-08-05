<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./03_Form.php" method="post">
        <label>Email: </label>
        <input type="email" name="email" id="email">

        <br>
        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>


<?php

    $email = $_POST["email"];
    echo  $email;

?>