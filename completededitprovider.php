<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Medical Claim Biller</title>
    <meta charset="utf-8">
  <!--  <link href="css/bootstrap.min.css" rel="stylesheet"> -->
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
            
            <div id="innerContainer">
            <br>
             <?php   
                    $server="localhost";
                    $dbuser="root";
                    $password="";

                    $link=mysqli_connect($server,$dbuser,$password);
                    mysqli_select_db($link,"claimbiller");	
                    
                    $providerID=$_POST["providerID"];
                    $providerFName=$_POST["providerFName"];
                    $providerLName=$_POST["providerLName"];
                    $providerEff=$_POST["providerEff"];
                    $providerTerm=$_POST["providerTerm"];
                    $ssn=$_POST["ssn"];
                    $contactNbr=$_POST["contactNbr"];
                    $providerEmail=$_POST["providerEmail"];
                    
                    $sql="UPDATE provider SET providerID='$providerID', providerFName='$providerFName', providerLName='$providerLName', providerEff='$providerEff', providerTerm='$providerTerm', 
                    ssn='$ssn', contactNbr='$contactNbr', providerEmail='$providerEmail'
                        WHERE providerID = $providerID";
                        
                        $retval = mysqli_query($link,$sql);
                        
                        if(! $retval)
                        {
                            die('Unable to Update Data: '.mysql_error());
                        }
                        else
                        {
                            echo "Provider Updated";
                            header("Location: http://localhost/claimBiller/admin.php");
                            
                            exit;
                        }
                        echo "Provider Updated";
                        
                        mysqli_close($link);

                    ?>
                

     </div>	
       
               
    </div>
    <div id="footer">
                    <?php include("includes/footer.html");?>
                </div>
    <script src="js/jquery.slim.min.js">
    <script src="js/popper.min.js">
    <script src="js/bootstrap.min.js">

</body>
</html>

