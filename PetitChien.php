<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PetitChien
 *
 * @author cristophol
 */
class PetitChien {
     public $nom;
    public $race;
    public $couleur;
    public $dateNaissance;
    
    public function aboyer(){
    echo'wouf wouf wouf';
    }
    public function __toString() {
        return 'mon nom est'. $this->nom . ',ma race est'. $this->race . ',ma couleur est'. $this->couleur . ',je suis née le'. $this->dateNaissance;
    } 
    public function __construct($nom, $race, $couleur, $dateNaissance) {
        $this->nom = $nom;
        $this->couleur = $couleur;
        $this->race = $race;
        $this->dateNaissance = $dateNaissance;
                
    }
}
