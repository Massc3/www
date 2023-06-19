<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<?php

/* declaration de variables sur plusieurs lignes */


// DECLARATION DES VARIABLES //

$chaineDeCaracteres = "Engage le jeu que je le gagne"; //string

//METTRE LA PHRASE EN MINUSCULE
$phraseMinuscule = strtolower ($chaineDeCaracteres);
echo $phraseMinuscule."<br>";

//METTRE LA PHRASE SANS ESPACE
$phraseMinuscule = str_replace (" ", "", $phraseMinuscule);
echo $phraseMinuscule."<br>";

//INVERSER LA PHRASE
$reverse = strrev($phraseMinuscule);
echo $reverse. "<br>";

//CONDITION

if ($phraseMinuscule == $reverse) {
    echo "c'est un palindrome";
} else {
    echo "ce n'est pas un palindrome";
}




