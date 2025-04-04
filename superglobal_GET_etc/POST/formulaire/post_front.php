<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Formulaire 2</title>
</head>
<body>

<?php var_dump($_POST) ?>
<h1>POST </h1>
<p>Dans un formulaire utilisant la methode POST pour envoyer des données, les informations soumises ne sont pas visibles dasn l'URL</p>
<p>Les données envoyées via POST sont incorporer dans le corps  de la requete HTPP</p>
<p>Pour envoyer via méthode POST  indique method = "post" dans balise form</p>
    
<form action="back.php"  method="post">
	<label>Pseudo </label><br>
	<input type="text" name="pseudo"><br><br>

	<label>Email</label><br>
	<input type="text" name="email"><br><br>

	<input type="submit"  value="Envoyer">
</form>



</body>
</html>