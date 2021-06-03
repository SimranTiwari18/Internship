<?php


$connection = mysqli_connect('localhost','root', '','db_intern');
$q = mysqli_query($connection,"select* from tbl_user where is_delet=0") or die(mysqli_error($connection));
  echo "<table border=1>";
  echo "<th>ID</th>";
  echo "<th>NAME</th>";
  echo "<th>GENDER</th>";
  echo "<th>MOBILE</th>";
  echo "<th>ACTION</th>";
  $i=0;
while ($row = mysqli_fetch_array($q)){
    $i++;
    
    echo "<tr>";
    echo "<td>{$i} </td>";
    echo "<td>{$row['user_name']} </td>";
    echo "<td> {$row['user_gender']}</td>";
    echo "<td>{$row['user_mobile'] }</td>";
    echo "<td><a href='softdelet.php?deletid={$row['user_id']}'>DELET</a></td>";
    echo "</tr>";
    
   
}
 echo "</table>";
  echo "<td><a href='insert.php'>ADD RECORD</a></td>";

