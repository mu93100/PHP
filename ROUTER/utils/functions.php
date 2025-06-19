<?php
function createCookie($cle, $val){
    setcookie("cookie__$cle", $val, time()+86400, "\PHP\ROUTER"); 
    // adresse du chemin du dossier ROUTER  depuis la racine C:\wamp64\www\PHP\ROUTER
}


function translate($cleLanguage,$text){
    // creation d'une fonction à appeller qui contient un tableau  des langues et traductions
        $traduction=[
            'English' =>[
                "Welcome"=>"Welcome",
                "text"=>" Your current language is: ",
                //ajout pour exo
                "name"=>"Your name is "
            ],
            "French"=>[
                "Welcome"=>"Bienvenue",
                "text"=>"Ta langue est : ",
                "name"=>"Ton nom est "
            ],
            "Spanish"=>[
                "Welcome"=>"Bienvenido",
                "text"=>"Tu idioma es : ",
                "name"=> "Tu nombre es : "
            ]
            ];
            return $traduction[$cleLanguage][$text] ?? 'traduction non trouvée';
    } // $cleLanguage ::: cookie__langueChoisie

?>

<!-- setcookie : cookie entre serveur et user -->