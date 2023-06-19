<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<?php

/*
    commentaire sur plusieurs lignes
*/

// DECLARATION DE VARIABLES 


$nFranc = 1;
$nEuros = 0.15;
$i = 100;
$resultat;


// CONDITION
echo "Montant en franc : $i. <br>";
$resultat = $i * $nEuros;
$resultat = number_format($resultat, 2); // ARRONDIR A 2 DECIMALES
echo "$i francs";
echo " = $resultat €" ;

