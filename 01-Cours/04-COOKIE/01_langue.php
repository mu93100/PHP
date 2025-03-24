<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Choix de Langue</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            color: #cc0000;
            text-align: center;
        }

        .header-img {
            text-align: center;
            margin-bottom: 20px;
        }

        .header-img img {
            width: 200px; /* Ajustez cette largeur pour correspondre à vos autres images */
            height: auto;
            border: none;
        }

        .language-selection {
            background: #fff;
            border: 1px solid #cc0000;
            border-radius: 5px;
            padding: 20px;
            max-width: 600px;
            margin: 20px auto;
            box-sizing: border-box;
            text-align: center;
        }

        .language-selection ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .language-selection li {
            margin-bottom: 10px;
        }

        .language-selection a {
            color: #cc0000;
            text-decoration: none;
            font-size: 1.2em;
        }

        .language-selection a:hover {
            text-decoration: underline;
        }

        .result {
            background: #fff;
            border: 1px solid #cc0000;
            border-radius: 5px;
            padding: 20px;
            max-width: 600px;
            margin: 20px auto;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <div class="header-img">
        <img src="./img/logo_poleS.png" alt="Logo poleS">
    </div>

    <?php
    //-------------------------
    // La superglobale $_COOKIE
    //-------------------------
    /*
    Un cookie est un petit fichier (4 Ko max) déposé par le serveur du site sur le poste de l'internaute, et qui peut contenir des informations. Les cookies sont automatiquement renvoyés au serveur web par le navigateur lorsque l'internaute navigue dans les pages concernées par les cookies. PHP permet de récupérer très facilement les données contenues dans un cookie : elles sont stockées dans la superglobale $_COOKIE.
    
    Précaution à prendre avec les cookies :
    Le cookie étant sauvegardé sur le poste de l'internaute, il peut être volé ou détourné. On n'y mettra donc pas d'informations sensibles (mots de passe, carte bancaire, ...), mais des informations relatives aux préférences ou aux traces de visite (produits consultés...).
    */

    print_r($_GET);

    // 2- On détermine la langue à afficher dans la variable $langue :
    if (isset($_GET['langue'])) {
        $langue = $_GET['langue'];  // si existe l'indice "langue", c'est qu'on a cliqué sur un lien. On affecte donc sa valeur à la variable $langue.
    } elseif (isset($_COOKIE['langue'])) {
        $langue = $_COOKIE['langue']; // $_COOKIE est une superglobale : son indice correspond au nom du cookie reçu. Si on $_COOKIE['langue'] existe, c'est qu'on a reçu un cookie de nom "langue". On affecte donc sa valeur à la variable $langue.
    } else {
        $langue = 'fr';  // par défaut, si on n'a pas cliqué sur un lien et si le cookie "langue" n'existe pas, on choisit "fr"
    }

    // 3- Création du cookie :
    $un_an = 365 * 24 * 60 * 60;  // exprime 1 an en secondes

    setcookie('langue', $langue, time() + $un_an);  // on envoie un cookie chez l'internaute avec un nom, une valeur, une date d'expiration exprimée en timestamp (maintenant + 1 an)

    // Il n'existe pas de fonction prédéfinie pour supprimer un cookie. Dans ce cas, on le met à jour avec une date périmée ou à zéro, ou encore en ne mettant que le nom du cookie dans les () de setcookie.

    // 4- Affichage de la langue :
    echo '<div class="result">';
    echo '<h1>Le site est affiché en : ' . $langue . '</h1>';
    echo '</div>';
    ?>

    <div class="language-selection">
        <h1>Votre langue : </h1>
        <ul>
            <li><a href="?langue=fr">Français</a></li>
            <li><a href="?langue=es">Espagnol</a></li>
            <li><a href="?langue=it">Italien</a></li>
            <li><a href="?langue=en">Anglais</a></li>
        </ul>
    </div>
</body>

</html>
