<?php
// Exercice 3.3 : Les boucles (for ou foreach)

// Voici un tableau indexé :
$tableauPrenoms = ["Bob", "Alice", "James", "Louise"];
// Les différentes cases de ce tableau sont accessibles de cette manière :
// $tableauPrenoms[0] : Renvoie "Bob"
// $tableauPrenoms[1] : Renvoie "Alice"
// $tableauPrenoms[2] : Renvoie "James"
// $tableauPrenoms[3] : Renvoie "Louise"
foreach($tableauPrenoms as $valeur){
   echo($valeur);
   echo(" ");
   echo "<br>";
}

for ($i = 0; $i < count($tableauPrenoms); $i++){
    echo($tableauPrenoms[$i]);
    echo(" ");

}

// Créez une boucle (for ou foreach) pour afficher les prénoms séparés
// par un espace
// Rendu attendu : Bob Alice James Louise
// -> Pour rappel : for($i = 0; $i < count($tableau); $i++)
// -> Pour rappel : foreach($tableau as $valeur)
?>
