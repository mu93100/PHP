<?php


class Teeshirt extends Model{
    public const GENRE = "Mixte";
    public const CATEGORIE = "Tee-shirt";
    
    function afficherModelUser() : string|int|float {
        return parent::afficherModelUser() . "<img src='$this->photo' alt=''>"  ;
    }   
}

?>
