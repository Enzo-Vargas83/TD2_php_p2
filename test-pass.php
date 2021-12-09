<?php
if (!empty($_POST)) {
    @$login=$_POST["login"];
     $dbh = new PDO('mysql:host=mysql-vargas.alwaysdata.net;dbname=vargas_td2', 'vargas', 'lolo83520');
     $sel=$dbh->prepare("select * from utilisateurs where Login=? limit 1");
     $sel->execute(array($login));
     $tab=$sel->fetchAll();
     if(count($tab)>0){
         echo "connecter";
        }
        else {
            $erreur = "Mauvais login ou mot de passe!";
            echo $erreur;
        }
}
?>
