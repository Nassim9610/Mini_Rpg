<?php
// Exercice 2.3 : Les conditions
// Changez la valeur de la variable ci-dessous par le nombre entier
// de votre choix :
$nombre = -10; // Peut-être 0, -150, 10000... A votre convenance

if ($nombre % 2 ==0){
    echo("Le nombre est pair");
}
else {
    echo("le nombre est impair");
}

if ($nombre >= 100){
    echo("C'est un grand nombre");

}
else if ($nombre >= 10 and $nombre <= 99) {
    echo("C'est un nombre raisonnable");
}
else if ($nombre >= 0 and $nombre <= 9) {
    echo("C'est un petit nombre");
}
else {
    echo("Nombre négatif");
}
// Créez une condition avec if / else
// - Si le nombre est un multiple de 2 (modulo) affichez le texte 
//   "Le nombre est pair"
// - Sinon, affichez le texte "Le nombre est impair"

// Créez une autre condition avec if / else if / else
// - Si le nombre est supérieur à 100, affichez le texte
//   "C'est un grand nombre"
// - Si le nombre est compris entre 10 et 99 (inclus), affichez le
//   texte "C'est un nombre raisonnable"
// - Si le nombre est compris entre 0 et 9 (inclus), affichez le texte
//   "C'est un petit nombre"
// - Si le nombre est négatif, affichez le texte "Nombre négatif"
?>