<?php
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

// Convertir la chaîne en tableau en utilisant la fonction explode()
$temperatures = explode(", ", $month_temp);

// Trier les températures en ordre croissant avec la fonction sort()
sort($temperatures);

// Calculer la température moyenne en utilisant array_sum() et count()
$average_temp = array_sum($temperatures) / count($temperatures);

// Afficher la température moyenne
echo "La température moyenne est de " . $average_temp . "°F. <br>" ;

// Afficher les cinq températures les plus basses en utilisant array_slice()
echo "Les cinq températures les plus basses sont : " . implode(", ", array_slice($temperatures, 0, 5)) . "°F. <br>" ;

// Afficher les cinq températures les plus élevées en utilisant array_slice()
echo "Les cinq températures les plus élevées sont : " . implode(", ", array_slice($temperatures, -5)) . "°F." ;
?>
