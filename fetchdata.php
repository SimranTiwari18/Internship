<?php

$connection = mysqli_connect('localhost','root', '','db_intern');
$q = mysqli_query($connection,"select* from tbl_user") or die(mysqli_error($connection));

//below function will fetch data as numerical array
$row = mysqli_fetch_row($q);

print_r($row);

echo $row[0].$row[1].$row[2].$row[3];


//below function will fetch data as numerical array and assosiative array
$row = mysqli_fetch_array($q);
print_r($row);

echo "<pre>";
print_r($row);
echo "</pre>";

echo $row[0].$row[1].$row[2].$row[3];
echo $row['user_id'].$row['user_name'].$row['user_gender'].$row['user_mobile'];