<?php

$link = mysqli_connect('localhost','root','','db_intern');
if($_POST){
  $name = $_POST['txt1'];
  $gender = $_POST['txt2'];
  $mobile = $_POST['txt3'];

  $q = mysqli_query($link,
          "insert into tbl_user(user_name,user_gender,user_mobile) values('{$name}','{$gender}','{$mobile}')") or die(mysqli_error($link));  
   if($q){
       echo "<script>alert('RECORD ADDED');</script>";
   }
          
          }

?>
<html>
    <body>
        <form method="post">
            NAME:<input type="text" name="txt1"/>
            GENDER:<select name="txt2">
                <option>MALE</option>
                <option>FEMALE</option>
            </select>
            Mobile No.:<input type="number" name="txt3"/>
            
            <input type="submit" />
            </br>  <a href='tbl3.php'>DISPLAY RECORD</a>;
        </form>
    </body>
</html>
