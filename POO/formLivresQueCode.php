<?php
session_start();

class Livre {
    private string $titre;
    private string $auteur;
    private int $annee;
    private bool $disponible;
    private int $nombreEmprunts = 0;

    public function __construct(string $a, string $b, int $c, bool $d)
    {
        $this->titre = $a;
        $this->auteur = $b;
        $this->annee = $c;
        $this->disponible = $d;
    }

    public function getTitre(): string { return $this->titre; }

    public function getAuteur(): string { return $this->auteur; }
    public function getAnnee(): int { return $this->annee; }
    public function getDisponible(): bool { return $this->disponible; }
    public function getNombreEmprunts(): int { return $this->nombreEmprunts; }

    public function setDisponible(bool $d): void { $this->disponible = $d; }

    public function emprunter(): string {
        if ($this->disponible) { 
            $this->nombreEmprunts++; 
            $this->setDisponible(false); 
            return "✅ Emprunt réussi de <strong>{$this->titre}</strong> <?php ";
        } else {
            return "❌ Livre déjà emprunté";
        }
    }

    public function rendreLivre(): string {
        $this->setDisponible(true);
        return "✅ Livre rendu : {$this->titre}";
    }

    public function afficherFiche(): string {
        return "📖 <strong>{$this->titre}</strong> - {$this->auteur} ({$this->annee})<br>" .
                "Disponible : " . ($this->disponible ? "Oui" : "Non") . "<br>" .
                "Nombre d'emprunts : {$this->nombreEmprunts}<br>";
    }
}

// Simuler une base de données via session
if (!isset($_SESSION['livres'])) { $_SESSION['livres'] = []; } 

// Quand le bouton "Ajouter" est cliqué
if (isset($_POST['ajouter'])) {
    if (! is_numeric($_POST['annee'])) {
        $messageError=  "⚡⛔ Veuillez renseigner une année en chiffre";
    }else {
    $_SESSION['livres'][] = new Livre(
        $_POST['titre'], 
        $_POST['auteur'], 
        $_POST['annee'],
        true
        );
    }
}


// Quand le bouton "Emprunter" est cliqué
if (isset($_POST['emprunter'])) {
    $index = (int) $_POST['index'];  // index du livre dans la session sur lequel on clique emprunter sur liste livres
    $message = $_SESSION['livres'][$index]->emprunter(); // message ✅ Emprunt réussi stocké ds méthode emprunter() 
}
// Quand le bouton "Rendre" est cliqué
if (isset($_POST['rendre'])) {
    $index = (int) $_POST['index'];  // index du livre dans la session sur lequel on clique emprunter sur liste livres
    $message = $_SESSION['livres'][$index]->rendreLivre();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bibliothèque</title>
    <style>
        *{font-family: 'Courier New', Courier, monospace;}
    </style>
</head>
<body>
    <h1>Gestion de Bibliothèque</h1>
    <!-- Message -->
    
    <!-- FORMULAIRE D'AJOUT -->
    <h2>Ajouter un livre</h2>
    <form method="POST">
        <input type="text" name="titre" placeholder="Titre" required>
        <input type="text" name="auteur" placeholder="Auteur" required>
        <input type="text" name="annee" placeholder="Année" required>
        <button type="submit" name="ajouter">➕ Ajouter</button>
    </form>
    <p id="flash-messageError">
        <?php if (isset($_POST['ajouter']) && (!empty($messageError)) ) {
            echo "<p style ='color: #4905f5;'>$messageError</p>"; 
            }?>
    </p>

    <!-- LISTE DES LIVRES -->
    <h2>Liste des livres</h2>
    <div id="flash-message">
    <!-- <?php if (!empty($message)) echo "<p><strong>$message</strong></p>"; ?> -->
        <?php if (!empty($message)) echo "<p style ='color: #4905f5;'>$message</p>"; ?>
    </div>
    <?php foreach ($_SESSION['livres'] as $index => $livre): ?>
        <div style="margin-bottom: 15px; border-bottom:1px dotted #4905f5; padding-bottom:10px;">
            <?= $livre->afficherFiche(); ?>
            
            <?php if ($livre->getDisponible()): ?>
            <form method="POST" style="display:inline;">
                <input type="hidden" name="index" value="<?= $index; ?>">
                <button type="submit" name="emprunter">📖→ Emprunter</button>

            </form>
            <?php endif; ?>
            
            <?php if (!$livre->getDisponible()): ?>
            <form method="POST" style="display:inline;">
                <input type="hidden" name="index" value="<?= $index; ?>">
                <button type="submit" name="rendre">←📖 Rendre</button>
            </form>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>

    <script>
// Masquer le message après 3 secondes (3000 ms)
setTimeout(() => {
    const msg = document.getElementById("flash-message");
    if (msg) msg.style.display = "none";
}, 3000);

setTimeout(() => {
    const msg = document.getElementById("flash-messageError");
    if (msg) msg.style.display = "none";
}, 4000);

</script>
</body>
</html>