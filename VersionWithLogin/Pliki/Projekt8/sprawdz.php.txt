<?php 
    session_start();
    $login = $_GET['login'];
    $haslo = $_GET['haslo'];

    if( $login != '' && $haslo != ''){
        $_SESSION['login'] = 1;
        header('location: /Pliki');
    }else{
      header('location: /index.html');
    }
?>