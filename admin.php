<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Medical Claim Biller</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/lists.css">
    <link rel="stylesheet" href="css/page_text.css">
    <link rel="stylesheet" href="css/forms.css">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

    <div class="container" id="container">
        <?php include("includes/header.html");?>
        <?php include("includes/nav.html");?>
        <div id="content">
        

<?php
	
			
			echo "please choose from one of the following options: &nbsp;&nbsp;";
			echo "<a href='logout.php'>Logout</a><br><br>";
			echo "<button class='btn' style='width:220px'><a href='manageprovider.php' style='text-decoration: none;'>MANAGE PROVIDER</a></button><br><br>";
			echo "<button class='btn' style='width:220px'><a href='managemember.php' style='text-decoration: none;'>MANAGE MEMBER</a></button><br><br>";
			echo "<button class='btn' style='width:220px'><a href='manageinsurer.php' style='text-decoration: none;'>MANAGE INSURER</a></button><br><br>";
            echo "<button class='btn' style='width:220px'><a href='manageuser.php' style='text-decoration: none;'>MANAGE USER</a></button><br><br>";
		
	?>
		

        
        </div>

         <div id="footer">
        <?php include("includes/footer.html");?>
        </div>
        
    </div>
    <script src="js/jquery.slim.min.js">
    <script src="js/popper.min.js">
    <script src="js/bootstrap.min.js">

</body>
</html>

