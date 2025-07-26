<?php
    $a = 12;
    $b = 12.455;
    $c = "15";
    $d = null;
    $e = true;

    $name = "Deep";
    const age = 23;
    echo age . "<br>"; 

    $str_a = (string) $a;
    echo $str_a . "<br>";
    echo var_dump($str_a) . "<br>";

    $num_c = (float) $c;
    echo $num_c . "<br>";
    echo var_dump($num_c) . "<br>";

    $bool_a = (bool) $a;
    echo $bool_a . "<br>";
    echo var_dump($bool_a) . "<br>";


    $user = "";
    
    $result = !empty($user) ? ($user) : ("No user exist");

    // if(!empty($user)) {
    //     echo $user;
    // }   
    // else {
    //     echo "No user exist";
    // }

?>  