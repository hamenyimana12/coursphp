$heure = (int)readline('Entrez une heure : ');
    // if(($heure > 8 AND $heure <= 12) || ($heure >= 14 && $heure < 18)){
    //     echo "Le magasin sera ouvert à $heure heures";
    // }else{
    //     echo "Le magasin sera fermé à " . $heure ." heures";
    // }

    //exo1 en mode casse tête
    // if(($heure <= 8 OR $heure > 12 ) AND ($heure < 14 || $heure >= 18)){
    //     echo "Le magasin sera fermé à " . $heure ." heures";
    // }else{
    //     echo "Le magasin sera ouvert à $heure heures";
    // }

    //exo1 en mode chill
    if(!(($heure > 8 AND $heure <= 12) || ($heure >= 14 && $heure < 18))){
        echo "Le magasin sera fermé à " . $heure ." heures";
    }else{
        echo "Le magasin sera ouvert à $heure heures";
    }