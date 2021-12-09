<?php
if (!empty($_POST)) {
    $login = $_POST['login'];
    $mdp = $_POST['password'];
    $dbLink = mysqli_connect('mysql-vargas.alwaysdata.net', 'vargas', 'lolo83520', 'vargas_td2');

    $query = "SELECT Login, Pays Password FROM User_test";

    $stmt = $dbLink->$query;
    $stmt->execute([$login]);
    $user = $stmt->fetch();
    if ($user) {
        header("Location : page_bienvenue.php");
    } else {
        header("Location : page_erreur.php");
    }
}
?>
