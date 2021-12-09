<?php
if (!empty($_POST)) {
    $pseudo=$_POST['login'];
    try
    {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $dbh = new PDO('mysql:host=mysql-vargas.alwaysdata.net;dbname=vargas_td2', 'vargas', 'lolo83520');

        $reponse=$dbh->query('SELECT COUNT(pseudo) FROM ident WHERE pseudo='.$pseudo);
        while($donnees=$reponse->fetch())
        {
            if ($donnees['pseudo']==1)
            {
                echo 'bienvenue';
            }

            else
            {
                echo 'informations non correctes';
                header('refresh:2;url=connexion.php');
            }
        }

    }


    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
?>
