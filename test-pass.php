<?php
if (!empty($_POST)) {
    $dbh = new PDO('mysql:host=mysql-vargas.alwaysdata.net;dbname=vargas_td2', 'vargas', 'lolo83520');
    $stmt = $dbh->prepare("SELECT *  FROM User_test WHERE Login = ?");
    $stmt->execute(array(
        $_POST['login']));

    $resultat = $stmt->fetch();

    if (!$resultat)
    {
        if (!$resultat['login'] === $username) {
            array_push($errors, "Ce nom d'utilisateur existe déjà");
        }
    }
}
?>
