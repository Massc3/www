<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d’afficher le nombre de marques de voitures présentes dans le tableau.
Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
Affichage (attention à utiliser une liste à puces) <br>
Il y a 4 marques de voitures dans le tableau : <br>
Peugeot <br>
Renault <br>
BMW <br>
Mercedes <br>

</p>

<?php

/*
    commentaire sur plusieurs lignes
*/

// DECLARATION VARIABLES
$marques = ["Mercedes", "BMW", "Toyota", "Tesla"];
$nbMarques = count($marques);

echo "Il y a $nbMarques marques de voitures dans le tableau. <br> ";
foreach($marques as $marque) {
    echo $marque."<br>";
}