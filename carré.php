<?php


class Carre {
    private $taille;
    private $couleur;
    
    function __construct($taille, $couleur) {
        $this->taille = $taille;
        $this->couleur = $couleur;
    }
    function aficherSuperficie(){
        return $this->taille * $this->taille;
        
        
    }
    public function aficher(){
        $style ='width:'. $this->taille. 'px;'
                .'height:'. $this->taille .'px;'
                . 'background-color:' . $this->couleur;
        
        return '<div style="' . $style .'"></div>';
    }
    
    function getTaille() {
        return $this->taille;
    }

    function getCouleur() {
        return $this->couleur;
    }

    function setTaille($taille) {
        $this->taille = $taille;
    }

    function setCouleur($couleur) {
        $this->couleur = $couleur;
    }



}

