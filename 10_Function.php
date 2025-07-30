<?php 

    // declare(strict_types=1);

    function addition($x, $y, $z = 10)
    {
        $z = $x + $y + $z;
        echo $z . "<br>";
    }


    function greet()
    {
        return "How are you? <br>";
    }

    $greeting =  greet();
    echo $greeting;

    addition(10, 20);
    addition(40, 20);
    addition(15, 20);
    addition(10, 84);


    function addNumbers(int $a, int $b)
    {
        return $a + $b;
    }
    echo addNumbers(5, "5");

?>