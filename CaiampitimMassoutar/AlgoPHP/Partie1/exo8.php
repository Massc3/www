<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
forme : <br>
    Affichage (pour la table de 8) : <br>
Table de 8 : <br>
1 x 8 = 8 <br>
2 x 8 = 16 <br>
3 x 8 = 24 <br>
</p>

<?php

/*
    commentaire sur plusieurs lignes
*/

// DECLARATION VARIABLES
$i = 1;
$nb = 7;
$resultat = $i*$nb;

//CONDITION
for($i = 1; $i <= 10; $i++) {
    echo " $i * $nb = $resultat <br>";
}
//TANT QUE
$i = 1;
while($i <= 10) {
    $i++;
}