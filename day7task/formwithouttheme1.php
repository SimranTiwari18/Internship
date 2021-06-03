<?php

$link = mysqli_connect('localhost','root','','db_intern');
if($_POST){
  $name = $_POST['txt1'];
  $gender = $_POST['txt2'];
  $dob = $_POST['txt3'];
  $email = $_POST['txt4'];
  $mobile = $_POST['txt5'];
  $add = $_POST['txt6'];
  $passwd = $_POST['txt7'];
  $area = $_POST['txt8'];
  $bg = $_POST['txt9'];
  

  $q = mysqli_query($link,
          "insert into tbl_student(st_name,st_gender,st_dob,st_email,st_mobile,st_add,st_passwd,st_area,st_blodgroup)"
          . " values('{$name}','{$gender}','{$dob}','{$email}','{$mobile}','{$add}','{$passwd}','{$area}','{$bg}')") or die(mysqli_error($link));  
   if($q){
       echo "<script>alert('RECORD ADDED');</script>";
   }
          
          }

?>

<h1 color="red">STUDENT REGISTRATION FORM</h1>
<html>
    <body>
        <table bgcolor="lightgrey" >
        <form method="post">
            <tr><td>NAME:</td><td><input type="text" name="txt1" required placeholder="ENTER YOUR NAME HERE"/></td></tr>
            <tr>
                <td>GENDER:</td><td><select name="txt2" required >
                <option>MALE</option>
                <option>FEMALE</option>
                    </select></td>
        </tr>
        <tr><td>D.O.B :</td><td><input type="date" name="txt3" required  /></td></tr>
        <tr><td>EMAIL:</td><td><input type="email" name="txt4" required placeholder="EX#abc@xy.com"/></td></tr>
        <tr><td>Mobile No.:</td><td><input type="number" name="txt5" required placeholder="EX#1234567890"/></td></tr>
        <tr><td>ADD.:</td><td><input type="text" name="txt6" required placeholder="ENTER ADDRESS HERE"/></td></tr>
        <tr><td>PASSWORD:</td><td><input type="password" name="txt7" required placeholder="CREATE YOUR PASSWORD HERE"/></td></tr>
        <tr><td>AREA</td><td><input type="text" name="txt8" placeholder="ENTER YOUR CITY/AREA HERE"/></td></tr>
         <tr>
             <td>BLODGROUP:</td><td><select name="txt9" required>
                <option>A+</option> <option>B+</option> <option>O+</option> <option>AB+</option>
                <option>A-</option> <option>B-</option> <option>O-</option> <option>AB-</option>
                    </select></td>
        </tr>
        
        <tr> 
            <td><input type="submit" /></td>
            <td><input type="reset" /></td>
        </tr>
           <tr> 
               <td><a href="tbl2.php">DISPLAY DATA ENTRY</a></td>
        </tr>
        </form>
        </table>
    </body>
</html>
