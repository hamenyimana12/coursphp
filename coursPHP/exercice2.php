<?php
$notes = [11, 18, 99, 17, 65220, 6480, 78, 97, 42, 2, 112];
$notes = [18, 13, 5, 9, 10];
$total = 20;

echo "<Ol>";
foreach ($notes as $note) {
    if ($note > 20) {
        continue;
    }

    echo "<li>";

    if ($note === 10) {
        echo "Tu as eu tout pile moitié";
    } else if ($note > 10) {
        echo "Tu as réussi avec la note de";
    } else {
        echo "Tu as raté avec la note de";
    }

    echo " $note/$total";
    echo "</li>";
}
echo "</Ol>";
