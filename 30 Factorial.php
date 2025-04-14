<?php
    //factorial of a number
    $fact = 1;
    $a = 5;
    echo "Number : " . $a . "<br>";

    for ( $i = 1 ; $i <= $a ; $i++ )
    {
        $fact *= $i ;
    }
    echo "Factorial : " . $fact . "<br>";
    
    echo "This program is Written and Executed by Harshit Sidher (2220100250)";
?>