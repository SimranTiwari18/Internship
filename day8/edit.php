<?php


$connection = mysqli_connect('localhost','root', '','db_intern');
if(!isset($_GET['eid']) || empty($_GET['eid']) ){
    
    header('location:tbl3.php');
}

$id = $_GET['eid'];
$q = mysqli_query($connection,"select* from tbl_user where user_id='{$id}'") or die(mysqli_error($connection));

$data = mysqli_fetch_array($q);
//print_r($data);

if($_POST){
  $name = $_POST['txt1'];
  $gender = $_POST['txt2'];
  $mobile = $_POST['txt3'];

  $uq = mysqli_query($connection,
          "update tbl_user set user_name='{$name}',user_gender='{$gender}',user_mobile='{$mobile}' where user_id={$id}") or die(mysqli_error($link));  
   if($uq){
       echo "<script>alert('RECORD UPDETED');window.location='tbl3.php';</script>";
   }
          
          }

?>

<html>
    <body>
        <form method="post">
            NAME:<input type="text" value="<?php echo $data['user_name']?>" name="txt1"/>
          </br>  GENDER:MALE<input type="radio" <?php if($data['user_gender']=='MALE'){    echo "checked";}?> value="MALE" name="txt2">
           FEMALE<input type="radio"<?php if($data['user_gender']=='FEMALE'){    echo "checked";}?> value="FEMALE" name="txt2">
           </br> Mobile No.:<input type="number" value="<?php echo $data['user_mobile']?>" name="txt3"/>
            
            <input type="submit" />
            </br>  <a href='tbl3.php'>DISPLAY RECORD</a>;
        </form>
    </body>
</html>
