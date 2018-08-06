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
                    $server="localhost";
                    $dbuser="root";
                    $password="";
                    $link=mysqli_connect($server,$dbuser,$password);
                    mysqli_select_db($link,"claimbiller");	
                   
                    $providerID=$_POST["providerID"];
                    $memberID=$_POST["memberID"];
                    $fromDOS=date($_POST["fromDOS"]);
                    $toDOS=date($_POST["toDOS"]);
                    $diagnosis1=$_POST["diagnosis1"];
                    $diagnosis2=$_POST["diagnosis2"];
                    $diagnosis3=$_POST["diagnosis3"];
                    $diagnosis4=$_POST["diagnosis4"];
                    $diagnosis5=$_POST["diagnosis5"];
                                       
                    $detailLine_1=$_POST["detailLine_1"];
                    $procCode_1=$_POST["procCode_1"];
                    $detailDOS_1=date($_POST["detailDOS_1"]);
                    $procMod1_1=$_POST["procMod1_1"];
                    $procMod2_1=$_POST["procMod2_1"];
                    $amtBilled_1=floatval($_POST["amtBilled_1"]);

                    //Get Last Claim Number for Member (if applicable) to assign new claim number.
                    $clmNbr = 1;
                    $newClaimID = 1;
                    $newDetailClaimID = 1;

                    
                    $sql="SELECT claimID from claim_header WHERE memberID = $memberID ORDER BY claimID DESC LIMIT 1 ";
                    
                    $result=mysqli_query($link,$sql);
                    
                    $queryRowCount = mysqli_num_rows($result); //(int)$row=mysqli_fetch_array($result);
                    
                   // echo "Total Results: $queryRowCount"."<br>";
                    
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row=mysqli_fetch_array($result))
                        {
                            echo"Result: $row[0]"."<br>";
                            if($row[0] > 0) //verify result isn't null value.
                            {
                                $newClaimID = $row[0];
                                $newClaimID++;

                            }
                            else //If null - assign new claim number (001)
                            {
                                $clmNbr = $memberID . str_pad($clmNbr, 3, '0', STR_PAD_LEFT); 
                                $newClaimID = (int)$clmNbr;
                            }
                           
                        }
                    }
                    else //assign new claim number (member number + 001)
                    {
                        $clmNbr = $memberID . str_pad($clmNbr, 3, '0', STR_PAD_LEFT); 
                        $newClaimID = (int)$clmNbr;
                    }
                    echo "$newClaimID"."<br>";
                  
                    echo "$memberID"."<br>".$fromDOS."<br>".$toDOS."<br>".$diagnosis1."<br>".$diagnosis2."<br>".$diagnosis3."<br>".$diagnosis4."<br>".$diagnosis5;

                   

                    $sql_insert="INSERT INTO claim_header(claimID, memberID, fromDOS, toDOS, diagnosis1, diagnosis2, diagnosis3, diagnosis4, diagnosis5) 
                    VALUES ($newClaimID, '$memberID', '$fromDOS', '$toDOS', '$diagnosis1', '$diagnosis2', '$diagnosis3','$diagnosis4','$diagnosis5')"; 

                    if(mysqli_query($link, $sql_insert)) 
                    {
                    }
                    else {
                        echo "AN ERROR OCCURED ON CLAIM HEADER, PLEASE TRY AGAIN ";
                    }

                    //Combine claim number and detail line number to create unique PK for Detail table.
                    $newClaimID = $newClaimID.$detailLine_1;
                    $newDetailClaimID = (int)$newClaimID;

                    $sql_insert="INSERT INTO claim_detail(detailClaimId, detailLine, detailDOS, procCode, procMod1, procMod2, amtBilled ) 
                    VALUES ($newDetailClaimID,'$detailLine_1','$detailDOS_1', '$procCode_1', '$procMod1_1','$procMod2_1', $amtBilled_1)";

                    if(mysqli_query($link, $sql_insert)) 
                    {
                        echo "<h3>Claim Submitted</h3>";
                                                
                    }
                    else {
                        echo "AN ERROR OCCURED ON CLAIM DETAIL, PLEASE TRY AGAIN";
                    
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

