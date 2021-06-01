<?php
$a = array(10,20,30,"c","c","4");

//function 1
echo count($a);

//function 2
//it shows how many time value repeted

$newarray = array_count_values($a);
foreach ($newarray as $key => $value) {
    echo "</br>$key-<strong>$value</strong>";
}


//fn-3
$b= array(1,2,3,4,5);
echo "</br> sum is ".array_sum($b);

//fn-4
echo "</br>multiplication is ". array_product($b);

//fn-5
$revarr = array_reverse($b);
echo "<pre> rev array of b is ";
print_r($revarr);
echo"</pre>";

//fn-6
//output will be 1 if the given value exist in array
$temp = in_array("c", $a);
echo "<br>".$temp ;

//fn-7
//randomly selects a key from array
$indexofarray = array_rand($a);
echo "</br>".$a[$indexofarray];

//fn-8
$c= array_rand($a,2);
foreach ($c as $key => $value) {
    echo "</br>$key - $b[$value]";
}

//fn-9
//removes duplicate value
echo "</br>";
print_r(array_unique($a));

//fn-10
$d= array_merge($a,$b);
echo "</br>merged array is ";
print_r($d);

//fn-11
$chek = array_search(30, $a);
echo "</br>".$chek;

//fn-12
$e = range("10", "20");
echo"<select>";
foreach ($e as $key => $value) {
    echo "<option>$value</option>";
}
echo"</select>";

//fn-13
sort($b);
print_r($b);

//fn-14
rsort($b);
print_r($b);

//fn-15
asort($b);
print_r($b);

//fn-16
$f= array(
    "Banana"=>"yellow",
    "Apple"=>"RED",
    "Mango"=>"orange"
);
ksort($f);
foreach ($f as $key => $value) {
    echo "</br>$key-$value";
}

//fn-17
krsort($f);
foreach ($f as $key => $value) {
    echo "</br>$key-$value";
}

//fn-18
/*
shuffle($f);
foreach ($f as $key => $value) {
    echo "</br>-$value";
}
 * 
 */

//fn-19
$g=array("a"=> 'apple', "b"=>"banana");
echo array_key_exists('a', $g);

//fn-20
$uppercase = array_change_key_case($g,CASE_UPPER);
print_r($uppercase);

//fn21
$arry1 = array("BANANA", "MANGO","APPLE");
$arra2 = array("YELLOW", "ORANGE","RED");
$combine = array_combine($arra2, $arry1);
print_r($combine);

//fn-22
echo end($arra2);

//fn-23
$name="SIMRAN";
$subject="PHP";
$compact = compact("name","subject");
print_r($compact);

//fn-24
$fliparray = array_flip($compact);
print_r($fliparray);

//fn-25
$i=array("vivek", "java","php","c","c++","html","android");
$j=array("php","c","c++","html","android");
$diff = array_diff($i, $j);
print_r($diff);

//fn-26
print_r(array_intersect($i, $j));

//fn-27
$myarr = array_values($j);
foreach ($myarr as $key => $value) {
    echo "</br>$key - $value";
}

//fn-28

array_push($j,"netflix");
print_r($j);

//fn-29
array_pop($j);
print_r($j);

//fn-30
$String = "I LOVE CODING";
$array3 = explode(" ", $String);
print_r($array3);

//fn-31
$string2 = array("I","LOVE","CODING","IN","PHP");
$array4 = implode(" ", $string2);
print_r($array4);

?>

<form method="post">

      programing:
      c<input type="checkbox" name="cbox[]" value="c">
      c++<input type="checkbox" name="cbox[]" value="c++">
      php<input type="checkbox" name="cbox[]" value="php">
      <input type ="submit">
    
</form>
<?php
if($_POST){
    $programing = $_POST['cbox'];
    $string = implode(",", $programing);
    echo $string;
}
?>

