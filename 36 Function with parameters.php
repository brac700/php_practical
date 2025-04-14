<html>
    <title>Writing PHP Function with Parameters</title>
    <head>
        <body>
            <?php
            function addFunction($num1,$num2){
                $sum = $num1 + $num2;
                echo "Sum of the two numbers is : $sum";
            }
            addFunction(10,20);
            echo "<br>This program is written and executed by Harshit Sidher (2220100250)"
            ?>
</body>
</html>