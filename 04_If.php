<?php
    $marks = 5;

    if($marks >= 90) {
        echo "GRADE: A";
    }
    else if($marks >= 80) {
        echo "GRADE: B";
    }
    else if($marks >= 70 && $marks < 80) {
        echo "GRADE: C";
    }
    else if($marks >= 60 && $marks < 70) {
        echo "GRADE: D";
    }
    else if($marks >= 50 && $marks < 60) {
        echo "GRADE: E";
    }
    else {
        echo "You are failed !!!";
    }
?>