<?php
if (!empty($_POST)) {
    $login = $_POST['login'];
    $dbh = new PDO('mysql:host=mysql-vargas.alwaysdata.net;dbname=vargas_td2', 'vargas', 'lolo83520');
    $req = $dbh->query("SELECT * FROM User_test WHERE Login='$login'");
    $chk_pseudo = $req->fetch(PDO::FETCH_ASSOC);
    var_dump($chk_pseudo);
    if($chk_pseudo == '1' || $chk_pseudo > '1')
    {
        $error_pseudo_identique = 'Ce pseudo existe déjà !';
        echo $error_pseudo_identique;
    }
    else
    {
        $error_pseudo_identique = 'Ce pseudo est disponible!';
        echo $error_pseudo_identique;
    }
}
?>
