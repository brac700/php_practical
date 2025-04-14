<?php

    /* example 1 */
    echo "First Way \t";
    for ($i = 1; $i <= 10; $i++)
    {
        echo $i;
        echo("<br>"); 
    }
    
    /* example 2 */
    echo "\nAnother Way\t";
    for ($i = 1; ; $i++)
    {
        if ($i > 10)
        {
            break;
        }
        echo $i;
        echo("<br>"); 
    }
    echo("This program was written and executed by Harshit Sidher (2220100250)");


?>