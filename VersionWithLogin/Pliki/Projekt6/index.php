<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekt 6</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>
<body>
<?php
        require("../../skrypt.php");
        require("../../guzik.php");
?>
    <div class="container">
        <form id="form">            
            <label for="imie">Imie:</label>
            <input type="text" name="imie" id="imie">

            <label for="nazwisko">Nazwisko:</label>
            <input type="text" name="nazwisko" id="nazwisko">
    
            <label for="ulica">Ulica:</label>
            <input type="text" name="ulica" id="ulica">
    
            <label for="numer">Numer domu:</label>
            <input type="text" name="numer" id="numer-domu">
    
            <label for="numer-mieszkania">Numer mieszkania:</label>
            <input type="text" name="numer-mieszkania" id="numer-mieszkania">
    
            <label for="miasto">Miasto:</label>
            <input type="text" name="miasto" id="miasto">
    
            <label for="wojewodztwo">Województwo:</label>
            <select type="text" name="wojewodztwo" id="wojewodztwo">
                <option value="" selected disabled>wybierz Województwo</option>
                <option value="dolnośląskie">dolnośląskie</option>
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
            <input type="text" name="narodziny" placeholder="DD-MM-YYYY" id="narodziny">
    
            <label for="prawo-jazdy">Prawo jazdy:</label>
            <input type="checkbox" name="prawo-jazdy">
    
            <label for="płeć">Płeć:</label>
            <select type="text" name="płeć">
                <option value="" selected disabled>wybierz płeć</option>
                <option value="Mężczyzna">Mężczyzna</option>
                <option value="Kobieta">Kobieta</option>
                <option value="Inne">Inne</option>
            </select>
    
            <label for="telefon">Telefon:</label>
            <input type="text" name="telefon" id="telefon">
    
            <label for="uwagi">Uwagi:</label>
            <textarea name="uwagi" style="height: 150px;"></textarea>
    
            <input type="submit" value="Submit" id="submit">
            <input type="reset">
        </form>  
    </div>
</body>
</html>