<?php

$str = 'Techstudy - the Debugging Solution website';

$newStr = preg_replace('/the/i', 'best', $str, 1);

echo $newStr;

?>
