<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2) <br>
Prix unitaire de l’article : 9.99 € <br>
Quantité : 5 <br>
Taux de TVA : 0.2 <br>
Le montant de la facture à régler est de : 59.94  <br>
</p>

<?php

/*
    commentaire sur plusieurs lignes
*/

// DECLARATION VARIABLES
// Saisie des données
$quantité = 5;
$prixHorsTaxe = 9.99;
$tauxTVA = 0.2;
$MontantHT;
$MontantTVA;
$MontantTTC;


// CONDITION 
// Calcul du montant HT
$montantHT = $quantité * $prixHorsTaxe;
echo "le montant hors taxe est de $montantHT €<br>"; 

// Calcul du montant de TVA
$montantTVA = $montantHT * $tauxTVA;
echo "le montant de la TVA est de $montantTVA €<br>";

// Calcul du montant TTC
$montantTTC = $montantHT + $montantTVA;
echo "le montant total de la facture s'elève à $montantTTC €"; // Affichage du résultat

