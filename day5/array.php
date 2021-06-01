<?php

//Numerical array
//method 1
$a[0]=10;
$a[1]=20;
$a[2]=30.50;
$a[3]="c";
$a[4]="4";
//method 2
//dynamic array
$a[]=10;
$a[]=10;
$a[]=30.50;
$a[]="c";
$a[]="4";


//method 3
//Always use this method 
$a = array(10,20,30.50,"c","4");

echo $a[3];
//print whole array
/*
for($i=0;$i< count($a);$i++){
    echo "</br>".$a[$i];
}
 * 
 */

$i=0;
while($i< count($a)){
    echo "<br/>".$a[$i];
    $i++;
}

//array inbuild functions
$sum = array_sum($a);
$p = array_product($a);
echo "</br>sum is $sum";
echo "</br>multiplication  is $p";

//3 inbuilt function for debug a array
echo "<pre>";
print_r($a);
echo '</pre>';

echo "<pre>";
var_dump($a);
echo '</pre>';

