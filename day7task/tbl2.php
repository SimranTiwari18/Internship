<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Sims tiwari</title>

<link href="style1.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

    <div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="images/pics01.jpg" width="920" height="300" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title">DATA ENTRY</h2>
				<p>ALL SUBMITED DATA IS AS PER BELOW</p>
                                
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
				 
                                    <?php


  $connection = mysqli_connect('localhost','root', '','db_intern');
  $q = mysqli_query($connection,"select* from tbl_student where is_delet = 0") or die(mysqli_error($connection));
  echo "<table border=1 bgcolor=#fffaf0>";
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
    echo "<td><a href='softdelet2.php?deletid={$row['st_id']}'>DELET</a></td>";
    echo "</tr>";
    
   
}
 echo "</table>";
  echo "<td><a href='datawiththeme.php'>ADD RECORD</a></td>";

?>
                                
                                </div>
			</div>
			
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2>News</h2>
				       <marquee>news goes here</marquee>	
                                </li>
				
				
			</ul>
		</div>
		
                
		<!-- end #sidebar -->
		
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<div id="footer">
	<p>2020. Website managed by simran tiwari</p>
</div>
<!-- end #footer -->
</body>
</html>

