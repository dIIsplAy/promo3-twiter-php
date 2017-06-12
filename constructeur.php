<?php

include_once './PetitChien.php' ;


$chien = new PetitChien('Bryan', 'malinois');

echo $chien->nom . ' ' . $chien->race;

?>