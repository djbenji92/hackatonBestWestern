<?php 
    $HOTE = '127.0.0.1';         // Chemin vers le serveur
    $PORT=3306;                  // port pour les clients mysql
    $BDD='hackathon';      // le nom de votre base de données
    $USER='root';              // nom d'utilisateur pour se connecter
    $MDP='root';               // mot de passe de l'utilisateur

    $OPTIONS = array(
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
    );

    $DSN = 'mysql:host='.$HOTE.';port='.$PORT.';dbname='.$BDD;

    try
    {
        $connexion = new PDO($DSN, $USER, $MDP, $OPTIONS);
    }
    catch(Exception $e)
    {
        echo 'Erreur : '.$e->getMessage().'<br />';
        echo 'N° : '.$e->getCode();
        die();
    }

    ini_set('display_errors', 1);
?>