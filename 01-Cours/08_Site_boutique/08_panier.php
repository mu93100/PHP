<?php

require_once 'inc/init.inc.php';

if (isset($_POST['ajout_panier']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id_produit'])) {
        $produit = executeRequete("SELECT * FROM produit WHERE id_produit = :id", [':id' => $_POST['id_produit']]);

        if ($produit->rowCount() > 0) {
            $produit_recupere = $produit->fetch(PDO::FETCH_ASSOC);

            if (!isset($_SESSION['panier'])) {
                $_SESSION['panier'] = [];
            }

            // On vérifie si le produit existe déjà dans la session avec son id

            $idExiste = false;

            // On boucle sur la session (même s'il n'y a qu'un seul produit)
            foreach ($_SESSION['panier'] as $id) {
                // On compare l'id des produits dans la session avec l'id qu'on vient de récupérer de la BDD
                // S'il existe, on passe idExiste en true;
                if ($id['id_produit'] == $produit_recupere['id_produit']) {
                    $idExiste = true;
                }
            }

            // Si à ce moment du code idExiste est en false, ça veut dire que la boucle n'a pas trouvé de correspondance entre les id de la session et celui récupéré de la BDD, donc le produit n'existe pas dans la session, on peut l'ajouter, ça évite les doublons dans la session
            if (!$idExiste) {
                $_SESSION['panier'][] = $produit_recupere;
            }
        }

        // On redirige la page, sur la même page mais sans les paramètres pour éviter de resoumettre le formulaire à chaque rechargement
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    }
}

?>
<?php require_once 'inc/haut.inc.php'; ?>
<h2>Page panier</h2>
<?php if (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) { ?>

    <div class="container">
        <?php $paniers = $_SESSION['panier'];

        foreach ($paniers as $p) { ?>
            <div>
                <div>
                    <img src="<?php echo ROOT . $p['photo'] ?>" alt="image">
                </div>
                <h2><?= htmlspecialchars($p['titre'], ENT_QUOTES); ?></h2>
                <p><?= htmlspecialchars($p['prix'], ENT_QUOTES); ?></p>
            </div>
        <?php }
        ?>

    </div>

<?php } else { ?>
    <p>Votre panier est vide</p>
<?php } ?>