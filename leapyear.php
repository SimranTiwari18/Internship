<?php
 
$a=368;
echo "<h1>leap year</h1></br>given numbers of days are $a";
if($a==365){
echo "</br>given year is not leap year";
}elseif ($a==366) {
    echo "</br>given year is leap year";
} else {
    echo "</br>invalid data";    
}
