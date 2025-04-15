<?php



$dsn = "mysql:host=localhost;dbname=societe"; // Remplacer 'societe' par le nom réel de votre base 
// localhost : adresse base de données en ligne //societe : nom du doss
$user = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe de l'utilisateur MySQL
try { // PDO : class vide  $pdo : var. objet qui a les mêmes propriétés que PDO
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);
    echo "😁 H E L L O";
    
} catch (PDOException $exception) {
    // Affichage de l'erreur si la connexion échoue
    echo "Erreur de connexion à la base de données : " . $exception->getMessage();
    exit;
}
var_dump($_POST);


if ($_SERVER["REQUEST_METHOD"]== "POST") {
    if (isset($_POST["form_1"])) {
        $prenom  = $_POST['prenom'] ?? ''; // ?? si post[prenom] existe et n'est pas null===$prenom SINON ""
        $nom     = $_POST['nom'] ?? '';
        $sexe    = $_POST['sexe'] ?? '';
        $service = $_POST['service'] ?? '';
        $date_embauche = $_POST['date_embauche'] ?? '';
        $salaire = $_POST['salaire'] ?? 0;

        //  requete avec PREPARE et INSERT INTO
        $sql="INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES (:prenom, :nom, :sexe, :service, :date_embauche, :salaire)";
        // les : disent que les valeurs prenom, nom ETC sont vides
        // qd on remplit les values, on met des '' autour de chaque val.

        //on stocke la requête SQL dans une var. $sql
        $stmt = $pdo->prepare($sql); // -> : opérateur d'accès /accéder à la méthode sur/pour $sql
        // on prépare la requête fournie : $sql
        // elle est analysée par SQL
        // rien n'est envoyé à la base de données
        // c'est cô dire ::: voici ma requête que je te donne en mode brouillon pour qu'elle soit prête qd j'aurais de vraies données
        // prepare retourne un objet spé qui est PDOstatement (d'où le nom $stmt TJRS)
        $stmt->execute([
            ":prenom"=> $prenom,
            ":nom" => $nom, 
            ":sexe" => $sexe, 
            ":service" => $service, 
            ":date_embauche" => $date_embauche, 
            ":salaire" => $salaire
        ]);
        // ici on exécute la requete avec les vraies val.
        // PDO va vérif. que param st corrects
        // PDO va protéger la requêt contre injections SQLitePDO fait tout le boulot
        echo " user ajouté" ;
    }
}

?>

