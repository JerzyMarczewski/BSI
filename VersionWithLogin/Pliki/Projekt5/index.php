<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>
<body>
<?php
        require("../../skrypt.php");
        require("../../guzik.php");
?>
    <div class="container">
        <div class="calculator-container">
            <div class="screen">0</div>
            <div class="buttons-container">
                <div class="button" id="b7">7</div>
                <div class="button" id="b8">8</div>
                <div class="button" id="b9">9</div>
                <div class="button" id="changeNegative">+/-</div>
                <div class="button" id="del">DEL</div>
                <div class="button" id="b4">4</div>
                <div class="button" id="b5">5</div>
                <div class="button" id="b6">6</div>
                <div class="button operator" id="multiplication">×</div>
                <div class="button operator" id="division">÷</div>
                <div class="button" id="b1">1</div>
                <div class="button" id="b2">2</div>
                <div class="button" id="b3">3</div>
                <div class="button operator" id="subtraction">-</div>
                <div class="button" id="equals">=</div>
                <div class="button" id="clear">C</div>
                <div class="button" id="b0">0</div>
                <div class="button" id="dot">.</div>
                <div class="button operator" id="addition">+</div>
            </div>
        </div>
    </div>
</body>
</html>