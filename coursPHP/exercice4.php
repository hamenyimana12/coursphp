<?php
$classe = [
    [
        'firstname' => "Julien",
        'lastname' => "Dunia",
        'notes' => [8, 15, 12]
    ],
    [
        'firstname' => "Hakima",
        'lastname' => "Darmouch",
        'notes' => [18, 5, 10]
    ],
    [
        'firstname' => "Christian",
        'lastname' => "Bale",
        'notes' => [7, 19, 5]
    ]
];

foreach ($classe as $etudiant) {
    echo "Prénom : " . $etudiant['firstname'] . "\n";
    echo "Nom : " . $etudiant['lastname'] . "\n";   echo "Notes : ";
    foreach ($etudiant['notes'] as $note) {
        echo $note . " ";
    }
    
    $somme = 0;
    foreach ($etudiant['notes'] as $note) {
        $somme += $note;
    }
    $moyenne = $somme / count($etudiant['notes']);
    
    echo "\nMoyenne : " . $moyenne . "\n";
    echo "-----------------\n";
}
