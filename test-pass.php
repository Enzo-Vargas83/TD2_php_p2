<?php
if (!empty($_POST)) {
    var_dump($_POST);
    $login = $_POST['login'];
    $mdp = $_POST['password'];
    $dbLink = mysqli_connect('mysql-vargas.alwaysdata.net', 'vargas', 'lolo83520', 'vargas_td2');

    $select = mysqli_query($dbLink, "SELECT Login FROM User_test WHERE Login = '". $_POST['login'] ."'");

}
?>
