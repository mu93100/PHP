<?php
//---------------------------
// Validation de formulaire
//---------------------------
// Créer un formulaire qui permet d'enregistrer un nouvel employé dans le BDD societe.

$message = '';  // variable pour afficher les messages d'erreur

// 2- connexion :
$pdo = new PDO(
    'mysql:host=localhost;dbname=societe',
    'root',
    '',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8'
    )
);

// 3- Traitement de $_POST :
if ($_POST) {   // est équivalent à !empty($_POST) 

    // Contrôles du formulaire :
    if (!isset($_POST['prenom']) || strlen($_POST['prenom']) < 3 || strlen($_POST['prenom']) > 20) {
        $message .= '<p class="error">Le prénom doit comporter entre 3 et 20 caractères.</p>';
    }

    if (!isset($_POST['nom']) || strlen($_POST['nom']) < 3 || strlen($_POST['nom']) > 20) {
        $message .= '<p class="error">Le nom doit comporter entre 3 et 20 caractères.</p>';
    }

    if (!isset($_POST['service']) || strlen($_POST['service']) < 3 || strlen($_POST['service']) > 30) {
        $message .= '<p class="error">Le service doit comporter entre 3 et 30 caractères.</p>';
    }

    if (!isset($_POST['sexe']) || ($_POST['sexe'] != 'm' && $_POST['sexe'] != 'f')) {
        $message .= '<p class="error">Le sexe n\'est pas valide.</p>';
    }

    if (!isset($_POST['date_embauche']) || !strtotime($_POST['date_embauche'])) {
        $message .= '<p class="error">La date n\'est pas valide.</p>';
    }

    if (!isset($_POST['salaire']) || !is_numeric($_POST['salaire']) || $_POST['salaire'] <= 0) {
        $message .= '<p class="error">Le salaire doit être un nombre positif.</p>';
    }
    
// 4 . Vérifications avec preg_match()

    // la fonction preg_match() va nous servir à vérifier un certain nombre d'élements grâce aux expressions régulières
    /**
     * Une expression régulière est une chaîne de caractères type, un motif (pattern), qui décrit un ensemble de chaînes de caractères possibles.   
     * C’est un modèle interprété par un moteur, lequel va essayer de trouver des correspondances du modèle dans le texte recherché.
     */
    // on va utiliser une série de symboles pour l'utiliser 
    // Exemple pour vérifier la date d'embauche dans le traitement du formulaire
    if ($_POST) {
        if (preg_match('/^d{2}-\d{2}-\d{4}$/', $_POST['date_embauche'] == 0)) {
            echo '<p> La date fournie n\'est pas correcte </p>';
        }
    }

    // Expliquer que 0 est considéré comme vide
    $test = 0;

    if (empty($test)) {
        echo "$test est vide";
    }

    // qu'est ce que c'est que ce charabia ? 

    // preg_math() la fonction preg_match recherche une correspondance entre la chaine de caractères reçue et l'expression entre ses ()
    // /^ début de la vérification, il va vérifier à partir du premier caractère de la chaîne
    // d{2}- il attend exactement 2 chiffres en premiers elements de la chaîne de caractères suivis de '-'
    // \d{2}- même chose qu'au dessus
    // \d{4} Cette fois ci il attend 4 chiffres
    // $/ il termine sa vérification ici, la chaîne ne doit pas contenir d'autres caractères après d{4}

    // En clair, l'expression attend un format de date ('01-05-2009') 2 chiffres - 2 chiffres - 4 chiffres
    // Attention !! preg_match ne vérifie que le format de la chaîne de caractères, il ne vérifiera pas si c'est bien une date qui y est entrée ( ou ce qu'on attend d'autre )

    //-----
    // Si la variable $message est vide, c'est que le formulaire est valide : on peut enregistrer en BDD :
    if (empty($message)) {

        // on reformate la date en yyyy-mm-dd :
        $date = new DateTime($_POST['date_embauche']);
        $date_embauche = $date->format('Y-m-d');

        // La requête préparée :
        $request = $pdo->prepare("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES (:prenom, :nom, :sexe, :service, :date_embauche, :salaire)");

        $request->bindParam(':prenom', $_POST['prenom']);
        $request->bindParam(':nom', $_POST['nom']);
        $request->bindParam(':sexe', $_POST['sexe']);
        $request->bindParam(':service', $_POST['service']);
        $request->bindParam(':date_embauche', $date_embauche);
        $request->bindParam(':salaire', $_POST['salaire']);

        // Try,catch : 
        // try contient le code à tester qui pourrait potentiellement causer une Exception (une erreur), si c'est le cas, il transfert l'erreur au bloc catch qui se chargera de l'afficher 
        try {
            $resultat = $request->execute();

            // Message de réussite ou d'échec de l'enregistrement :
            if ($resultat) {
                $message .= '<p class="success">L\'employé a bien été ajouté.</p>';
            } else {
                $message .= '<p class="error">Erreur lors de l\'enregistrement.</p>';
            }
        } catch (PDOException $e) {
            // ATTENTION : lors du déploiement de l'application, on ne laisse JAMAIS apparaître les erreurs sur le client, on va préferer enregistrer l'erreur dans un fichier de logs par exemple avec error_log(), puis retourner une page 500 à l'utilisateur en le redirigeant dessus
            echo $e->getMessage();

            // error_log($e->getMessage(), 3, 'chemin/vers/l\'erreur');
            // header('Location: page_500.php');
            // exit;
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Enregistrement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            max-width: 100%;
            margin: auto;
        }

        h1 {
            color: #cc0000;
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #cc0000;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cc0000;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        .radio-group {
            margin-bottom: 15px;
        }

        .radio-group label {
            font-weight: normal;
            display: inline;
            margin-right: 10px;
            color: #cc0000;
        }

        input[type="submit"] {
            background-color: #cc0000;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: black;
        }

        .message {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            color: #fff;
        }

        .success {
            background-color: #2ecc71;
        }

        .error {
            background-color: #e74c3c;
        }

        .header-img {
            width: 200px;
            margin: 30px auto;

        }

        .header-img img {
            height: auto;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="header-img">
        <img src="./img/logo_poleS.png" alt="Logo PoleS">
    </div>
    <form method="post" action="">
        <h1>Ajouter un Employé</h1>

        <!-- Message d'erreur ou succès -->
        <?php if (!empty($message)): ?>
            <div class="message <?= strpos($message, 'Erreur') !== false ? 'error' : 'success' ?>">
                <?= $message ?>
            </div>
        <?php endif; ?>

        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo isset($_POST['prenom']) ? htmlspecialchars($_POST['prenom']) : ''; ?>">

        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" value="<?php echo isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : ''; ?>">

        <div class="radio-group">
            <label>Sexe</label><br>
            <input type="radio" name="sexe" value="m" checked> Homme
            <input type="radio" name="sexe" value="f" <?php if (isset($_POST['sexe']) && htmlspecialchars($_POST['sexe']) == 'f') echo 'checked'; ?>> Femme
        </div>

        <label for="service">Service</label>
        <input type="text" id="service" name="service" value="<?php echo $_POST['service'] ?? ''; ?>">

        <label for="date_embauche">Date d'embauche</label>
        <input type="text" id="date_embauche" name="date_embauche" value="<?php echo isset($_POST['date_embauche']) ? htmlspecialchars($_POST['date_embauche']) : ''; ?>" placeholder="jj-mm-aaaa">

        <label for="salaire">Salaire</label>
        <input type="text" id="salaire" name="salaire" value="<?php echo isset($_POST['date_embauche']) ? htmlspecialchars($_POST['date_embauche']) : ''; ?>">

        <input type="submit" value="Enregistrer">
    </form>
</body>

</html>