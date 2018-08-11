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
        <div id="content">
                
            <?php

                session_start();
                if(!isset($_SESSION['username']))
                {
                    header("Location:index.php");
                }
                                    
                echo "please choose from one of the following options: &nbsp;&nbsp;<br><br>";
                echo "<button class='btn2' onclick='toggle_visibility()'>MANAGE PROVIDER</button><br>";
                echo "<div id = manageProvDiv >
                <button class='btn3' style='width:150px'><a href='addprovider.php'>ADD PROVIDER</a></button><br>
             
                <button class='btn3' style='width:150px'><a href='editprovider.php'>EDIT PROVIDER</a></button><br>
            
                <button class='btn3' style='width:150px'><a href='deleteprovidersearch.php'>DELETE PROVIDER</a></button><br>
            
                </div>";
                echo "<button class='btn2'><a href='managemember.php'>MANAGE MEMBER</a></button><br>";
                echo "<button class='btn2'><a href='manageinsurer.php' style='text-decoration: none;'>MANAGE INSURER</a></button><br>";
                echo "<button class='btn2'><a href='manageuser.php' style='text-decoration: none;'>MANAGE USER</a></button><br>";
            
            ?>
		

        
        </div> <!--Content Div-->

         <div id="footer">
        <?php include("includes/footer.html");?>
        </div>
        
    </div> <!--Container Div-->

<script type="text/javascript">

function toggle_visibility()
{
   var e = document.getElementById("manageProvDiv");
   if(e.style.display == 'block')
      e.style.display = 'none';
   else
      e.style.display = 'block';
}
 </script>


    <script src="js/jquery.slim.min.js">
    <script src="js/popper.min.js">
    <script src="js/bootstrap.min.js">

</body>
</html>

