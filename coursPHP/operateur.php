<?php

$user1 =[
        'firstname' => 'Lara',
        'lastname' => 'Croft',
        'gender' => 'F',
        'dateOfBirth' => "15/03/1995",
        'notes'=>[18,13,5,10,9],
        'city'=> 'London',
    ];
foreach($user1 as $cle => $valeur){
        echo $cle . " : " . $valeur . "\n";
    }

    $user2 = [
        'firstname' => 'Lara',
        'lastname' => 'Croft',
        'gender' => 'F',
        'dateOfBirth' => "23/10/1995",
        'notes' => [18,13,5,10,9],
        'city'=> 'London'
    ];

    foreach($user2 as $cle => $valeur){
        if ($cle == 'notes'){
            echo $cle . " : [";
            foreach($valeur as $note){
                echo $note . "/20 ";
            }
            echo "]<br>";
        }else{
            echo $cle . " : " . $valeur . "<br>";
        }
    }

    //exo1
    $months = [
    "Janvier",
    "Février",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Aout",
    "Septembre",
    "Octrobre",
    "Novembre",
    "Décembre",
];

$months_size = count($months);
foreach ($months as $index => $month) {
    echo $month;
    if ($index !== $months_size - 1) {
        echo " - ";
    }
}


//exo1 version plus complexe mais plus complète
for($i = 0; $i < sizeof($mois); $i++){
    echo $mois[$i];
    if($i !== sizeof($mois)-1){
        echo " - "; 
    }
}