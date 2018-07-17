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
        
        <button class='btn'><a href='addprovider.php'>ADD PROVIDER</a></button>

<?php
	
    session_start();
                
    $server="localhost";
    $dbuser="root";
    $password="";
    $link=mysqli_connect($server,$dbuser,$password);
    
    mysqli_select_db($link,"claimbiller");
    
    $sql="SELECT * from provider ";
    $result=mysqli_query($link,$sql);
    
    if(mysqli_num_rows($result) > 0)
    {
    echo "<table class='tbl_propdetails' width='100%' cellspacing='0'>";
    
    while($row=mysqli_fetch_array($result))
    {
        $providerid=$row["providerID"];
        $providerName=$row["providerName"];
        $providerEff=$row["providerEff"];
        $providerTerm=$row["providerTerm"];
        $ssn=$row["ssn"];
        $contactNbr=$row["contactNbr"];
        $providerEmail=$row["providerEmail"];

        
        echo "<tr >
                <td><font size ='3px'>$providerid</font></td>
                <td><font size ='3px'>$providerName</font></td>
                <td><font size ='3px'>$ssn</font></td>
                </tr>";
    }
    echo "</table>";
    }
    else
    {
        echo"No Records Found";
    }
    
    mysqli_close($link);
?>
       <br><br>
       
        <p>
        <form action="admin.php">
        <input class="btn" type="submit" value="Back to Admin" />
    </form>
			
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

