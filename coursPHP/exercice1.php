<?php
$mois = [
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
$mois_size = count($mois);
foreach ($mois as $index => $mois) {
    echo $mois;
    if ($index !== $mois_size - 1) {
        echo " - ";
    }
}