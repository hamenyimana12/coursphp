<?php
$tab = [];
do {
    echo "billy : ";
    $mot = readline("comme ç va : ");

    if ($mot !== "stop") {
        $tab[] = $mot;
    }

} while ($mot !== "stop"); 

echo "Les mots entrés sont : " . implode(", ", $tab) . PHP_EOL;
?>
