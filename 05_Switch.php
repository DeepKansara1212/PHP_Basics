<?php
    $marks = 85;

    switch ($marks) {
        case ($marks >= 90):
            echo "GRADE: A";
            break;
        case ($marks >= 80 && $marks < 90):
            echo "GRADE: B";
            break;
        
        default:
            echo "Enter a valid marks";
            break;
    }

?>