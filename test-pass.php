<?php
if (!empty($_POST)) {
    $login = $_POST['login'];
    $dbh = new PDO('mysql:host=mysql-vargas.alwaysdata.net;dbname=vargas_td2', 'vargas', 'lolo83520');
    $stmt = $dbh->prepare("SELECT * FROM User_test WHERE username=?");
    $stmt->execute([$login]);
    $user = $stmt->fetch();
    if ($user) {
        echo "existe";
    } else {
        echo "n'existe pas";
    }
}
?>
