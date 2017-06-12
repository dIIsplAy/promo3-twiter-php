<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once'./PetitChien.php';
        
        $chien1 = new PetitChien('toto', 'boxer' ,'23/07/93', 'rouge');
        
        /*
        $chien1->nom ='Bryan';
        $chien1->couleur ='brown';
        $chien1->dateNaissance = '24/08/94';
        $chien1->race = 'malinois';
         
        
        echo $chien1->race.',';
        echo $chien1->nom.',';
        echo $chien1->couleur.',';
        echo $chien1->dateNaissance.','; 
         * 
         */ 
        echo $chien1;
        $chien1->aboyer();
        ?>
    </body>
</html>
