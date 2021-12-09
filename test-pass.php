<?php
if (!empty($_POST)) {
    $login = $_POST['login'];
    $mdp = $_POST['password'];
    $dbLink = mysqli_connect('mysql-vargas.alwaysdata.net', 'vargas', 'lolo83520', 'vargas_td2');

    $select = mysqli_query($dbLink, "SELECT COUNT(Login) FROM User_test WHERE Login = '" . $_POST['login'] . "'");
    $nombre = mysqli_fetch_array($select);
    if ($nombre[0] >= 1){
        header("Location : page_erreur.php");
        exit();
    }
    else {
        header("Location : page_bienvenue.php");
        exit();
    }
    }
?>
