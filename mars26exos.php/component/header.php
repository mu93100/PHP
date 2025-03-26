<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/style.css">
    <title>Document</title>
</head>
<body>
<header>
<?php 

$user=[
    "id"=> "2258",
    "name_username"=>"Nassaf",
    "email"=>"nassaf@gmail.com",
    "role"=>"admin",
    "image"=>"../img/image.png"
    // "image"=>"https://image.lematin.ch/2025/03/18/333d5bba-22c1-4a1d-a8c0-7cd03b7fe64b.jpeg?auto=format%2Ccompress%2Cenhance&fit=max&w=1200&h=1200&rect=0%2C0%2C4000%2C2662&fp-x=0.584&fp-y=0.51427498121713&s=588764506d624da4c624a4f3b2a5bfcc"
];

?>
    <nav>
        <div class="logo"></div>
        <ul class="menu">
        <?php 
            if (!isset($user)) {
                echo '<a href="../pages/home.php">H O M E</a>';
                echo '<button class="connexion">C O N N E X I O N</button>';
                
            }
            if (isset($user) && !empty($user) && $user["role"]==="user") {
                echo '<a href="../pages/profil.php">P R O F I L</a>';
                echo "<p>* * * bonjour" . ' ' . $user['name_username'] . " * * *</p>";
                echo '<button class="deconnexion">D E C O N N E X I O N</button>';
            } 
            if (isset($user) && !empty($user) && $user["role"]==="admin"){
                echo '<a href="../pages/profil.php">P R O F I L</a>';
                echo '<a href="../pages/backoffice.php">B A C K O F F I C E</a>';
                echo '<button class="deconnexion">D E C O N N E X I O N</button>'; 
            }
            if (!empty($user["image"])) {
                echo '<img class="img_user" src="' . $user["image"] . '" alt="">';
            }
        ?>
        </ul>
        
        
        
    </nav>
    <?php 
            if (isset($user) && !empty($user) && $user["role"]==="user") {
                echo "<p>* * * bonjour" . ' ' . $user['name_username'] . " * * *</p>";
            } 
            
        ?>

</header>
<header>
    <nav>
        <?php

        $menu=["home","profil","backoffice"];   

        ?>
    </nav>
</header>
<main>
<!-- <img src="https://images.app.goo.gl/5Waa3FQUqddNChLVA" alt=""> -->
