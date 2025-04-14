<?php

    $year = 2025;
    
    // Leap years are divisible by 400 or by 4 but not 100
    if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0)))
    {
        echo "$year is a leap year.";
        echo("<br>"); 
    }
    else
    {
        echo "$year is not a leap year.";
        echo("<br>"); 
    }

    echo("This program was written and executed by Harshit Sidher (2220100250)");


?>