<?php
$nombre=(int)readline("Entrez un nombre entre 0 et 10 pour gagner un lot : ");
$numeroGagnant = rand(0,10);
while($nombre !== $numeroGagnant){
    echo "Mauvais numéro, vous n'avez pas gagné !". "\n";
    $nombre=(int)readline("Retentez votre chance, entrez un nombre à nouveau : "); 
}
echo "Bravo !!! \nVous avez enfin trouvé le numéro gagnant ! \nC'était le numéro " . $numeroGagnant;
?>