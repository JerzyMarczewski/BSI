<!DOCTYPE html>
<html lang="PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2c</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
<?php
  require("../../../skrypt.php");
  require("../../../guzik.php");
?>
    <div style="width:100%;text-align:center">
        <button><a href="/Pliki/Projekt3/2a/index.php">2a</a></button>
        <button><a href="/Pliki/Projekt3/2b/index.php">2b</a></button>
        <button><a href="/Pliki/Projekt3/2c/index.php">2c</a></button>
    </div>
    <form>
        <div class="container2c">
            
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

                <label for="płeć">Płeć:</label>
                <input type="text" name="płeć">

                <label for="telefon">Telefon:</label>
                <input type="tel" name="telefon">

                <label for="uwagi">Uwagi:</label>
                <textarea name="uwagi" style="height: 150px;"></textarea>

                <input type="submit" value="Submit">
                <input type="reset">
        </div>
    </form>
</body>
</html>