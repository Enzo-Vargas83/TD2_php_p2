<?php
if (!empty($_POST)) {
    $dbh = new PDO('mysql:host=mysql-vargas.alwaysdata.net;dbname=vargas_td2', 'vargas', 'lolo83520');
    $stmt = $dbh->prepare("SELECT *  FROM User_test WHERE Login = ?");
    $stmt->execute([
        $_POST['login']
    ]);
    $result = $stmt->fetch();
    if ($result) {
        echo "le login existe";
    }
    else {
        echo "bienvenue nouveau utilisateur";
    }
}
?>
