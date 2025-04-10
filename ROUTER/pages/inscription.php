<?php
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    if (isset($_POST["form_inscription"])) {
        $prenom  = $_POST['prenom']; // ?? si post[prenom] existe et n'est pas null===$prenom SINON ""
        $nom     = $_POST['nom'];
        $mot_de_passe = password_hash($_POST['mot_de_passe'],PASSWORD_DEFAULT); //PASSWORD_DEFAULT : algorythme de hachage par défaut
        //password_hash — Crée une clé de hachage pour un mot de passe POUR MDP INVISIBLES sur phpMyAdmin

        $sql="INSERT INTO user (prenom, nom, mot_de_passe) VALUES (:prenom, :nom, :mot_de_passe)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":prenom"=> $prenom,
            ":nom" => $nom, 
            ":mot_de_passe" => $mot_de_passe, 
        ]);
        echo " I N S C R I P T I O N    R E U S S I E" ;
    }
} else {
    echo "E R R O R";
}

?>
<style>
    *{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    form {
        max-width: 500px;
        margin: auto;
        padding: 1rem;
        background-color:rgb(180, 139, 1);
        border-radius: 8px;
    }
    label {
        display: block;
        margin-top: 10px;
        background-color: rgb(180, 139, 1);
        font-weight: 600;
    }
    input{
        width: 100%;
        padding: 0.5rem;
        margin-top: 5px;
        border: 1px solid rgb(164, 207, 250);
        border-radius: 4px;
        color: red;
        background-color: white;
    }
    button {
        margin-top: 15px;
        padding: 10px 20px;
        background-color:rgb(164, 207, 250);
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 600;
    }
    button:hover {
        background-color:rgb(1, 12, 24);
    }
    li{
        list-style-type: none;
    }
</style>



<h2 style="text-align: center;">S ' I N S C R I R E</h2>
<form method="post" action="form_back_end.php"> <!---action = données transférées ds la p. form_back_end --->
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" required>

    <label for="nom">Nom</label>
    <input type="text" name="nom" required>

    <label for="password">Mot de passe</label>
    <input type="password" name="mot_de_passe" required>
    
    <button name="form_inscription" type="submit">S'incrire</button>
</form>
