<?php




    
class Personne {
   private $nom;
   private $prenom;
   private $age;
   private $region;
   
   
   
   public function __construct($nom, $prenom, $region, $age) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->region = $region;
        $this->age = $age;
        
     }  
   
   function getNom() {
       return $this->nom;
   }

   function getPrenom() {
       return $this->prenom;
   }

   function getAge() {
       return $this->age;
   }

   function getRegion() {
       return $this->region;
   }

   function setNom($nom) {
       $this->nom = $nom;
   }

   function setPrenom($prenom) {
       $this->prenom = $prenom;
   }

   function setAge($age) {
       $this->age = $age;
   }

   function setRegion($region) {
       $this->region = $region;
   }

       
 /*public function __toString() {
        return 'mon nom est'. $this->nom . ',ma prenom est'. $this->prenom . ',mon age est'. $this->age . ',ma region'. $this->region;
    } */
     
    
}
