<?php
// Define an associative array
$age = array(
    "Peter" => 20,
    "Harry" => 14,
    "John"  => 45,
    "Clark" => 35
);

// Sort the array in ascending order by value
asort($age);
echo "This program is written and executed by Harshit Sidher (2220100250)";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting PHP Associative Array in Ascending Order by Value</title>
</head>
<body>

    <h2>Sorted Associative Array</h2>
    <pre>
        <?php print_r($age); ?>
    </pre>

</body>
</html>