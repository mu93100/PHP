<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
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
            margin-top: 0;
        }

        .form-container {
            background: #fff;
            border: 1px solid #cc0000;
            border-radius: 5px;
            padding: 20px;
            max-width: 600px;
            margin: 20px auto;
            box-sizing: border-box;
        }

        .form-container label {
            font-size: 1.1em;
            color: #333;
        }

        .form-container input[type="text"],
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-container input[type="submit"] {
            background: #cc0000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            box-sizing: border-box;
        }

        .form-container input[type="submit"]:hover {
            background: #a30000;
        }

        .result {
            background: #fff;
            border: 1px solid #cc0000;
            border-radius: 5px;
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
            box-sizing: border-box;
        }

        .result p {
            font-size: 1.2em;
            color: #333;
        }

        pre {
            background: #ffe6e6;
            border: 1px solid #cc0000;
            padding: 10px;
            overflow-x: auto;
        }

        .header-img {
            text-align: center;
            margin-bottom: 20px;
        }

        .header-img img {
            width: 200px; /* Ajustez cette largeur selon la taille de vos autres images */
            height: auto;
            border: none;
        }
    </style>
</head>

<body>
    <div class="header-img">
        <img src="./img/logo_poleS.png" alt="Logo poleS">
    </div>
    <h1>Formulaire</h1>
    <div class="form-container">
        <form method="post" action="">
            <label for="prenom">Prénom</label><br>
            <input type="text" id="prenom" name="prenom">

            <br>

            <label for="description">Description</label><br>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>

            <br>

            <input type="submit" value="Envoyer">
        </form>
    </div>

    <p>on peut très bien utiliser les paramètres d'url avec POST, mais c'est très déconseillé</p>

    <pre>
    <code>
        <!DOCTYPE html>
        <html lang="fr">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire POST avec paramètres URL</title>
        </head>
        <body>
            <!-- Notez l'ajout des paramètres dans l'URL de l'action -->
            <form action="process.php?id=123&type=test" method="post">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>
        
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required>
        
            <input type="submit" value="Envoyer">
            </form>
        </body>
        </html>
    </code>
    </pre>

    <pre>
    <code>
        <?php
        // Récupération des paramètres de l'URL
        $id = $_GET['id'];
        $type = $_GET['type'];

        // Récupération des données POST
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];

        // Affichage des données
        echo "ID (paramètre URL): " . htmlspecialchars($id) . "<br>";
        echo "Type (paramètre URL): " . htmlspecialchars($type) . "<br>";
        echo "Nom (POST): " . htmlspecialchars($nom) . "<br>";
        echo "Prénom (POST): " . htmlspecialchars($prenom) . "<br>";
        ?>
    </code>

    </pre>

    <?php
    //-----------------------
    // La superglobale $_POST
    //-----------------------
    // $_POST est une superglobale qui permet de récupérer les données saisies dans un formulaire.

    // $_POST est une superglobale, donc un array. Il est disponible dans tous les contextes du script, y compris au sein des fonctions.

    // Syntaxe de $_POST : $_POST = array('name1' => 'valeur input1', 'nameN' => 'valeur inputN');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<div class="result">';
        echo '<h1>Résultats du formulaire</h1>';
        echo '<p>Prénom : ' . htmlspecialchars($_POST['prenom']) . '</p>';
        echo '<p>Description : ' . htmlspecialchars($_POST['description']) . '</p>';
        echo '</div>';
    }
    ?>

</body>

</html>
