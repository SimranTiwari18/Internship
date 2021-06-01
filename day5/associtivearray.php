<?php

//associative array
//key = value
//method 1
/*
$a[o]=10;
$a['c']='computer';
$a['php']='web devlopment';
$a[10]='ten';
$a[50]=50.50;
 * 
 * 
 */

//method 2
//always use this method to create an array
$a = array(
    0=>10,
    'c'=>'computer',
    'php'=>'web devlopment',
    10=>'ten',
    50=>50.50
);
//print a value
echo "c for".$a['c'];
//print whole array
foreach ($a as $value) {
    echo"</br>value is $value";
}

foreach ($a as $key => $value) {
    echo "</br>value for key <b>$key</b> is <b>$value</b>";
}

 echo "<pre>";
print_r($a);
echo '</pre>';

echo "<pre>";
var_dump($a);
echo '</pre>';

