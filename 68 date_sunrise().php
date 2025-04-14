<!DOCTYPE html>
<html>
    <body>
        <?php

        echo("<h2>Lisbon, Portugal</h2>");
        echo("Date: " . date("D M d y"));
        echo("<br>Sunrise time: ");
        echo(date_sunrise(time(), SUNFUNCS_RET_STRING,38.4,-9,90,1));
        echo("<br>Sunset time: ");
        echo(date_sunset(time(), SUNFUNCS_RET_STRING,38.4,-9,90,1));
        echo "<br>This program is written and executed by Harshit Sidher (2220100250)";
        ?>

    </body>
</html>