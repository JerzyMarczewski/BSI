<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" >
</head>
<body>
<?php
        require("../../skrypt.php");
        require("../../guzik.php");
?>
<form class="container2c" action="druga.php" method="get">
            
        <label for="imie">Imie:</label>
        <input type="text" name="imie">

        <label for="nazwisko">Nazwisko:</label>
        <input type="text" name="nazwisko">

        <label for="ulica">Ulica:</label>
        <input type="text" name="ulica">

        <label for="numer">Numer domu:</label>
        <input type="number" name="numer">

        <label for="numer-mieszkania">Numer mieszkaniax:</label>
        <input type="number" name="numer-mieszkania">

        <label for="miasto">Miasto:</label>
        <input type="text" name="miasto">

        <label for="wojewodztwo">Województwo:</label>
        <input type="text" name="wojewodztwo">

        <label for="narodziny">Data urodzin:</label>
        <input type="date" name="narodziny">

        <label for="prawo-jazdy">Prawo jazdy:</label>
        <input type="text" name="prawo-jazdy">

        <label for="plec">Płeć:</label>
        <input type="text" name="plec">

        <label for="telefon">Telefon:</label>
        <input type="tel" name="telefon">

        <label for="uwagi">Uwagi:</label>
        <textarea name="uwagi" style="height: 150px;"></textarea>

        <input type="submit" value="Submit">
        <input type="reset">
    </form>
    <a href="./code.txt">Kod</a>
</body>
</html>