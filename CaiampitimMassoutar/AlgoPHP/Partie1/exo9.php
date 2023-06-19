<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
Affichage :
Age : 32
Sexe : F
La personne est imposable.
</p>

<?php

/*
    commentaire sur plusieurs lignes
*/

// DECLARATION VARIABLES
$age = "25";
$sexe = "F";

//CONDITION

if ($age >= 18 && $age <= 35) {
    $resultat = "imposable";
} else {
    $resultat = "non imposable";
}


$result = $age;
echo "Pour $sexe la personne a $age ans et est $resultat <br>";

$age = "19";
$sexe = "H";

//CONDITION

if ($age >= 20) {
    $resultat = "imposable";
} else {
    $resultat = "non imposable";
}


$result = $age;
echo "Pour $sexe la personne a $age ans et est $resultat <br>";
