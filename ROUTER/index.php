<?php

session_start();

// var_dump ($_GET);
require_once 'config/bdd.php'; // IMPORTANT de le mettre au début et require_once :: on a super besoin de ce fichier
include_once 'utils/functions.php';
include_once 'includes/header.php';
include_once 'router.php';
// include_once 'pages/inscription.php';
include_once 'includes/footer.php';

// var_dump($_SESSION);
// var_dump($_COOKIE);
?>