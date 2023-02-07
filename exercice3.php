<?php

$my_array = array("bmw","jeep","dastun","ferrari","Honda");

$shortest = PHP_INT_MAX;
$longest = 0;

foreach ($my_array as $str) {
  $len = strlen($str);
  if ($len < $shortest) {
    $shortest = $len;
    $shortest_string = $str;
  }
  if ($len > $longest) {
    $longest = $len;
    $longest_string = $str;
  }
}

echo "La plus longue chaîne est : " . $longest_string . " avec une longueur de " . $longest . " caractères. <br>";
echo "\n";
echo "La plus courte chaîne est : " . $shortest_string . " avec une longueur de " . $shortest . " caractères.";

?>
