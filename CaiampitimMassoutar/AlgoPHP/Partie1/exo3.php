<h1>Exercices 3</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot 
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase</p>

<?php

/*
    commentaire sur plusieurs lignes
*/

// DECLARATION DES VARIABLES //

$chaineDeCaractères = "Notre formation DL commence aujourd'hui"; // string
$nouvellePhrase = str_replace ("aujord'hui", "demain", $chaineDeCaractères);



// AFFICHAGE //

echo $chaineDeCaractères. "<br>"; 
echo str_replace ("aujourd'hui", "demain", $chaineDeCaractères);