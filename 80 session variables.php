<?php

    // Starting session
    session_start();
     
    // Storing Session Variables
    $_SESSION["firstname"] = "Harshit";
    $_SESSION["lastname"] = "Sidher";
    
    
    //Accessing Session Variables
    echo "First name is " . $_SESSION["firstname"] . "\n";
    echo "Last name is " . $_SESSION["lastname"];
    echo "<br>This program is written and executed by Harshit Sidher (2220100250)";

?>