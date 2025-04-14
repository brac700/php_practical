<?php
/* PHP CODE TO DEMONSTRATE ARMSTRONG W F(X)*/
function isArmstrong($number) {
    $numStr = strval($number);
    $numDigits = noOfDigits($number);
    $sum = 0;

    foreach (str_split($numStr) as $digit) {
        $sum += pow((int)$digit, $numDigits);
    }

    return $sum == $number;
}

function noOfDigits($num) {
    $num = abs($num);  
    $digits = 0;

    if ($num == 0) {
        return 1; 
    }
    
    while ($num > 0) {
        $num = (int)($num / 10); 
        $digits++;
    }

    return $digits;
}

$number = 153; 
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}

$number = 152; 
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
echo "<br>This program is written and executed by Harshit Sidher (2220100250)"

?>
