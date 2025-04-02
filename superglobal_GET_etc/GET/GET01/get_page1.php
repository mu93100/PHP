<?php
?>
<style>*{ font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;}</style>
<h1>Superglobales  $_GET</h1>
<h4>$_GET est utilisé pour :</h4>
<ul>
    <li>Passer des infos entre pages</li>
    <li>Filtrer ou rechercher un contenu</li>
</ul>
<h3>Avantages de $_GET</h3>
<ul>
    <li>Simple à utiliser</li>
    <li>Données visibles ds l'URL</li>
</ul>


<h2>page 1</h2>
<a href="get_page2?article=jean&couleur=blanc&prix=123">jean rouge</a>
<a href="get_page2?article=chemise&couleur=black&prix=90">chemise black</a>
<a href="get_page2?article=jean&couleur=black&prix=150">jean black</a>
<p>on ouvre TJRS la p.2 ::: équivalent à création de p. article ds Wordpress</p>

<p>$_GET est comme un tableau vide; après on ne voit plus de tab. 
    mais des trucs cô ça ::: ?article=jean&couleur=black&prix=150</p> 
    <p>? --> indique le début des paramètres GET qui sont envoyés au fichier PHP<br>
        & --> est utilisé pour séparer les paramèters ds une URL</p>
    
<p>$_GET est utilisé pr envoyer des infos via l'URL<br> 
ici article=chemise est un paramètre GET<br> article ::: clé, chemise ::: val.</p>
<p> en PHP une var. superglobale est une var. intégrée qui est tjs dispo, même à l'intérieur d'une Fo</p>
<p>les superglobales sont prédéfinies par PHP</p>
<p>( ( requetes GET : Qd on cherche une pant. T34 noir) )</p>

<
<h4>Limite de long. d'une URL :</h4>
<p> Les navigateurs et serveurs limitent la taille des URL / en Gal --> 2083 caractères MAX</p>
<h5>La VERIF des données existantes ou pas est super importante pour traitement de données en nb
    avec :<br> if (isset($_GET["clé"]))      ou     if (array_key_exists("clé", $_GET))
</h5>