<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .container{
            min-height: 100vh;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-image: linear-gradient(green, lightblue);
        }
        a{
            background-color: white;
            padding: 10px 30px;
            margin: 5px;
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <?php
        require("../skrypt.php");
        require("../guzik.php");
    ?>
    <div class="container">
        <a href="./Projekt1/index.php">Projekt 1</a>
        <a href="./Projekt3/index.php">Projekt 2</a>
        <a href="./Projekt3/index.php">Projekt 3</a>
        <a href="./Projekt4/index.php">Projekt 4</a>
        <a href="./Projekt5/index.php">Projekt 5</a>
        <a href="./Projekt6/index.php">Projekt 6</a>
        <a href="./Projekt7/index.php">Projekt 7</a>
        <a href="./Projekt8/index.php">Projekt 8</a>
    </div>
</body>
</html>