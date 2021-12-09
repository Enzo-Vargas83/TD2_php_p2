<?php
if (!empty($_POST)) {
    $login = $_POST['login'];
    $mdp = $_POST['password'];
    $dbLink = mysqli_connect('mysql-vargas.alwaysdata.net', 'vargas', 'lolo83520', 'vargas_td2');
    $query = 'INSERT INTO User_test (Login, Password) VALUES (\'' . $login . '\', \''
        . $mdp . '\')';

}
?>
