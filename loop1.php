<?php

//$i=0;

//While loop example
/*  while($i<10){
     echo "$i";
     $i++;
 }
 */

//do while
  /*do{
    echo "$i";
    $i++;
    }while($i<10);
   * 
   */

//for loop
echo "<table border=1 bgcolor=red>";
for($i=0;$i<10;$i++){
    echo "<tr>";
    if($i%2==0){
         echo "<td bgcolor=lightgreen>$i</td>";
    } else {
         echo "<td bgcolor=yellow>$i</td>";
    }
     echo "</tr>";
}
echo "</table>";