<?php

// function parite($nombre){
//     if ($nombre % 2 == 0) {
//         echo "nombre est paire"; 
//     } else {
//         echo "nonbre est impaire";
//     }
// }

// echo parite(25);

function getStat($tableau){
    $nbPaire  = [];
    $nbImpaire = [];

    foreach ($tableau as $nombre) {
        if ($nombre % 2 == 0) {
            $nbPaire[] = $nombre;
        } else {
            $nbImpaire[] = $nombre;
        }   
    }

    $average = array_sum($tableau) / count($tableau);
    return[
        'Paires' => $nbPaire,
        'Impaires' => $nbImpaire,
        'Moyenne' => $average
    ];
}

$tableau = [45, 5, 8, 6, 7, 9, 10, 16, 2, 3];
$result = getStat($tableau);

echo "Nombres Paires: " . implode(", ",$result['Paires']) . "\n" ."<br>";
echo "<br>";
echo "Moyenne: " . $result['Moyenne']."<br>";
echo "<br>";
echo "Nombres Impaires: " . implode(", ", $result['Impaires']) . "\n";