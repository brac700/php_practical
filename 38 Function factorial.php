<?php
function factorial($num) {
    if ($num == 0 || $num == 1) {
        return 1;
    } else {
        return $num * factorial($num - 1);
    }
}


$number = 6;  
echo "Factorial of $number is " . factorial($number);
echo "<br>";
echo "<br>This program is written and executed by Harshit Sidher (2220100250)"
?>
