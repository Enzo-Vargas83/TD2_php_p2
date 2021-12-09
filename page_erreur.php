<?php
    echo "probleme de connexion redirection sur la page web de connexion dans 5 secondes";
    sleep(5);
    header('Location : index.php');
?>