<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of personne
 *
 * @author cristophol
 */
class Personne {
   private $nom;
   private $prenom;
   private $age;
   private $region;
    
 public function __toString() {
        return 'mon nom est'. $this->nom . ',ma race est'. $this->prenom . ',ma couleur est'. $this->age . ',je suis née le'. $this->region;
    } 
     public function __construct($nom, $prenom, $region, $age) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->region = $region;
        $this->age = $age;
        
     }    
    
}
