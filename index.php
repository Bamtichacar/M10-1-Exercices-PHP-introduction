<?php

/* PHP - Les variables  */

/* Exercice 1 : Créer une variable nom et l'initialiser avec la valeur de votre choix. Afficher son contenu  */

$nom = "Pierre";

echo $nom."<br>";

echo "<br>";
/* Exercice 2 : Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
Afficher leur contenu.  */

$nom = "Paul";
$prenom = "Jacques";
$age = 77;

echo $nom." ".$prenom." ".$age."<br>";

echo "<br>";
/* Exercice 3 :
Créer une variable km. L'initialiser à 1. Afficher son contenu.
Changer sa valeur par 3. Afficher son contenu.
Changer sa valeur par 125. Afficher son contenu. */

$km = 1;
echo $km."<br>";
$km = 3;
echo $km."<br>";
$km = 125;
echo $km."<br>";

echo "<br>";
/* Exercice 4 :
Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser
avec une valeur de votre choix.
Les afficher.  */
$chaine = "hello";
$entier = 5;
$decimal = 3.14;
$booleen = true;

//echo $chaine."<br>".$entier."<br>".$decimal."<br>".$booleen."<br>";
var_dump ($chaine);
echo "<br>";
var_dump($entier);
echo "<br>";
var_dump($decimal);
echo "<br>";
var_dump($booleen);
echo "<br>";



echo "<br>";
/* Exercice 5 :
Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.
Donner une valeur à cette variable et l'afficher.  */

$a = null;
echo $a."<br>";
var_dump($a);
$a = 1;
echo "<br>";
echo $a."<br>";



echo "<br>";
/* Exercice 6 :
Créer une variable nom et l'initialiser avec la valeur de votre choix.
Afficher : "Bonjour" + nom + ", comment vas tu ?".  */
$nom = "Alfred";
echo "Bonjour $nom, comment vas-tu ? <br>";



echo "<br>";
/* Exercice 7 :
Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
Afficher : "Bonjour" + nom + prenom + ",tu as" + age + "ans".  */
$nom = "Arnaud";
$prenom = "Vivien";
$age = 33;
echo "Bonjour $nom $prenom, tu as $age ans. <br>";



echo "<br>";
/* Exercice 8 :
Créer 3 variables.
Dans la première mettre le résultat de l'opération 3 + 4.
Dans la deuxième mettre le résultat de l'opération 5 * 20.
Dans la troisième mettre le résultat de l'opération 45 / 5.
Afficher le contenu des variables. */

$a = 3+4;
$b = 5*20;
$c = 45/5;
echo "$a <br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>";
















?>