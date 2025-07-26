<?php
    // Arithmetic Operators
        // + - * / % **
    $x = 12;
    $y = 2;

    // echo $x ** $y;

    // Increment-Decrement 
        // ++ --
    echo $x++ . "<br>";
    echo ++$x . "<br>";


    // Operator Precedence Order & Associativity
        // ()
        // ** 
        // * / %  -> left to right
        // + -    -> left to right

    $eq = 10 + 25 * 3 - 45 / 3 % 2;

    echo $eq;

    // 10 + 25 * 3 - 45 / 3 % 2
    // 10 + 75 - 45 / 3 % 2
    // 10 + 75 - 15 % 2
    // 10 + 75 - 1
    // 85 - 1
    // 84
?>