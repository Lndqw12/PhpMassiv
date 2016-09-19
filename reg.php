<?php
$array1 ['0'] = 100;
$array1 ['1'] = 10;
$array1 ['2'] = 'text';
$array1 ['3'] = 'true';
$array1 ['1'] = 1050;
$array1 ['5'] = 'cool1';

print '<pre>';
print_r($array1);
print '</pre>';

$array2 ['0'] = 200;
$array2 ['1'] = 20;
$array2 ['2'] = 'text2';
$array2 ['3'] = 'true2';
$array2 ['1'] = 2050;
$array2 ['5'] = 'cool12';

print '<pre>';
print_r($array2);
print '</pre>';

print_r($array1+$array2);
?>