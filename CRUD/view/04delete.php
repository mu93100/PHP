<!-- Formulaires de suppression pour chaque élève -->
<h2>Supprimer un élève</h2>
<?php foreach ($eleves as $e): ?>
    <form method="POST" style="display:inline">
        ID: <?= $e['id'] ?> - Nom: <?= $e['nom'] ?> - PC: <?= $e['ordinateur_numero'] ?>
        <input type="hidden" name="id" value="<?= $e['id'] ?>">
        <input type="submit" name="sup" value="Supprimer">
    </form><br>
<?php endforeach; ?>
</body>
</html>
// var $eleves définie ds readController.php
// $eleves= $stmtAll->fetchAll(PDO::FETCH_ASSOC); 
// On récupère les résultats sous forme de tableau associatif
// $eleves ::: ts les eleves   $e :: chaque eleve
// <?=  ?> ecriture simplifiée de  php
// 

Les éléments <input> de type "hidden" permettent aux développeurs web 
d'inclure des données qui ne peuvent pas être vues ou modifiées 
lorsque le formulaire est envoyé. Cela permet par exemple d'envoyer 
l'identifiant d'une commande ou un jeton de sécurité unique. 
Les champs de ce type sont invisibles sur la page.