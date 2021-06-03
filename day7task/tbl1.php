<?php


$connection = mysqli_connect('localhost','root', '','db_intern');
$q = mysqli_query($connection,"select* from tbl_student where is_delet = 0") or die(mysqli_error($connection));
  echo "<table border=1>";
  echo "<th>ID</th>";
  echo "<th>NAME</th>";
  echo "<th>GENDER</th>";
  echo "<th>DOB</th>";
  echo "<th>EMAIL</th>";
  echo "<th>MOBILE</th>";
  echo "<th>ADDRESS</th>";
  echo "<th>PASSWORD</th>";
  echo "<th>AREA</th>";
  echo "<th>BLODGROUP</th>";
  echo "<th>ACTION</th>";
  $i=0;
while ($row = mysqli_fetch_array($q)){
    $i++;
    
    echo "<tr>";
    echo "<td>{$i} </td>";
    echo "<td>{$row['st_name']} </td>";
    echo "<td> {$row['st_gender']}</td>";
    echo "<td> {$row['st_dob']}</td>";
    echo "<td> {$row['st_email']}</td>";
    echo "<td>{$row['st_mobile'] }</td>";
    echo "<td> {$row['st_add']}</td>";
    echo "<td> {$row['st_passwd']}</td>";
    echo "<td> {$row['st_area']}</td>";
    echo "<td> {$row['st_blodgroup']}</td>";
    echo "<td><a href='softdelet1.php?deletid={$row['st_id']}'>DELET</a></td>";
    echo "</tr>";
    
   
}
 echo "</table>";
  echo "<td><a href='insert1.php'>ADD RECORD</a></td>";

?>