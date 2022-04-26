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
            <select type="text" name="wojewodztwo" id="wojewodztwo">
                <!-- <option value="" selected disabled>wybierz Województwo</option> -->
                <option value="dolnośląskie" selected>dolnośląskie</option>
                <option value="kujawsko-pomorskie">kujawsko-pomorskie</option>
                <option value="lubelskie">lubelskie</option>
                <option value="lubuskie">lubuskie</option>
                <option value="łódzkie">łódzkie</option>
                <option value="małopolskie">małopolskie</option>
                <option value="mazowieckie">mazowieckie</option>
                <option value="opolskie">opolskie</option>
                <option value="podkarpackie">podkarpackie</option>
                <option value="podlaskie">podlaskie</option>
                <option value="pomorskie">pomorskie</option>
                <option value="śląskie">śląskie</option>
                <option value="świętokrzyskie">świętokrzyskie</option>
                <option value="warmińsko-mazurskie">warmińsko-mazurskie/option>
                <option value="wielkopolskie">wielkopolskie</option>
                <option value="zachodniopomorskie">zachodniopomorskie</option>
            </select>

        <label for="narodziny">Data urodzin:</label>
        <input type="date" name="narodziny">

        <label for="prawo-jazdy">Prawo jazdy:</label>
            <select type="text" name="prawo-jazdy">
                <option value="tak">tak</option>
                <option value="nie" selected>nie</option>
            </select>

        <label for="plec">Płeć:</label>
            <select type="text" name="plec">
                <option value="Mężczyzna">Mężczyzna</option>
                <option value="Kobieta">Kobieta</option>
                <option value="Inne" selected>Inne</option>
            </select>

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