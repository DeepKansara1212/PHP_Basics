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

    // $username = "";
    // $email = "";
    // $password = "";

    $username = $email = $password = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = input_test($_POST["username"]);
        $email = input_test($_POST["email"]);
        $password = input_test($_POST["password"]);
    }
    
    
    function input_test($data) {
        $trim_data = trim($data);
        $strip_data = stripslashes($trim_data);
        $modified_data = htmlspecialchars($strip_data);
        return $modified_data;
    }

?>