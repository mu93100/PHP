<h2>qu'est ce qu'une constante de class</h2>
<p>Une const. de class est une val. fixe, immuable, qui appartient à une class et non à un objet</p>
<p>Elle se déclare par le mot-clé const, pas de $ et en MAJ</p>
<p>ON PEUT AUSSI DéFINIR UNE CONST EN PHP PROCéDURAL avec :: define ("NOM_DE_LA_CONST", "val. de la const") <br>
</p>


<?php
class MaClass{
    public const MACONSTANTE = "🤖Val. de la const.";
}
echo MaClass::MACONSTANTE;


class Exemple {
    private const TVA = 0.2;

    public function getTVA(): float {
        return self::TVA;
    }
}
?>
<p>Accés à la const. ::: <code>MaClass::MACONSTANTE</code></p>
<h2>Static</h2>
<p>le mot-clé static est utilisé pour déclarer des Ptés et des method qui appartiennent 
    à la class elle-même, et non aux instances de cette classe</p>
<p>Les méthodes et Ptés static peuvent être récupérées ss créer d'objet de la classe</p>
<p>exemple</p>
<li>public static $test</li>
<li>public static function test() : void</li>
<?php
class CourPhp{
    public const VERSION = "🙀 1.0.0"; // const. de classe
    public static $nbInstances = 0; // Pté statique

    private static $prive = "je suis vivible en passant par les method de la class"; 
    private $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
        self::$nbInstances++;  //
    }
    private static function staticFunctionPrivate() { 
        // method privée  ON ne peut pas l'appeler depuis l'ext. :::peut sortir de la class/être exprimée via une autre Fo
        // on appelle la method STATIC PRIVATE depuis l'ext. avec une méthode staticPUBLIC
        echo "je suis uen méthode static privée";
    }
    public static function afficherNbInstances() : void {
        echo "Total des instances : " . self::$nbInstances . " "; echo"<br>";
        echo self::$prive;                                        echo"<br>";
        self::staticFunctionPrivate();                            echo"<br>";
    }
}
echo CourPhp::VERSION;          echo"<br>";
echo CourPhp::$nbInstances;     echo"<br>";
$eleve1 = new CourPhp("adam");  echo"<br>";
$eleve1 = new CourPhp("adam");  echo"<br>";

CourPhp::afficherNbInstances(); echo"<br>"; // === $eleve1->afficherNbInstances();
class CourStatic extends CourPhp{
    public const VERSION = "2.0.0";
}
echo CourStatic::VERSION; // SEUL MOYEN DE "MODIFIER  on a changé la val de la const VIA L'ENFANT

// on ne met pas de tab. dans une const


// ON NE PEUT PAS MODIFIER LA CONST;

// self (===ma class)::$nbInstances POUR UNE Pté STATIC === CourPhp::VERSION pour CONST.
// 👉 On utilise self:: pour accéder à :
// - une constante de classe
// - une méthode statique
// - ou un élément défini au niveau de la classe (et pas de l’objet)
// instance =un objet
// class Exemple {
//     private const TVA = 0.2;

//     public function getTVA(): float {
//         return self::TVA;
//     }
// }

class Constconfig{
    public const PATH= "http://localhost/PHP/POO/constante_static.php";
    public const PATHLINK= "http://localhost/PHP/POO/constante_static.php";
}

class StatutCommande{
    public const EN_ATTENTE = 'en attente';
    public const VALIDE = 'valide';
    public const ANNULEE = 'annulee';
}
$statut =StatutCommande::EN_ATTENTE;
switch ($statut) {
    case StatutCommande::VALIDE:
        echo "✅ comm VALIDée <br>";
        break;
    
        case StatutCommande::ANNULEE:
            echo "❌ comm annulée <br>";
            break;
}
?>