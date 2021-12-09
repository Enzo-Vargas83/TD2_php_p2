<?php
if (!empty($_POST)) {
    session_start();
    @$login=$_POST["login"];
     $dbh = new PDO('mysql:host=mysql-vargas.alwaysdata.net;dbname=vargas_td2', 'vargas', 'lolo83520');
     $sel=$dbh->prepare("select * from utilisateurs where login=? limit 1");
     $sel->execute(array($login));
     $tab=$sel->fetchAll();
     if(count($tab)>0){
         $_SESSION["prenomNom"]=ucfirst(strtolower($tab[0]["prenom"])).
                " ".strtoupper($tab[0]["nom"]);
         $_SESSION["autoriser"]="oui";
            header("location:session.php");
         echo "connecter";
        }
        else {
            $erreur = "Mauvais login ou mot de passe!";
            echo $erreur;
        }
}
?>
