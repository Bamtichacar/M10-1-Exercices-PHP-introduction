<?php

/* ----------------------     PHP - Les variables  */

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




echo "<br>";
/* --------------------------   PHP - Les conditions  */


/* Exercice 1 :
Créer une variable age et l'initialiser avec une valeur.
Si l'age est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.
 */
$age = 10;
if ($age > 18) {
    echo "Vous êtes majeur";
} else {
    echo "Vous êtes mineur";
}
echo "<br>";

// ou alors :
echo $age > 18 ?  "Vous êtes majeur" : "Vous êtes mineur";



echo "<br>";
echo "<br>";
/* Exercice 2 :
Créer deux variables age et genre. La variable genre peut prendre comme valeur : - Homme - Femme
En fonction de l'âge et du genre afficher la phrase correspondante : -Vous êtes un homme et vous êtes majeur - Vous êtes un
homme et vous êtes mineur - Vous êtes une femme et vous êtes majeur - Vous êtes une femme et vous êtes mineur
Gérer tous les cas. */
$age = 55;
$genre = "Femme";

if ($genre === "Homme" && $age >18) {
    echo "Vous êtes un homme et vous êtes majeur";
} else if ($genre = "Homme" && $age < 18){
    echo "Vous êtes un homme et vous êtes mineur";
} elseif ($genre = "Femme"&& $age > 18){
    echo "Vous êtes une femme et vous êtes majeure";
} else {
    echo "Vous êtes une femme et vous êtes mineure";
}

echo "<br>";

// ou alors
if ($age>18) {
    if ($genre === "Homme") {
        echo "Vous êtes un homme et vous êtes majeur";
    } else {
        echo "Vous êtes une femme et vous êtes majeure";
    }
} else if ($genre === "Homme") {
    echo "Vous êtes un homme et vous êtes mineur";
} else {
    echo "Vous êtes une femme et vous êtes mineure";
}


// ATTENTION on ne peut pas faire comma ça, ne marche pas : 
/* if ($age>18) {
    global $genre;
    echo $genre = "Homme" ? "Vous êtes un homme et vous êtes majeur" : "Vous êtes une femme et vous êtes majeure";
} else {
    echo $genre = "Homme" ? "Vous êtes un homme et vous êtes mineur" : "Vous êtes une femme et vous êtes mineure";
}
 */


echo "<br>";
echo "<br>";
/* Exercice 3 :
Traduire ce code avec des if et des else :
<?php
echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
?>  */
$maVariable = 'Homme';
if ($maVariable != 'Homme') {
    echo 'C\'est une développeuse !!!';
} else {
    echo 'C\'est un développeur !!!';
}

  

echo "<br>";
echo "<br>";
/* Exercice 4 :
Traduire ce code avec des if et des else :
<?php
echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
?> */
$monAge = null;
if($monAge>=18) {
    echo 'Tu es majeur';
} else {
    echo 'Tu n\'es pas majeur';
}




echo "<br>";
echo "<br>";
/* Exercice 5 :
Traduire ce code avec des if et des else :
<?php
echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
?>  */
$maVariable = false;
if($maVariable == false) {
    echo 'c\'est pas bon !!!';
} else {
    echo 'c\'est ok !!';    
}



echo "<br>";
echo "<br>";
/* Exercice 6 :
Traduire ce code avec des if et des else :
<?php
echo ($maVariable) ? 'c'est ok !!' : 'c'est pas bon !!!';     // erreur syntaxe p/r aux apostrophes
?>  */

$maVariable = true;
if($maVariable) {
    echo "c'est ok !!";
} else {
 echo "c'est pas bon !!!";
}


echo "<br>";
echo "<br>";


?>