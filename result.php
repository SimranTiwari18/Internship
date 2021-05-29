<?php

$a=70;$b=70;$c=70;$d=70;$e=70;$s=$a+$b+$c+$d+$e;
echo "<h1>result</h1>";
echo "</br>obtained marks are given below";
echo "</br>math: $a</br>chemistry: $b</br>physics: $c</br>english: $d</br>bioogy: $e </br>total obtained marks is".($s=$a+$b+$c+$d+$e);
echo "</br>persentages:".($s*100/500);
if($s*100/500>79){
    echo "</br>FIRST CLASS";
} elseif ($s*100/500>69) {
    echo "</br>SECOND CLASS";
}else {
    echo "</br>THIRD CLASS";
}