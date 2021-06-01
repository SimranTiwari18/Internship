<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Website by simran</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
include './include/menu.php';
?>
     <div id="header">
		<div id="menu">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li class="current_page_item"><a href="contact.php">Contact</a></li>
                                <li"><a href="join us.php">JOIN Us</a></li>
			</ul>
		</div>
		<!-- end #menu -->
		
		<!-- end #search -->
	</div>
    
	<!-- end #header -->
	<!-- end #header-wrapper -->
	<div id="page">
		<div id="content">
		  <div class="post">
				<h2 class="title"><a href="#">Contact US HERE </a></h2>
				<p class="meta"> </p>
				<div class="entry">
					<p> YOU CAN CONTACT US THROUGH::</p>
                                        <p><b>MOBILE NO.:</b>1234567890</p>
                                        <p><b>EMAIL:</b>xyz123@gmail.com</p>
                                        <p><b>ADD.:</b>A-202, abc appartment,x area,y city.</p>
			</div>
		  </div>
			
		</div><!-- end #content -->
		<?php
                include './include/sidebar.php';
                ?>
                <!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
	<?php
                include './include/footer.php';
        ?>
	<!-- end #footer -->
</body>
</html>
