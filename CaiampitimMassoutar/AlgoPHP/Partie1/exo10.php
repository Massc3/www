<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €. <br>
Affichage : <br>
Montant à payer : 152 € <br>
Montant versé : 200 € <br>
Reste à payer : 48 € <br>

Rendue de monnaie : <br>
4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 € <br>
</p>

<?php

/*
    commentaire sur plusieurs lignes
*/

// DECLARATION VARIABLES
$montantPayer = 152;
$montantVersé = 200;
$renduMonnaie = $montantVersé - $montantPayer;
$resultat = "fin de transaction";
$billet10 =0;
$billet5 = 0;
$billet2 = 0;
$billet1 = 0;
$i=0;



// Afficher le montant à payer
echo "montant à payer : $montantPayer <br> "; 
// Afficher le montant à verser 
echo "montant versé : $montantVersé. <br> ";
//Afficher le rendue de monnaie 
// while ($renduMonnaie == 0) {
    while ($renduMonnaie >= 10) {
        // echo "rendre billet de 10 euros <br>"; 
        $renduMonnaie -=10;
        $billet10++;
        $i++;
    }
    echo "il faut rendre ". $billet10." billet de 10 euros. <br>";

    while ($renduMonnaie >= 5) {
        // echo "rendre billet de 5 euros <br>"; 
        $renduMonnaie -=5;
        $billet5++;
        $i++;
    }
    echo "il faut rendre ". $billet5." billet de 5 euros. <br>";

    while ($renduMonnaie >= 2) {
        // echo "rendre billet de 2 euros <br>"; 
        $renduMonnaie -=2;
        $billet2++;
        $i++;
    }
    echo "il faut rendre ". $billet2." billet de 2 euros. <br>";

    while ($renduMonnaie >= 1) {
        // echo "rendre billet de 1 euros <br>"; 
        $renduMonnaie -=1;
        $billet1++;
        $i++;
    }
    echo "il faut rendre ". $billet1." billet de 1 euros. <br>";


