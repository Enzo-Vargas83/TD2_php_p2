<?php
if (!empty($_POST)) {
    $login=$_POST["login"];
     $dbh = new PDO('mysql:host=mysql-vargas.alwaysdata.net;dbname=vargas_td2', 'vargas', 'lolo83520');
     $stmt=$dbh->prepare("select * from User_test where Login=?");
     $stmt->execute([$login]);
     $ok = $stmt->fetch();
     var_dump($ok);
}
?>
