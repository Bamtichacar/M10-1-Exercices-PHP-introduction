<?php

/* ----------------------     PHP - Les variables  */
echo "<h1>LES VARIABLES</h1>";

/* Exercice 1 : Créer une variable nom et l'initialiser avec la valeur de votre choix. Afficher son contenu  */
echo "<h3>Exercice 1</h3>";

$nom = "Pierre";

echo $nom."<br>";

echo "<br>";
/* Exercice 2 : Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
Afficher leur contenu.  */
echo "<h3>Exercice 2</h3>";

$nom = "Paul";
$prenom = "Jacques";
$age = 77;

echo $nom." ".$prenom." ".$age."<br>";

echo "<br>";
/* Exercice 3 :
Créer une variable km. L'initialiser à 1. Afficher son contenu.
Changer sa valeur par 3. Afficher son contenu.
Changer sa valeur par 125. Afficher son contenu. */
echo "<h3>Exercice 3</h3>";

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
echo "<h3>Exercice 4</h3>";

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
echo "<h3>Exercice 5</h3>";


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
echo "<h3>Exercice 6</h3>";

$nom = "Alfred";
echo "Bonjour $nom, comment vas-tu ? <br>";



echo "<br>";
/* Exercice 7 :
Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
Afficher : "Bonjour" + nom + prenom + ",tu as" + age + "ans".  */
echo "<h3>Exercice 7</h3>";

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
echo "<h3>Exercice 8</h3>";


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
echo "<h1>LES CONDITIONS</h1>";


/* Exercice 1 :
Créer une variable age et l'initialiser avec une valeur.
Si l'age est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.
 */
echo "<h3>Exercice 1</h3>";

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
echo "<h3>Exercice 2</h3>";

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
echo "<h3>Exercice 3</h3>";

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
echo "<h3>Exercice 4</h3>";

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
echo "<h3>Exercice 5</h3>";

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
echo "<h3>Exercice 6</h3>";


$maVariable = true;
if($maVariable) {
    echo "c'est ok !!";
} else {
 echo "c'est pas bon !!!";
}


echo "<br>";
echo "<br>";




/*  ---------------------------------- PHP - Les boucles  */
echo "<h1>LES BOUCLES</h1>";

/* Exercice 1 :
Créer une variable et l'initialiser à 0.
Tant que cette variable n'atteint pas 10, il faut : - l'afficher - l'incrementer */
echo "<h3>Exercice 1</h3>";

$a = 0;
for($i=0; $i<=10;$i++) {
    echo $a++;
}




echo "<br>";
echo "<br>";
/* Exercice 2 :
Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas supérieur à 20 : - multiplier la première variable avec la deuxième - afficher le résultat -
incrementer la première variable  */
echo "<h3>Exercice 2</h3>";

$a = 0;
$b = 43;
while($a < 20) {
    echo $a * $b ."<br>" ;
    $a++;
}


echo "<br>";
echo "<br>";
/* Exercice 3 :
Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas inférieur ou égale à 10 : - diviser la première variable par la deuxième - afficher le résultat -
décrémenter la première variable  */
echo "<h3>Exercice 3</h3>";

$a = 100;
$b = 23;
while($a > 10) {
    echo $a/$b."<br>";
    $a--;
}




echo "<br>";
echo "<br>";
/* Exercice 4 :
Créer une variable et l'initialiser à 1.
Tant que cette variable n'atteint pas 10, il faut : - l'afficher - l'incrementer de la moitié de sa valeur  */
echo "<h3>Exercice 4</h3>";

$a = 1;
while($a < 10) {
    echo $a."<br>";
    $a +=$a/2;
}




echo "<br>";
echo "<br>";
/* Exercice 5 :
En allant de 1 à 15 avec un pas de 1, afficher le messageOn y arrive presque.  */
echo "<h3>Exercice 5</h3>";
for($i= 0; $i<= 15; $i++) {
    echo "On y arrive presque <br>";
}




echo "<br>";
echo "<br>";
/* Exercice 6 :
En allant de 20 à 0 avec un pas de 1, afficher le messageC'est presque bon.  */
echo "<h3>Exercice 6</h3>";
for($i= 20; $i>=0; $i--) {
    echo "C'est presque bon <br>";
}




echo "<br>";
echo "<br>";
/* Exercice 7 :
En allant de 1 à 100 avec un pas de 15, afficher le messageOn tient le bon bout. */
echo "<h3>Exercice 7</h3>";

for($i= 1; $i<= 100; $i+=15) {
    echo "On tient le bon bout <br>";
}



echo "<br>";
echo "<br>";
/* Exercice 8 :
En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!. */
echo "<h3>Exercice 8</h3>";

for($i= 200; $i>= 0; $i-=12) {
    echo "Enfin !!!! <br>";
}


echo "<br>";
echo "<br>";





/* -----------------------------------  PHP - Les tableaux  */
echo "<h1>LES TABLEAUX</h1>";

/* Exercice 1
Créer un tableau mois et l'initialiser avec les valeurs suivantes : -janvier - février - mars - avril - mai - juin - juillet - aout - septembre - octobre - novembre - décembre  */
echo "<h3>Exercice 1</h3>";
$mois = [
    "janvier",
    "février",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "aout",
    "septembre",
    "octobre",
    "novembre",
    "décembre"];

var_dump($mois);
echo "<br>";
echo "<br>";

foreach($mois as $value) {
    echo "$value <br>";
}

echo "<br>";
echo "<br>";

/* Exercice 2
Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.  */
echo "<h3>Exercice 2</h3>";

echo $mois[2];


echo "<br>";
echo "<br>";
/* Exercice 3
Avec le tableau de l'exercice , afficher la valeur de l'index 5.  */
echo "<h3>Exercice 3</h3>";

echo $mois[5];



echo "<br>";
echo "<br>";
/* Exercice 4
Avec le tableau de l'exercice 1, modifier le mois deaout pour lui ajouter l'accent manquant.  */
echo "<h3>Exercice 4</h3>";

$mois[7] = "août";

echo $mois[7];



echo "<br>";
echo "<br>";
/* Exercice 5
Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.*/
echo "<h3>Exercice 5</h3>";

$depHautDeFrance = [
    "02" => "Aisne",
    "59" => "Nord",
    "60" => "Oise",
    "62" => "Pas-de-Calais",
    "80" => "Somme",
];

foreach($depHautDeFrance as $num => $value) {
    echo "$num : $value <br>";
}
echo "<br>";

// on peut aussi faire pour avoir que les valeurs
/* foreach($depHautDeFrance as $x ) {
    echo "$x <br>";
}

echo "<br>";
 */


echo "<br>";
echo "<br>";
/* Exercice 6
Avec le tableau de l'exercice 5, afficher la valeur de l'index 59. */
echo "<h3>Exercice 6</h3>";

echo $depHautDeFrance["59"];



echo "<br>";
echo "<br>";
/* Exercice 7
Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.  */
echo "<h3>Exercice 7</h3>";

$depHautDeFrance["51"] = "Reims";

var_dump($depHautDeFrance);


echo "<br>";
echo "<br>";
/* Exercice 8
Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.  */
echo "<h3>Exercice 8</h3>";

foreach($mois as $x) {
    echo "$x <br>";
}



echo "<br>";
echo "<br>";
// pour info on peut aussi faire pour avoir les index à côté :
foreach($mois as $num => $value) {
    echo "$num : $value <br>";
}



echo "<br>";
echo "<br>";
/* Exercice 9
Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.  */
echo "<h3>Exercice 9</h3>";

foreach($depHautDeFrance as $x) {
    echo "$x <br>";
}




echo "<br>";
echo "<br>";
/* Exercice 10
Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
Cela pourra être, par exemple, de la forme : "Le département" + nom_departement + "a le numéro" + num_departement */
echo "<h3>Exercice 10</h3>";

foreach($depHautDeFrance as $num => $value) {
    echo "Le département $value a le numéro $num <br>";
}

echo "<br>";
echo "<br>";



/* --------------------------------  PHP - Les fonctions  */
echo "<h1>LES FONCTIONS</h1>";


/* Exercice 1
Faire une fonction qui retourne true. */
echo "<h3>Exercice 1</h3>";

function retourneTrue (){
    return true;
}
var_dump (retourneTrue());



echo "<br>";
echo "<br>";
/* Exercice 2
Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine. */
echo "<h3>Exercice 2</h3>";

function retourneChainePasseeEnParametres ($chaine) {
    return $chaine;
}
echo retourneChainePasseeEnParametres ("hi");

echo "<br>";
// 2e version
function retourneChainePasseeEnParametresVersion2 ($chaine) {
    echo $chaine;
}
retourneChainePasseeEnParametresVersion2 ("hi");



echo "<br>";
echo "<br>";
/* Exercice 3
Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoit la concaténation de ces deux chaines  */
echo "<h3>Exercice 3</h3>";

function concatDesDeuxChainesEnParametre ($chaine1, $chaine2) {
    return $chaine1 . $chaine2;
}
echo concatDesDeuxChainesEnParametre ("etoile","polaire");

echo "<br>";
echo "<br>";
/* Exercice 4
Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner : -Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième - Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième - Les deux nombres sont identiques si les deux nombres sont égaux  */
echo "<h3>Exercice 4</h3>";
function verifNombres ($a,$b) {
    if($a>$b) {
        echo "Le premier nombre est plus grand";
    } else if($a<$b) {
        echo "Le premier nombre est plus petit";
    } else {
        echo "Les deux nombres sont identiques";
    }
}

verifNombres (3,5);
echo "<br>";
verifNombres (8,8);
echo "<br>";
verifNombres (9,5);
echo "<br>";





echo "<br>";
echo "<br>";
/* Exercice 5
Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres. */
echo "<h3>Exercice 5</h3>";

function concatNombreEtChaaine ($nombre,$chaine) {
    return $nombre . $chaine;
}
echo concatNombreEtChaaine (5," c'est le chiffre cinq");


echo "<br>";
echo "<br>";
/* Exercice 6
Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit renvoyer une chaine de la forme :
"Bonjour" + nom + prenom + ",tu as" + age + "ans".  */
echo "<h3>Exercice 6</h3>";
function nomPrenomAge ($nom, $prenom, $age) {
    echo "Bonjour ". $nom ." ". $prenom ." tu as ". $age . "ans";
}

nomPrenomAge ("Pignon", "François", 33);



echo "<br>";
echo "<br>";
/* Exercice 7
Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur : - Homme - Femme
La fonction doit renvoyer en fonction des paramètres : -Vous êtes un homme et vous êtes majeur - Vous êtes un homme et vous êtes mineur - Vous êtes une femme et vous êtes majeur - Vous êtes une femme et vous êtes mineur
Gérer tous les cas.  */
echo "<h3>Exercice 7</h3>";

function ageEtGenre ($age, $genre) {
    if($age>18 && $genre ==="Homme") {
        echo "Vous êtes un homme et vous êtes majeur";
    } else if ($age< 18 && $genre === "Homme") {
        echo "Vous êtes un homme et vous êtes mineur";
    } else if ($age> 18 && $genre === "Femme") {
        echo "Vous êtes une femme et vous êtes majeur";
    } else {
        echo "Vous êtes une femme et vous êtes mineur";        
    }
}

ageEtGenre (15,"Femme");
echo "<br>";
ageEtGenre (22,"Femme");
echo "<br>";
ageEtGenre (12,"Homme");
echo "<br>";
ageEtGenre (20,"Homme");

echo "<br>";
echo "<br>";
/* Exercice 8
Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
Tous les paramètres doivent avoir une valeur par défaut */
echo "<h3>Exercice 8</h3>";

function sommeDeTroisNbAvecValeursParDefaut ($a=3, $b=5, $c=2) {
    echo $a + $b + $c;
}

sommeDeTroisNbAvecValeursParDefaut ();
echo "<br>";
sommeDeTroisNbAvecValeursParDefaut (1,1);
echo "<br>";
sommeDeTroisNbAvecValeursParDefaut (null,0,2);
echo "<br>";
sommeDeTroisNbAvecValeursParDefaut (2,0,2);
echo "<br>";
sommeDeTroisNbAvecValeursParDefaut (2,0,null);
echo "<br>";
sommeDeTroisNbAvecValeursParDefaut (2,0,2);
echo "<br>";
sommeDeTroisNbAvecValeursParDefaut (2,0,2);
echo "<br>";



echo "<br>";
echo "<br>";








?>