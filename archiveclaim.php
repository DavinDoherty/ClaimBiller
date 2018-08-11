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
        <?php include("includes/header.html");?>
        <?php include("includes/nav.html");?>
        <div id="content">

        <div id="innerContainer">
       
       <?php

            session_start();
                if(!isset($_SESSION['username']))
                {
                    header("Location:index.php");
                }
                
          $server="localhost";
                    $dbuser="root";
                    $password="";
                    $link=mysqli_connect($server,$dbuser,$password);
                    mysqli_select_db($link,"claimbiller");	
                    
                    $claimID = $_GET['claimID'];

                    $sql="UPDATE claim_header SET complete='Y' 
                    WHERE claimID = $claimID";
                    
                    $retval = mysqli_query($link,$sql);
                    
                    if(! $retval)
                    {
                        die('Unable to Update Data: '.mysql_error());
                    }
                    else
                    {
                        echo "Claim Archived";
                    }
                   
                    
                    mysqli_close($link);
                   
                    ?>
            </div>

        </div> <!--Content Div-->

         <div id="footer">
        <?php include("includes/footer.html");?>
        </div>
        
    </div> <!--Container Div-->


    <script src="js/jquery.slim.min.js">
    <script src="js/popper.min.js">
    <script src="js/bootstrap.min.js">

</body>
</html>

