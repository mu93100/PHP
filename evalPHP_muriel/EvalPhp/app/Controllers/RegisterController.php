<?php
require_once (__DIR__ . '/../Utils/checkForm.php');
require_once '/wamp64/www/PHP/evalPHP_muriel/EvalPhp/app/Views/security/register.view.php';
// require_once(__DIR__ . '/../Views/security/register.view.php');
// $arrayError = [];

// if(isset($_POST['pseudo'])){
//     check('pseudo', $_POST['pseudo']);
//     check('mail', $_POST['mail']);
//     check('password', $_POST['password']);

//     if(empty($arrayError)){
//         $pseudo = htmlspecialchars($_POST['pseudo']);
//         $mail = htmlspecialchars($_POST['mail']);
//         $password = htmlspecialchars($_POST['password']);
//         $register_date = date('Y-m-d');
//         $role = 1;

//         //Verifie si l'utilisateur existe:
//         //On prepare la requete:
//         $userQuery = 'SELECT * FROM `user` WHERE mail = :mail';
//         // Je prepare ma requete sql a l'envoie
//         $userStatement = $mysqlClient->prepare($userQuery);
//         // Je modifie la valeur du mail reçu
//         $userStatement->bindParam(':mail', $mail);
//         //On execute la requete avec le param' mail
//         $userStatement->execute();
//         //dans la variable user je met la reponse de ma requete
//         $user = $userStatement->fetch();

//         if($user){
//             //s'il exist on renvoie vers /
//             redirectToRoute('/');
//         } else {
//         //Hash le mot de passe :
//         $passwordHash = password_hash($password, PASSWORD_DEFAULT);

//         //Je peux envoyer la requetes :
//         $query = 'INSERT INTO user (`pseudo`, `mail`, `password`, `register_date`, `id_role`)
//                 VALUES (:pseudo, :mail, :password, :register_date, :id_role)';
//         $queryStatement = $mysqlClient->prepare($query);
//         $queryStatement->bindValue(':pseudo', $pseudo);
//         $queryStatement->bindValue(':mail', $mail);
//         $queryStatement->bindValue(':password', $passwordHash);
//         $queryStatement->bindValue(':register_date', $register_date);
//         $queryStatement->bindValue(':id_role', $role);

//         $queryStatement->execute();

//         redirectToRoute('home');

//         }
//     }
// }
?>
<h1>Inscription</h1>
<form method="POST">
    <div class="col-md-4 mx-auto d-block mt-5">
        <div class="mb-3">
            <label for="pseudo" class="form-label">Pseudo</label>
            <input type="text" class="form-control" name='pseudo' id="pseudo">
            <?php if (isset($arrayError['pseudo'])) {
				?>
					<p class='text-danger'><?= $arrayError['pseudo'] ?></p>
				<?php
            } ?>
        </div>
        <div class="mb-3">
            <label for="mail" class="form-label">E-mail</label>
            <input type="email" class="form-control" name='mail' id="mail">
            <?php if (isset($arrayError['mail'])) {
				?>
					<p class='text-danger'><?= $arrayError['mail'] ?></p>
				<?php
            } ?>
        </div>
        <div class="mb-1">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name='password' id="password">
            <?php if (isset($arrayError['password'])) {
				?>
					<p class='text-danger'><?= $arrayError['password'] ?></p>
				<?php
            } ?>
        </div>
        <button type="submit" class="btn colorPurpel mt-3">Inscription</button>
    </div>
</form>