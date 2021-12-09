<?php
if (!empty($_POST)) {
    $login = $_POST['login'];
    $mdp = $_POST['password'];
    $dbLink = mysqli_connect('mysql-vargas.alwaysdata.net', 'vargas', 'lolo83520', 'vargas_td2');

    $select = $dbLink->prepare("SELECT Login FROM User_test WHERE Login = '" . $_POST['login'] . "'");
    var_dump($select);
    $select->execute(array($_POST['numero']));
    $number = $select->fetch();

    if ($number['numerp'] == 1) {
        header("location : page_erreur.php");
    } else {
        header("location : page_bienvenue.php");
    }
}
?>
