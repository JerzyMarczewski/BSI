<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "<b>Imie: </b>" . $_GET["imie"] . "<br/>";
        echo "<b>Nazwisko: </b>" . $_GET["nazwisko"] . "<br/>";
        echo "<b>Ulica: </b>" . $_GET["ulica"] . "<br/>";
        echo "<b>Numer: </b>" . $_GET["numer"] . "<br/>";
        echo "<b>Numer mieszkania: </b>" . $_GET["numer-mieszkania"] . "<br/>";
        echo "<b>Miasto: </b>" . $_GET["miasto"] . "<br/>";
        echo "<b>Wojewodztwo: </b>" . $_GET["wojewodztwo"] . "<br/>";
        echo "<b>Narodziny: </b>" . $_GET["narodziny"] . "<br/>";
        echo "<b>Prawo Jazdy: </b>" . $_GET["prawo-jazdy"] . "<br/>";
        echo "<b>Płeć: </b>" . $_GET["plec"] . "<br/>";
        echo "<b>Numer Telefonu: </b>" . $_GET["telefon"] . "<br/>";
        echo "<b>Uwagi: </b>" . $_GET["uwagi"] . "<br/>";
    ?>
</body>
</html>