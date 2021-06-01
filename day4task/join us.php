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
				<li><a href="contact.php">Contact</a></li>
                                <li class="current_page_item"><a href="join us.php">JOIN Us</a></li>
				
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
				<h2 class="title"><a >WHo WE ARE?</a></h2>
				<p class="meta"> </p>
				<div class="entry">
                                    <h2>We are hiring a web devloper/designer for our team if you want to join us please fill the form below </p>
					</h2>
                                    <?php
                                    include './include/registrationform.php';
                                    ?>
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
