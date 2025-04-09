<?php

?>

<style> *{font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;}</style>
<h1>P D O</h1>
<p> PDO est une (classe PHP qui permet de se connecter) accés_connexion a une base de données</p>
<p> PDO en PHP signifie PHP Data Objects</p>
<p> PDO est une interface orientée objet fournie par PHP pr accéder à différentes bases de données</p>

 <h2>À quoi sert PDO ?</h2> <!-- À ::: alt maintenu puis 0192 -->
<ul>
    <li>Se connecter à +sieurs bases de données (MySql, PostgreSQL, SQLite, etc)</li>
    <li>Utiliser des requètes préparées pour éviter les injections SQL</li>
    <li>Centraliser les Fo de gest. de bases de données</li>
</ul>

<?php
?>
// connexion à la base de données

// Chaîne de connexion DSN (Data Source Name)
/**Création d'une instance PDO pour la connexion à la base de données
     * PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION : active le mode exception pour la gestion des erreurs SQL
     * PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC : les résultats seront récupérés sous forme de tableau associatif
     * PDO::ATTR_EMULATE_PREPARES => false : désactive l'émulation des requêtes préparées (meilleure sécurité et performance)*/

<?php
$dsn = "mysql:host=localhost;dbname=societe"; // Remplacer 'societe' par le nom réel de votre base 
// localhost : adresse base de données en ligne //societe : nom du doss
$user = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe de l'utilisateur MySQL
try {
    
     // code de connexion pr rentrer ds la base
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);
    echo "Connexion réussie";
} catch (PDOException $exception) {
    // Affichage de l'erreur si la connexion échoue
    echo "Erreur de connexion à la base de données : " . $exception->getMessage();
    exit;
}
?>
// Try catch est un mécanisme de gest. des erreurs qui permet : 
// TRY : essayer un bloc de code potentiellement risqué
// et de réagir proprement si une erreur se produit ss interrompre le code brutalement
// CATCH :d'afficher l'erreur

// sans le try catch ça peut bloquer le site (FAtal error etc) ::: tt se qui est écrit après la var $pdo ne s'affiche pas
<?php

function debug($params) {
    echo "<pre>";
    print_r($params);
    echo "</pre>";
}
// cette Fo liste les methodes ds l'objet $pdo issue de la classe PDO
debug(get_class_methods($pdo));
?>

<p>MU <br> objet : nom d'1 élément / regroupement de valeurs et de fonctions
<br> class : nom avec ens. de caractéristiques : propriétés + méthodes (actions:Fo) + objets/instances de la classe
<br> </p>
<p>FA <br>la classe PDO est un modèle ou un plan 
<br>à l'int. de cette classe, il y a des méthodes (Fo) qui servent à communiquer avec la base de données
<br>class PDO : classe native
<br>new PDO() : instance de la classe PDO
<br>$pdo : var qui contient l'objet PDO</p>

<h3>REQUETE AVEC EXEC pour insert/ update/ delete</h3>
<p>la méthode EXEC exécute une requête SQL</p>
<p>l'opérateur -> accéder à une méthode sur un objet</p>
<p>là : objet===PDO méthode===EXEC <br>employes( , ,)===table(champs, ) VALUES( , ,)===lignes/entrées( , ,)</p>
<?php
$pdo->exec("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('john', 'doe', 'M', 'RH', '2023-01-01', 2000) ");
$pdo->exec("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('ro', 'blan', 'M', 'college', '2025-01-01', 5000)");
$pdo->exec("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('mu', 'ehl', 'F', 'designer', '2025-01-01', 3000)");
$pdo->exec("DELETE FROM employes WHERE nom = 'ehl'");
$pdo-> exec("DELETE FROM employes WHERE nom = 'doe'");
$pdo-> exec("DELETE FROM employes WHERE id = 62");
// AJOUTER ET SUPPRIMER un employé avec INSERT INTO et DELETE FROM
$pdo->exec("UPDATE employes SET salaire=1000 WHERE id=33");
//  modifier un champ avec UPDATE
?>
<p>exec exécute des codes simplement SANS PROTECTION CONTRE INJECTIONS SQL</p>
<h4>=>exec DANGEREUX si on insère des données users</h4>
<?php
echo "bordel";
?>