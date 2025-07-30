<?php

// Indexed Array
$myArr = array(10, 20, 30, 40, 50);
// echo $myArr[2] . "<br>";

$myArr[2] = 35;
// echo $myArr[2] . "<br>";

array_push($myArr, 60);
// var_dump($myArr) . "<br>";


// Associative Array
$fruits = array(
    1 => "Mango",
    2 => "Banana",
    3 => "Kiwi"
);

// echo $fruits[2] . "<br>";

$fruits[2] = "Orange";

$fruits[4] = "Banana";
// var_dump($fruits);





// Multidimentional Array
$cars = array(
    array(
        array("Land Rover", 17, 15), 
        22, 
        18
    ),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);


echo $cars[0][0][2];
