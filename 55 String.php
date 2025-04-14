<?php
// Example demonstrating the difference:

$my_str = 'World';

// Using double quotes - variables are expanded
echo "Hello, $my_str!<br>";  // Displays: Hello, World!

// Using single quotes - variables are not expanded
echo 'Hello, $my_str!<br>';  // Displays: Hello, $my_str!

// Demonstrating escape sequences
echo '<pre>Hello\tWorld!</pre>';   // Displays: Hello\tWorld! (No tab, because single quotes don't parse escape sequences)
echo "<pre>Hello\tWorld!</pre>";   // Displays: Hello    World! (Tab works in double quotes)

echo 'I\'ll be back';  // Displays: I'll be back
echo "<br>This program is written and executed by Harshit Sidher (2220100250)";
?>
