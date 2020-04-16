<?php
include_once 'local.php';
include_once 'utilities.php';

//On essaie de se connecter
$conn = connexion_db($db_host, 'momotest', $db_user, $db_password);