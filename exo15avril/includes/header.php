<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e x o 15 a v r i l</title>
    <link rel="stylesheet" href="assets/style.css">

</head>
<body>
    <header>
        <nav>
            <li><a href="index" >home</a></li>
            <li><a href="profil">profil</a></li>
            <?php 
            if (isset($_SESSION['connected']) && $_SESSION['connected']) { 
                ?>     
                    <li><a style="color:black;" href="deconnexion">d é c o n n e x i o n</a></li>
                <?php } else { ?>
                    <li><a style="color:black;" href="connexion">c o n n e x i o n</a></li>
                <?php } ?>
                
                <li><a href="inscription">s'inscrire</a></li>

        </nav>
    </header>coco

    <main>

    