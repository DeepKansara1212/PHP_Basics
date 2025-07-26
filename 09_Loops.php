<?php
// While Loop
$num = 1;

/*
    while ($num <= 10) {
        echo $num . "<br>";
        $num = $num + 1;
    }
    */


// Do While Loop
// do {
//     echo $num . "<br>";
//     $num = $num + 1;
// } while ($num <= 5);



// For Loop & Break - Continue Statements
// for ($i=1; $i < 21; $i++) { 

//     if ($i == 5) {
//         // break;
//         continue;
//     }
//     echo $i . "<br>";

// }


// forEach
$myArr = array(10, 20, 30, 40, 50);

$myArr1 = array(1 => 10, 2 => 20);

echo $myArr1[1]. "<br>";

foreach ($myArr1 as $x) {
    $x = $x * 2;
    echo $x . "<br>";
}

?>
