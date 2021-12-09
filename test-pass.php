<?php
if (!empty($_POST)) {
    $login = $_POST['login'];
    $mdp = $_POST['password'];
    $dbLink = mysqli_connect('mysql-vargas.alwaysdata.net', 'vargas', 'lolo83520', 'vargas_td2');

    $select = mysqli_query($dbLink, "SELECT Login FROM User_test WHERE Login = '". $_POST['login'] ."'");
    var_dump($select);
    if(mysqli_num_rows($select)) {
        header("location : page_erreur.php");
    }
    else {
        header("location : page_bienvenue.php");
    }
}
?>
