<?php
if (!empty($_POST)) {
    $login = $_POST['login'];
    $dbh = new PDO('mysql:host=mysql-vargas.alwaysdata.net;dbname=vargas_td2', 'vargas', 'lolo83520');
    $stmt = $dbh->prepare("SELECT *  FROM User_test WHERE Login =  :Login");
    //On recupère les pseudo de t'as base ou les pseudo son egal au pseudo passer par le formulaire
    $stmt->bindValue('pseudo', $login, PDO::PARAM_STR);
    $stmt->execute();
    //on exécute la requête

    $pseudoINbdd = $stmt->fetchColumn();
    if($pseudoINbdd !== 0)
     {
         echo "pseudo exite";
     }
}
?>
