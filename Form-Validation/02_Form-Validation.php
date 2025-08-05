<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="./02_Form-Validation.php" method="post">
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
    $usernameErr = $emailErr = $passwordErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Username Required
        if(empty($_POST["username"])) {
            $usernameErr = "Username Field is required !!!" . "<br>";
            echo $usernameErr;
        } 
        else {
            $username = input_test($_POST["username"]);

            // Username Validation
            if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
                $usernameErr = "Only letters and white space allowed" . "<br>";
                echo $usernameErr;
            }
        }


        // Email Required
        if(empty($_POST["email"])) {
            $emailErr = "Email Field is required !!!" . "<br>";
            echo $emailErr;
        } 
        else {
            $email = input_test($_POST["email"]);

            // Email Validation
                // Valid email contains only small alphabets & there should be maximum 2 numbers
        }


        // Password Required
        if(empty($_POST["password"])) {
            $passwordErr = "Password Field is required !!!" . "<br>";
            echo $passwordErr;
        } 
        else {
            $password = input_test($_POST["password"]);

            // Password Validation
                // Valid password contains minimum length of 8 characters & password must includes letters, numbers & Special Characters
        }

    }
    
    
    function input_test($data) {
        $trim_data = trim($data);
        $strip_data = stripslashes($trim_data);
        $modified_data = htmlspecialchars($strip_data);
        return $modified_data;
    }

    echo $username;

?>