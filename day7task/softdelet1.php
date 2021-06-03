<?php


$connection = mysqli_connect('localhost','root', '','db_intern');
$id = $_GET['deletid'];
$q = mysqli_query($connection,"update  tbl_student set is_delet=1 where st_id='{$id}'") or die(mysqli_error($connection));

if($q){
    echo "<script>alert('RECORD DELETED');window.location='tbl1.php';</script>";
    
    
}



