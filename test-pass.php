<?php
if (!empty($_POST)) {
    $login = $_POST['login'];
    $mdp = $_POST['password'];
    $dbLink = mysqli_connect('mysql-vargas.alwaysdata.net', 'vargas', 'lolo83520', 'vargas_td2');

    $dbLink -> query($dbLink, "SELECT COUNT(Login) FROM User_test WHERE Login = '" . $_POST['login'] . "'");
    var_dump($dbLink);
    $dbLink -> mysqli_field_count();
    if ($dbLink == 1)
        echo oula;
    }
?>
