<?php
//EXERCICE 1
/* $nom = "Rocher" ;
Var_dump($nom) ;
 */



//EXERCICE 2
/*  $nom = "Rocher";
 $prenom = "Pierre";
 $age = 20;
// var_dump( $nom, $prenom, $age); OU ALORS
 echo $nom," ", $prenom," ", $age; */


//EXERCICE 3

/* $km = 1;
var_dump($km);

$km = 3;
var_dump($km);

$km = 125;
var_dump($km); */

//EXERCICE 4

/* $string = 'trois';

$int = 3;

$float = 3.333;

$boolean = TRUE;

var_dump ( $string, $int, $float, $boolean ); */

//EXERCICE 5 

/* $int = null;
var_dump($int);

$int = 33;
var_dump($int); */

//EXERCICE 6

/* $nom = "Rocher";
echo("Bonjour " . $nom . ", comment vas tu ?");
 */

 //EXERCICE 7

 /* $nom = "Rocher";
 $prenom = "Pierre";
 $age = 20;
 echo("Bonjour " . $nom ." ". $prenom . ", tu as " . $age ." ans."); */

 //EXERCICE 8

 /* $un = 3+4;
 var_dump( $un );

 $deux = 5*20;
 var_dump( $deux );

 $trois = 45/5;
 var_dump( $trois );
 */

 //PHP-LES CONDITIONS ----------------------------------------------------------------------------------------------

 //EXERCICE 1

/*  $age = 17;
 if ($age >= 18) {var_dump("vous êtes majeur");}
 else {var_dump("vous êtes mineur");} */

//EXERCICE 2

/* $age = 17;
$genre = "Homme";
if ($genre == "Homme"){
    if ($age >= 18){
        echo "Vous êtes un homme et vous êtes majeur. ";
    } else { echo "Vous êtes un homme et vous êtes mineur. ";
    }   
}

$age = 30;
$genre = "Homme";
if ($genre == "Homme"){
    if ($age >= 18){
        echo "Vous êtes un homme et vous êtes majeur. ";
    } else { echo "Vous êtes un homme et vous êtes mineur. ";
    }   
}
$age = 17;
$genre = "Femme";
if ($genre == "Femme"){
    if ($age >= 18){
        echo "Vous êtes une femme et vous êtes majeur. ";
    } else { echo "Vous êtes une femme et vous êtes mineur. ";
    }   
}

$age = 30;
$genre = "Femme";
if ($genre == "Femme"){
    if ($age >= 18){
        echo "Vous êtes une femme et vous êtes majeur. ";
    } else { echo "Vous êtes une femme et vous êtes mineur. ";
    }   
}

// EN GROS

if ($genre == 'homme') {
    if ($age >= 18) {
    echo "vous etes un homme et vous etes majeur";
} else {
    echo "Vous etes un homme et vous etes mineur";
}
} elseif ($genre == 'femme') {
    if ($age >= 18) {
        echo "vous etes une femme et vous etes majeur";
    }
    else {
        echo "vous ets une femme et vous etes mineur";
    }
}
 */

//EXERCICE 3
/* $maVariable = "Femme";
if ($maVariable != "Homme") {
    echo 'C\'est une développeuse !!!';
}  else { 
    echo'C\'est un développeur !!!';
}
 */

//  EXERCICE 4
/* $monAge= 12;
if ($monAge>= 18) {
    echo 'Tu es majeur';
}  else { 
    echo'Tu n\'es pas majeur';
} */

//EXERCICE 5
/* $maVariable = TRUE;
if ($maVariable == false){
    echo 'c\'est pas bon !!!';
}else{
    echo'c\'est ok !!';
} */

//EXERCICE 6
 /* $maVariable = "";
if ($maVariable){
    echo 'c\'est pas bon !!!';
}else{
    echo'c\'est ok !!';
}  */

// PHP LES BOUCLES ------------------------------------------------------------------------------------------------------

//EXERCICE 1

/* $compter = 0;
for ($i = 0; $i < 10; $i++) {
    echo $compter . "<br>";
    $compter++;

}

echo $compter; */

//EXERCICE 2

/* $var1 = 0;
$var2 = 1;

for ($var1 = 0; $var1 < 20; $var1++) {
    echo ($var1 * $var2) . "<br>";
    $var1++;
    
}
echo $var1; */

//EXERCICE 3

/* $var1 = 100;
$var2 = 1;

for ($var1 = 100; $var1 >= 10; $var1--) {
    echo ($var1/ $var2) ."<br>";
} */

//EXERCICE 4

/* $var1 = 1;
for ($i = 1; $i <= 10; $i++) {
    echo ($var1) . "<br>";
    $var1 += $var1 / 2;
}
 */

//EXERCICE 5

/* $var = "on y arrive presque.";
 
for($i = 1; $i <= 15; $i++){
    echo $i. ' '. $var. "<br>";
} */

//EXERCICE 6

/* $myvar = "C'est presque bon.";
for($i = 20; $i >= 0; $i--){
    echo $i. ' '. $myvar. "<br>";
} */

//EXERCICE 7

/* $myvar = "On tient le bon bout.";

for ($i = 1; $i <= 100; $i+=15) {
    echo $i . ' '. $myvar. "<br>";

}
echo $i . ' '. $myvar. "<br>"; */

//EXERCICE 8

/* $myvar = "ENFIN !!!";

for ($i = 200; $i >= 0; $i-=12) {
    echo $i . ' '. $myvar. "<br>";
}
 */

//PHP LES TABLEAUX -------------------------------------------------------------------------------------------------------------------

//EXERCICE 1
/* $mois = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout','septembre', 'octobre', 'novembre', 'decembre' ] ;
 */

//EXERCICE 2

/* $mois = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout','septembre', 'octobre', 'novembre', 'decembre' ] ;
echo $mois [2]; */

//EXERCICE 3

/* $mois = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout','septembre', 'octobre', 'novembre', 'decembre' ] ;
echo $mois [5]; 
 */

//EXERCICE 4

/* $mois = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout','septembre', 'octobre', 'novembre', 'decembre' ];

$mois [7] = "août";

echo $mois [7]; */

//EXERCICE 5 & 6

/* $hautDeFrance =
    [ 02 => 'aisne',
    59 => 'nord',
    60 => 'oise',
    62 => 'pas de calais',
    80 => 'somme'];

echo $hautDeFrance [59]; */

//EXERCICE 7

/* $hautDeFrance =
    [ 02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas de calais',
    80 => 'Somme'];

$hautDeFrance[51] = 'Marne';

echo $hautDeFrance[51]; */

//EXERCICE 8

/* $mois = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout','septembre', 'octobre', 'novembre', 'decembre' ];
foreach($mois as $element) {
    echo $element. '<br>'; } */

//EXERCICE 9

/* $hautDeFrance =
    [ 02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas de calais',
    80 => 'Somme'];

$hautDeFrance[51] = 'Marne';

foreach($hautDeFrance as $element){
    echo $element. '<br>';
} */

//EXERCICE 10

/* $hautDeFrance =
    [ 02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas de calais',
    80 => 'Somme'];

$hautDeFrance[51] = 'Marne';

foreach ($hautDeFrance as $key => $value) {
   echo 'Le département '. $value .' à le numéro '. $key . '<br>';
} */

//PHP - LES FONCTION ---------------------------------------------------------------------------------------------------------

//EXERCICE 1

/* function test(){
    return TRUE;
}
$var = test();
echo $var; */


//EXERCICE 2

/* function test($hello) {
    return $hello;
}

$hello = "bonjour";
echo test($hello);
 */


//EXERCICE 3

/* $hello = 'bonjour';
$cava = 'ca va';
 
function test($hello, $cava) {
    return $hello. ' '. $cava;
}
 
echo test($hello, $cava); */


//EXERCICE 4

/* $var1 = 2;
$var2 = 3;
function test ($var1, $var2) {
    if ($var1 > $var2) {
        echo"Le premier nombre est plus grand";

    }elseif ($var1 < $var2) {
        echo "Le premier nombre est plus petit";
        
    } else {
        echo "Les deux nombres sont identiques";
       
    }
}
 
echo test($var1, $var2); */

//EXERCICE 5

/* $nombre = 3;
$chaine = 'trois';

function test ($nombre, $chaine) {
    return $nombre.' '.$chaine;
}
echo test ($chaine, $nombre); */

//EXERCICE 6

/* $nom ="Rocher";
$prenom = "Pierre";
$age = "20";

function phrase ($nom, $prenom, $age ) {
    return "Bonjour ".$nom." ".$prenom." , tu as".$age." ans";
}

echo phrase($nom, $prenom, $age); */



//EXERCICE 7

/* $age = 18;
$genre = 'homme';
 
function test($age, $genre) {  
    if ($genre == 'homme') {
    if ($age >= 18) {
    echo "vous etes un homme et vous etes majeur";
} else {
    echo "Vous etes un homme et vous etes mineur";
}
} elseif ($genre == 'femme') {
    if ($age >= 18) {
        echo "vous etes une femme et vous etes majeur";
    }
    else {
        echo "vous ets une femme et vous etes mineur";
    }
}
}
 
echo test($age, $genre); */

//EXERCICE 8

/* $un = 3;
$deux = 2;
$trois = 1;

function test($un, $deux, $trois) {
    return $un + $deux + $trois;

}
echo test($un,$deux, $trois); */