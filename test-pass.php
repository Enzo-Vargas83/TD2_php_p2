<?php
if (!empty($_POST)) {
    $login = $_POST['login'];
    $mdp = $_POST['password'];
    $dbLink = mysqli_connect('mysql-vargas.alwaysdata.net', 'vargas', 'lolo83520', 'vargas_td2');
    $query = 'INSERT INTO User_test (Login, Password) VALUES (\'' . $login . '\', \''
        . $mdp . '\')';

    if (!($dbResult = mysqli_query($dbLink, $query))) {
        header('Location : page_erreur.php');
        exit();
    }
    else {
        header('Location : page_1.php');
    }
}
?>
