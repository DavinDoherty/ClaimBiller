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
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

    <div class="container" id="container">
        <?php include("includes/header.php");?>
        <?php include("includes/nav.html");?>
        
            <div id="loginCompleteContent">

                   <?php
    
    session_start();
		if(isset($_SESSION['username']))
		{
			$username=$_SESSION['username'];
			echo "<h3>Welcome ".$username."!</h3>";
		
					
		}
	?>
                        

                </div><!--login-home div-->
                
                
            </div> <!--content div-->
                <div id="footer">
                    <?php include("includes/footer.html");?>
                </div>
        
    </div> <!--container div-->
    <script src="js/jquery.slim.min.js">
    <script src="js/popper.min.js">
    <script src="js/bootstrap.min.js">

</body>
</html>

