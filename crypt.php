<?php
$user = "demo@bestwestern.fr";
$mdp = "azerty";
$salt = 'fojeizifoezjz';

echo sha1($user.$salt.$mdp);

?>
