<?php
    function Fibonacci($n)
    {
        $a = 0;
        $b = 1;

        echo "Fibonacci Sequence till $n terms :";
        for( $i = 1 ; $i <= $n ; $i++ )
        {
            echo $a . " ";
            $next = $a + $b ;
            $a = $b ; 
            $b = $next ;
        }
    }

    Fibonacci(10);

    echo "<br>";
    echo "This program is Written and Executed by Harshit Sidher (2220100250)";

?>