<?php


$connection = mysqli_connect('localhost','root', '','db_intern');
$id = $_GET['deletid'];
$q = mysqli_query($connection,"update  tbl_user set is_delet=1 where user_id='{$id}'") or die(mysqli_error($connection));

if($q){
    echo "<script>alert('RECORD DELETED');window.location='tbl3.php';</script>";
    
    
}



