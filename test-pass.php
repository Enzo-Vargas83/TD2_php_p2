<?php
if (!empty($_POST)) {
    $login = $_POST['login'];
    $dbh = new PDO('mysql:host=mysql-vargas.alwaysdata.net;dbname=vargas_td2', 'vargas', 'lolo83520');
    $stmt = $dbh->prepare("SELECT *  FROM User_test WHERE Login = ?");
    $stmt->execute(array('username' => $login));

    $result = $stmt->fetchAll();
    var_dump($result);
}
?>
