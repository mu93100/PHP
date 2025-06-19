<h1 style="text-align: center;">I N S C R I P T I O N</h1>

<style>
    
    form {
        max-width: 500px;
        margin: auto;
        padding: 1rem;
        display: block;
        gap: 5rem;
    }
    label {
        margin-top: 10px;
        background-color: rgb(180, 139, 1);
        font-weight: 600;
    }
    input{
        width: 100%;
        padding: 0.5rem;
        margin-bottom: 1rem;
        border: 1px dotted black;
        border-radius: 4px;
        color: rgb(7, 253, 81);
        font-weight: 700;
        background-color: white;
    }

    button {
        background-color:white;
        color: rgb(7, 253, 81);
        border: 2px dotted black;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 800;
        padding: 0.5rem;
    }
    button:hover {
        background-color: black;
        color: white;
    }
</style>

<form method="post" action="">    
    <input type="text" name="prenom" required placeholder="prenom">
    <input type="text" name="nom" required placeholder="nom">
    <input type="text" name="identifiant" required placeholder="identifiant de connexion">
    <input type="password" name="mot_de_passe" required placeholder="mot de passe de 10 caractère max">
    <input type="text" name="email" required placeholder="email">
    <input type="text" name="telephone" required placeholder="téléphone">
    <input type="text" name="adresse" required placeholder="adresse">
    <input type="text" name="groupe"  placeholder="groupe">
    <input type="int" name="composition_famille" required placeholder="nombre de mangeurs">

    <button name="form_inscription" type="submit">S ' I N S C R I R E</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    if (isset($_POST["form_inscription"])) {
        $prenom  = $_POST['prenom']; // ?? si post[prenom] existe et n'est pas null===$prenom SINON ""
        $nom     = $_POST['nom'];
        $identifiant = $_POST['identifiant'];
        $mot_de_passe = password_hash($_POST['mot_de_passe'],PASSWORD_DEFAULT);
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $adresse = $_POST['adresse'];
        $groupe = $_POST['groupe'];
        $composition_famille = $_POST['composition_famille'];

        $sql="INSERT INTO user (prenom, nom, identifiant, mot_de_passe, email, telephone, adresse, groupe, composition_famille) VALUES (:prenom, :nom, :identifiant, :mot_de_passe, :email, :telephone, :adresse, :groupe, :composition_famille)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":prenom"=> $prenom,
            ":nom" => $nom, 
            ":identifiant" => $identifiant, 
            ":mot_de_passe" => $mot_de_passe, 
            ":email" => $email, 
            ":telephone" => $telephone, 
            ":adresse" => $adresse, 
            ":groupe" => $groupe, 
            ":composition_famille" => $composition_famille
        ]);
        echo " I N S C R I P T I O N <br>R E U S S I E" ;
        header("location: index"); 
        exit(); 
    
    }
} else {
    echo "E R R O R";
}

?>