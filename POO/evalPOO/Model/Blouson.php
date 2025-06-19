<?php

class Blouson extends Model{
    public const GENRE = "Femme";
    public const CATEGORIE = "Veste * blouson * parka * manteau";
    
    function afficherModelUser() : string|int|float {
        return parent::afficherModelUser() . "<img src='$this->photo' alt=''>"  ;
    }   
    }



?>
