<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        <nav>
            <!-- <ul>
                <li><a href="index.php?page=home">home</a></li> 
                <li><a href="index.php?page=profil">profil</a></li> 
                <li><a href="index.php?page=apropos">à propos</a></li> 
            </ul> -->
            <ul>
                <li><a href="home">h o m e</a></li> 
                <li><a href="profil">p r o f i l</a></li> 
                <li><a href="apropos">à    p r o p o s</a></li> 
                <?php if (isset($_SESSION['connected']) && $_SESSION['connected']) { ?> 
                        <!-- $_SESSION['connected']===$_SESSION['connected']==true ::: si connected est vrai--> 
                    <li><a href="deconnexion">d é c o n n e x i o n</a></li>
                <?php } else { ?>
                    <li><a href="connexion">c o n n e x i o n</a></li>
                    <li><a href="inscription">i n s c r i p t i o n</a></li>
                    <li><a href="language">l a n g u a g e</a></li>
                <?php } ?>
            </ul>

        </nav>
    </header>
    <main>

                    <!-- <li><a href="index.php?page=home">home</a></li> 
                ? pour method GET ::: lien vers p. index.php et données obtenues par GET avec var. $routes=== 'home =>url p. home/ 'profil'=> url p. profil                -->
