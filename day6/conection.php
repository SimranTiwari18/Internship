<?php

$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_intern";
$connection = mysqli_connect($host, $username, $passwd, $dbname);

$q = mysqli_query($connection, 
        "insert into tbl_user(user_name,user_gender,user_mobile) values('Sims2','MALE','123')") or 
        die ("ERROR".mysqli_error($connection) );

if($q){
    echo "<script>alert('RECORD ADDED');</script>";
}


