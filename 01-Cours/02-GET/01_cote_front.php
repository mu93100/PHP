<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nos produits</title>
    <style>
        body {
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        div {
            text-align: center;
            margin-bottom: 20px;
        }

        img {
            width: 200px;
            height: auto;
        }

        h1 {
            text-align: center;
            color: #cc0000;
            font-size: 2em;
            margin-bottom: 20px;
        }

        a {
            display: block;
            text-align: center;
            font-size: 1.2em;
            color: #333;
            text-decoration: none;
            padding: 10px;
            margin: 5px 0;
            background-color: #fff;
            border: 1px solid #cc0000;
            border-radius: 5px;
        }

        a:hover {
            background-color: #cc0000;
            color: #fff;
        }
    </style>
</head>
<body>

    <div>
        <img src="./img/logo_poleS.png" alt="Logo poleS">
    </div>
    <h1>Nos produits</h1>

    <a href="02_cote_back.php?article=jean&couleur=bleu&prix=30">Jean bleu</a>
    <a href="02_cote_back.php?article=robe&couleur=rouge&prix=30">Robe rouge</a>
    <a href="02_cote_back.php?article=pull&couleur=blanc&prix=30">Pull blanc</a>

</body>
</html>
