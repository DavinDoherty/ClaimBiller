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

    <div id="processedAddProvider">
        <?php include("includes/header.html");?>
            <?php include("includes/nav.html");?>
            
            
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
            
                
                    
                    $sql_insert="INSERT INTO provider(providerID, providerFName, providerLName, providerEff, providerTerm, ssn, contactNbr, providerEmail) 
                        VALUES ('$providerID', '$providerFName', '$providerLName', '$providerEff', '$providerTerm', '$ssn', '$contactNbr', '$providerEmail')";
                
                if(mysqli_query($link, $sql_insert)) {
                echo "<h2>Provider Successfully Added</h2>";
                echo "<a href='manageprovider.php'><br><br> RETURN TO MANAGE PROVIDER PAGE</a>";}
                else {
                echo "AN ERROR OCCURED, PLEASE TRY AGAIN";
                }
                mysqli_close($link);
            ?>
		
     </div>	
       
        
    </div>
    <script src="js/jquery.slim.min.js">
    <script src="js/popper.min.js">
    <script src="js/bootstrap.min.js">

</body>
</html>

