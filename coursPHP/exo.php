<?php
// $notes =  [18,13,5,9,10]; 
//  $somme = $notes[0] + $notes[1] + $notes[2] + $notes[3]+ $notes[4]; 
//  $moyenne = $somme/5;
//     echo "Voici la moyenne : ". $moyenne ."\nC'est la somme : ". $somme;
?>

//exo2
<?php
$animal = ["chien","chat","éléphant","tortue"];
echo "Le deuxième animal est" ;
$animal[1]. "\nLe quatrième animal est : ". $animal[3];
?>

//exo3 
 <?php
// $semmaine=[''lundi'',''mardi'',''mercredi'',''jeudi'',''vendredi'',''samedi'',''dimanche''];
// echo "Aujourd'hui, nous sommes ".$semaine[0] . "\nHier nous étions ". $semaine[6]. "<br>Demain nous serons ". $semaine[1];
// >?
// //exo4
// <?php

// $tab2dim = ["James", "Bond", "M", "07/07/2007",["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"],"London"];
// echo "Prénom : " . $tab2dim[0] . "<br> Nom :" . $tab2dim[1] . "<br> Sexe : " . $tab2dim[2] . "<br> Date Naissance :" . $tab2dim[3] ."<br> Ville :". $tab2dim[5]. "<br> Jour d'hier : " .$tab2dim[4][1];


?>
//ex
<!-- /


?>

//exo4
<?php 
//   $users2 =[
//     'firstname' => 'Frank',
//     'lastname' => 'Billy',
//     'gender' => 'M',
//     'dateOfBirth' => "15/03/1995",
//     'notes' => [18,13,5,10,9],
//     'city'=> 'London',
//     'JourSemain' => ["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"]
// ];

// $moyenne = $users2['notes'][0]+ $users2['notes'][1]+$users2['notes'][2]+$users2['notes'][3]+$users2['notes'][4]/5;

// echo  "Nom:" .$users2['firstname'] ."<br>";
// echo "Prénom :" .$users2['lastname'] ."<br>";
// echo "Moyenne :" .$moyenne ."<br>";
// echo "Jour de demain :" .$users2['JourSemain'][5];




?>
 



 //exo4
 <?php
 $classeUser = [
    [
    'firstname' => "Julien",
    'lastname' => "Dunia",
    'notes' => [8,15,12]
    ],
    [
    'firstname' => "Hakima",
    'lastname' => "Darmouch",
    'notes' => [18,5,10]
    ],
    [
    'firstname' => "Christian",
    'lastname' => "Bale",
    'notes' => [7,19,5]
    ]
    ];

    echo $ classUses[1] ['notes'][1];


//EXO5
echo $ classUses [0]['notes'][0];


//EXO6
echo $ classUses [2]['notes'][1];


//EXO7
$age = readline("Entrez votre age : ");
if($age > 18){
    echo "Vous êtes un adulte et vous avez ". $age . " ans";
}else if ($age == 18){
    echo "Bienvenu dans l'age adulte";
}else{
    echo "Vous avez " .$age." ans et vous n'êtes pas encore un adulte";
}


//Exo7
```PHP
$action = (int)readline("Entrez une action : ('1 : Attaquer, 2 : Defendre, 3 : Se soigner, 4 : Fuir, 5 : Ne rien faire) : ");
if ($action === 1){
    echo "Vous attaquez";
}else if($action === 2){
    echo "Vous défendez";
}elseif($action === 3){
    echo "Vous vous soignez";
}elseif($action === 4){
    echo "Vous fuyez";
}elseif($action === 5){
    echo "Vous ne faites rien";
}else{
    echo "Relancez le programme et Entrez une action 1,2,3,4 ou 5";
}

```


//EXO8

$action = (int)readline("Entrez une action : ('1 : Attaquer, 2 : Defendre, 3 : Se soigner, 4 : Fuir, 5 : Ne rien faire) : ");
switch($action){
    case 1:
        echo "Vous attaquez !";
        break;
    case 2:
        echo "Vous défendez !";
        break;
    case 3:
        echo "Vous vous soignez !";
        break;
    case 4:
        echo "Vous fuyez !";
        break;
    case 5:
        echo "Vous ne faites rien !";
        break;
    default:
    echo "Relancez le programme et Entrez une action 1,2,3,4 ou 5";
}


