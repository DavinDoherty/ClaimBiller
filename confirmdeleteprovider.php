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
    
        <?php include("includes/header.php");?>
            <?php include("includes/nav.html");?>
            
            <div id="content">

            <div id="innerContainer">
            
            <div><h4>CONFIRM DELETE PROVIDER</h4></div>

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
                    
                    $providerID = $_GET['providerID'];


                    $sql="SELECT * FROM provider WHERE providerID = $providerID ";

                    $result=mysqli_query($link,$sql);
                    $row=mysqli_fetch_array($result);
                    
                    $providerID=$row["providerID"];
                    $providerFName=$row["providerFName"];
                    $providerLName=$row["providerLName"];
                    $providerEff=$row["providerEff"];
                    $providerTerm=$row["providerTerm"];
                    $ssn=$row["ssn"];
                    $contactNbr=$row["contactNbr"];
                    $providerEmail=$row["providerEmail"];
                    
                    mysqli_close($link);

                    ?>
                
                <div id="editproviderdetail" >
                
                <form method="post" action="completeddeleteprovider.php" class="inputForm">
                <fieldset disabled>
                    <table id="editProvDetails">
                    <tr>
                    <td width="100px"><label for="providerID">Provider ID</label></td>
                    <td width="1000px"><input type = "text" id="providerID" name="providerID"  value="<?php echo $providerID; ?>" autofocus ></td>
                    </tr>
                    <tr>
                    <td width="100px"><label for="providerFName">Provider First Name</label></td>
                    <td width="1000px"><input type = "text" id="providerFName" name="providerFName" value="<?php echo $providerFName; ?>" ></td>
                    </tr>
                    <tr>
                    <td width="100px"><label for="providerLName">Provider Last Name</label></td>
                    <td width="1000px"><input type = "text" id="providerLName" name="providerLName" value="<?php echo $providerLName; ?>" ></td>
                    </tr>
                    <tr>
                    <td width="100px"><label for="providerEff">Provider Effective Date</label></td>
                    <td width="1000px"><input type = "text" id="providerEff" name="providerEff" value="<?php echo $providerEff; ?>"></td>
                    </tr>
                    <tr>
                    <td width="100px"><label for="providerTerm">Provider Termination Date</label></td>
                    <td width="1000px"><input type = "text" id="providerTerm" name="providerTerm" value="<?php echo $providerTerm; ?>"></td>
                    </tr>
                    <tr>
                    <td width="100px"><label for="ssn">Social Security Number</label></td>
                    <td width="1000px"><input type = "text" id="ssn" name="ssn" value="<?php echo $ssn; ?>"></td>
                    </tr>
                    <tr>
                    <td width="100px"><label for="contactNbr">Contact Number</label></td>
                    <td width="1000px"><input type = "text" id="contactNbr" name="contactNbr" value="<?php echo $contactNbr; ?>"></td>
                    </tr>
                    <tr>
                    <td width="250px"><label for="providerEmail">Provider Email</label></td>
                    <td width="1000px"><input type = "text" id="providerEmail" name="providerEmail" value="<?php echo $providerEmail; ?>"></td>
                    </tr>
                    <br><br>
                    </table>
                </fieldset>
                </form>
                <br>

                <?php

                echo"
                <h4>Are you sure you want to delete this provider? <br>This action cannot be undone </h4><br>

                <button class='btn'><a href='deleteprovider.php?providerID=$providerID' style='text-decoration: none;'>DELETE</a></button>
                <button class='btn'><a href='manageproviders.php' style='text-decoration: none;'>CANCEL</a></button>";
                
                ?>
     </div>	
                </div>
               
    </div>
    <div id="footer">
                    <?php include("includes/footer.html");?>
                </div>
                </div>   

</body>
</html>

