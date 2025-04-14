<?php
/*
calculate no. of digits in a given number
*/

function noOfDigitstest($num) {
    $num = abs($num);  

    $digits = 0;
    
    if ($num == 0) {
        return 1; 
    }
    
    // Count the digits
    while ($num > 0) {
        $num = (int)($num / 10); 
        $digits++;
    }

    return $digits;
}

echo noOfDigitstest(12345); 
echo "\n";

echo "<br>This program is written and executed by Harshit Sidher (2220100250)"
?>