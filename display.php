<?php
$a=$_POST['txt1'];
$b=$_POST['txt2'];
$c=$_POST['txt3'];
$d=$_POST['txt4'];
$e=$_POST['txt5'];
$p=($a+$b+$c+$d+$e)*100/500;
echo "<h2>RESULT<h2>";
echo "<table border=1";
echo "<tr><td><b>MATH :</b></td><td>$a </td></tr>";
echo "<tr><td><b>BIOLOGY :</b></td><td>$b </td></tr>";
echo "<tr><td><b>CHEMISTRY :</b></td><td>$c</td></tr>";
echo "<tr><td><b>PHYSICS :</b></td><td>$d </td></tr>";
echo "<tr><td><b>ENGLISH :</b></td><td>$e </td></tr>";
echo "<tr><td><b>TOTAL:</b> <mark></td><td>".($a+$b+$c+$d+$e)."/500</mark></td></tr>";
echo "<tr><td><b>PERSENTAGES</b></td><td> :<u><mark> $p </u></td></mark></tr>";

if($a<35||$b<35||$c<35||$d<35||$e<35){
    echo "<tr>";
    echo "<td bgcolor=red>Sorry, SYOU ARE<b> FAIL </b>IN THIS EXAM</td>";
    echo "<tr>";
} elseif ($p>80) {
    echo "<tr>";
    echo "<td bgcolor=orange>You Passed This Exam With <b>FIRST CLASS</b></td>";
    echo "</tr>";
} elseif ($p>65) {
    echo "<tr>";
    echo "<td bgcolor=lightgreen>You Passed This Exam With <b>SECOND CLASS</b></td>";
    echo "</tr>";
} else {
    echo "<tr>";
    echo "<td bgcolor=lightblue>You Have Been <b>Passed</b> This Exam</td>";
    echo "</tr>";
}
