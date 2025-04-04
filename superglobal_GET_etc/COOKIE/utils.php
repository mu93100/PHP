<?php
// ------FACUNDO

function translate($text,$language){
    // creation d'une fonction à appeller qui contient un tableau  des langues et traductions
        $traduction=[
            'English' =>[
                "Welcome"=>"Welcome",
                "text"=>" Your current language is: ",
                //ajout pour exo
                "name"=>"name"
            ],
            "French"=>[
                "Welcome"=>"Bienvenue",
                "text"=>"Ta langue est : ",
                "name"=>"nom"
            ],
            "Spanish"=>[
                "Welcome"=>"Bienvenido",
                "text"=>"Tu idioma es : ",
                "name"=> "nombre"
            ]
            ];
    
            return $traduction[$language][$text] ?? 'traduction non trouvée';
    }