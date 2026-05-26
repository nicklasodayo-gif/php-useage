<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Usage</title>

    <style>
        body {
            background-color: lightblue;
            font-family: Arial;
        }

        h1 {
            color: darkblue;
            text-align: center;
        }

        p {
            color: green;
            font-size: 20px;
        }
    </style>
</head>

<body>

    <h1>LEARNING PHP</h1>

    <p>
        It is a server-side scripting language used to create
        dynamic web pages and web applications.
        PHP is commonly used together with HTML, CSS,
        JavaScript, and databases like MySQL.
    </p>

    <form action="index.php" method= "post"> 
        <label for="username">username</label>
        <input type="text" placeholder="enter your username" name ="username">
        <button type="submit" value="submit">submit</button>
    </form>

    <?php

    echo "<h1>Hello World</h1>";

    $name = "Nicklas";
    $age = 20;
    $price = "Free";

    echo "Name: " . $name . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Price: " . $price;

    ?>
    <br>


    <?php
    $username = $_POST['username'];
    echo $username;

    ?>

</body>
</html>