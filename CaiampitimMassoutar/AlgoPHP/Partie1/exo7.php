<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge : <br>
Poussin : entre 6 et 7 ans <br>
Pupille : entre 8 et 9 ans <br>
Minime : entre 10 et 11 ans <br>
Cadet : à partir de 12 ans <br>
Si la catégorie n’est pas gérée, merci de le préciser.
</p>

<?php

/*
    commentaire sur plusieurs lignes
*/

// DECLARATION VARIABLES
$categorie = "poussin";
$categorie2 = "Pupille";
$categorie3 = "Minime";
$categorie4 = "cadet";
$age = 11;
$categorie5 = "hors categrorie";


//CONDITION
if ($age <8) {
    $resultat = $categorie;
} elseif($age < 10) {
    $resultat = $categorie2;
} elseif($age <12) {
    $resultat = $categorie3;
} elseif($age >= 12) {
    $resultat = $categorie4;
} else {
    $resultat = $categorie5;
}
//AFFICHAGE RESULTAT
echo "La personne qui a $age ans est un $resultat <br>";
