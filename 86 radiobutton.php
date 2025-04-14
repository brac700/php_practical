<?php
// filepath: c:\xampp\htdocs\codes_php\86 radiobutton.php
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Select Your Favourite Car</title>
        <style>
            body {
                text-align: center;
            }
            .form {
                border: 10px solid black;
                background-color: #f0f0f0;
                padding: 10px;
                width: fit-content;
                margin: auto; 
            }
        </style>
    </head>
<body>
    <h1>SELECT YOUR FAVOURITE CAR</h1>
    <form method="POST" class="form">
        <input type="radio" name="car" value="Toyota" id="toyota">
        <label for="toyota">Toyota</label><br>
        <input type="radio" name="car" value="Honda" id="honda">
        <label for="honda">Honda</label><br>
        <input type="radio" name="car" value="Ford" id="ford">
        <label for="ford">Ford</label><br>
        <input type="submit" value="Submit">
    </form>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['car'])) {
        $car = htmlspecialchars($_POST['car']);
        echo "Your favourite car is " . $car . " car";
    }
    ?>
</body>
</html>