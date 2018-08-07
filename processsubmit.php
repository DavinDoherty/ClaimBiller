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

                    $amtBilled_2 = 0;
                    $amtBilled_3 = 0;
                    $amtBilled_4 = 0;
                    $amtBilled_5 = 0;
                    $amtBilled_6 = 0;
                    $amtBilled_7 = 0;
                    $amtBilled_8 = 0;
                    $amtBilled_9 = 0;
                    $amtBilled_10 = 0;

                    if($_POST["amtBilled_2"] > 0)
                    {
                        $detailLine_2=$_POST["detailLine_2"];
                        $procCode_2=$_POST["procCode_2"];
                        $detailDOS_2=date($_POST["detailDOS_2"]);
                        $procMod1_2=$_POST["procMod1_2"];
                        $procMod2_2=$_POST["procMod2_2"];
                        $amtBilled_2=floatval($_POST["amtBilled_2"]);
                    }
                    if($_POST["amtBilled_3"] > 0)
                    {
                        $detailLine_3=$_POST["detailLine_3"];
                        $procCode_3=$_POST["procCode_3"];
                        $detailDOS_3=date($_POST["detailDOS_3"]);
                        $procMod1_3=$_POST["procMod1_3"];
                        $procMod2_3=$_POST["procMod2_3"];
                        $amtBilled_3=floatval($_POST["amtBilled_3"]);
                    }
                    if($_POST["amtBilled_4"] > 0)
                    {
                        $detailLine_4=$_POST["detailLine_4"];
                        $procCode_4=$_POST["procCode_4"];
                        $detailDOS_4=date($_POST["detailDOS_4"]);
                        $procMod1_4=$_POST["procMod1_4"];
                        $procMod2_4=$_POST["procMod2_4"];
                        $amtBilled_4=floatval($_POST["amtBilled_4"]);
                    }
                    if($_POST["amtBilled_5"] > 0)
                    {
                        $detailLine_5=$_POST["detailLine_5"];
                        $procCode_5=$_POST["procCode_5"];
                        $detailDOS_5=date($_POST["detailDOS_5"]);
                        $procMod1_5=$_POST["procMod1_5"];
                        $procMod2_5=$_POST["procMod2_5"];
                        $amtBilled_5=floatval($_POST["amtBilled_5"]);
                    }
                    if($_POST["amtBilled_6"] > 0)
                    {
                        $detailLine_6=$_POST["detailLine_6"];
                        $procCode_6=$_POST["procCode_6"];
                        $detailDOS_6=date($_POST["detailDOS_6"]);
                        $procMod1_6=$_POST["procMod1_6"];
                        $procMod2_6=$_POST["procMod2_6"];
                        $amtBilled_6=floatval($_POST["amtBilled_6"]);
                    }
                    if($_POST["amtBilled_7"] > 0)
                    {
                        $detailLine_7=$_POST["detailLine_7"];
                        $procCode_7=$_POST["procCode_7"];
                        $detailDOS_7=date($_POST["detailDOS_7"]);
                        $procMod1_7=$_POST["procMod1_7"];
                        $procMod2_7=$_POST["procMod2_7"];
                        $amtBilled_7=floatval($_POST["amtBilled_7"]);
                    }
                    if($_POST["amtBilled_8"] > 0)
                    {
                        $detailLine_8=$_POST["detailLine_8"];
                        $procCode_8=$_POST["procCode_8"];
                        $detailDOS_8=date($_POST["detailDOS_8"]);
                        $procMod1_8=$_POST["procMod1_8"];
                        $procMod2_8=$_POST["procMod2_8"];
                        $amtBilled_8=floatval($_POST["amtBilled_8"]);
                    }
                    if($_POST["amtBilled_9"] > 0)
                    {
                        $detailLine_9=$_POST["detailLine_9"];
                        $procCode_9=$_POST["procCode_9"];
                        $detailDOS_9=date($_POST["detailDOS_9"]);
                        $procMod1_9=$_POST["procMod1_9"];
                        $procMod2_9=$_POST["procMod2_9"];
                        $amtBilled_9=floatval($_POST["amtBilled_9"]);
                    }
                    if($_POST["amtBilled_10"] > 0)
                    {
                        $detailLine_10=$_POST["detailLine_10"];
                        $procCode_10=$_POST["procCode_10"];
                        $detailDOS_10=date($_POST["detailDOS_10"]);
                        $procMod1_10=$_POST["procMod1_10"];
                        $procMod2_10=$_POST["procMod2_10"];
                        $amtBilled_10=floatval($_POST["amtBilled_10"]);
                    }
                  
                    //Get Last Claim Number for Member (if applicable) to assign new claim number.
                    $clmNbr = 1;
                    $newClaimID = 1;
                    $newClaimDetailID = 1;

                    $sql="SELECT claimID from claim_header WHERE memberID='$memberID' ORDER BY claimID DESC LIMIT 1 ";
                    
                    $result=mysqli_query($link,$sql);
                    
                    $queryRowCount = mysqli_num_rows($result); 
                  
                    //If query results found then not member's first claim number
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row=mysqli_fetch_array($result))
                        {
                            echo"Result : $row[0]"."<br> ";
                            if($row[0] > 0) //verify result isn't null value.
                            {
                                echo"accessed Result: row 0"."<br>";
                                $newClaimID = $row[0];
                                $newClaimID++;

                            }
                            else //If null - assign new claim number (001)
                            {
                                echo"accessed else assign new claim number";
                                $clmNbr = $memberID . str_pad($clmNbr, 3, '0', STR_PAD_LEFT); 
                                $newClaimID = $clmNbr;
                            }
                           
                        }
                    }
                    else //assign new claim number (member number + 001)
                    {

                        echo "New claim number assigned"."<br>";
                        $clmNbr = $memberID . str_pad($clmNbr, 3, '0', STR_PAD_LEFT); 
                        $newClaimID = $clmNbr;
                        echo "clmNbr First Assigned: $newClaimID"."<br>";
                    }

                    $sql_insert="INSERT INTO claim_header(claimID, memberID, fromDOS, toDOS, diagnosis1, diagnosis2, diagnosis3, diagnosis4, diagnosis5) 
                    VALUES ('$newClaimID', '$memberID', '$fromDOS', '$toDOS', '$diagnosis1', '$diagnosis2', '$diagnosis3','$diagnosis4','$diagnosis5')"; 

                    if(mysqli_query($link, $sql_insert)) 
                    {
                        echo "<h3>Header Claim Submitted</h3>";
                    }
                    else {
                        echo "AN ERROR OCCURED ON CLAIM HEADER, PLEASE TRY AGAIN";
                    }
                        
                    echo "Member To Assign: $memberID"."<br>";
                  
                    echo "Detail Line: $detailLine_1"."<br>";
                   
                    //Combine claim number and detail line number to create unique PK for Detail table.
                    $newClaimDetailID = $newClaimID.$detailLine_1;
                    echo "newDetailClaimID - clmNbr: $newClaimDetailID <br> ";
                  
                    $sql_insert="INSERT INTO claim_detail(detailClaimID, claimRef, detailLine, detailDOS, procCode, procMod1, procMod2, amtBilled ) 
                    VALUES ('$newClaimDetailID', '$newClaimID', '$detailLine_1','$detailDOS_1', '$procCode_1', '$procMod1_1','$procMod2_1', $amtBilled_1)";
                     
                    if($amtBilled_2 > 0)
                    {
                        $newDetailClaimID = $newClaimID.$detailLine_2;

                        $sql_insert="INSERT INTO claim_detail(detailClaimId, claimRef, detailLine, detailDOS, procCode, procMod1, procMod2, amtBilled ) 
                        VALUES ('$newDetailClaimID', '$newClaimID','$detailLine_2','$detailDOS_2', '$procCode_2', '$procMod1_2','$procMod2_2', $amtBilled_2)";
                    }
                   
                    if($amtBilled_3 > 0)
                    {
                        $newDetailClaimID = $newClaimID.$detailLine_3;
                        //$newDetailClaimID = $newClaimID;

                        $sql_insert="INSERT INTO claim_detail(detailClaimId, claimRef, detailLine, detailDOS, procCode, procMod1, procMod2, amtBilled ) 
                        VALUES ('$newDetailClaimID', '$newClaimID','$detailLine_3','$detailDOS_3', '$procCode_3', '$procMod1_3','$procMod2_3', $amtBilled_3)";
                           
                    }
                    if($amtBilled_4 > 0)
                    {
                        $newDetailClaimID = $newClaimID.$detailLine_4;
                        //$newDetailClaimID = $newClaimID;

                        $sql_insert="INSERT INTO claim_detail(detailClaimId, claimRef, detailLine, detailDOS, procCode, procMod1, procMod2, amtBilled ) 
                        VALUES ('$newDetailClaimID', '$newClaimID','$detailLine_4','$detailDOS_4', '$procCode_4', '$procMod1_4','$procMod2_4', $amtBilled_4)";
                           
                    }
                    if($amtBilled_5 > 0)
                    {
                        $newDetailClaimID = $newClaimID.$detailLine_5;
                        //$newDetailClaimID = $newClaimID;

                        $sql_insert="INSERT INTO claim_detail(detailClaimId, claimRef, detailLine, detailDOS, procCode, procMod1, procMod2, amtBilled ) 
                        VALUES ('$newDetailClaimID', '$newClaimID','$detailLine_5','$detailDOS_5', '$procCode_5', '$procMod1_5','$procMod2_5', $amtBilled_5)";
                           
                    }
                    if($amtBilled_6 > 0)
                    {
                        $newDetailClaimID = $newClaimID.$detailLine_6;
                        //$newDetailClaimID = $newClaimID;

                        $sql_insert="INSERT INTO claim_detail(detailClaimId, claimRef, detailLine, detailDOS, procCode, procMod1, procMod2, amtBilled ) 
                        VALUES ('$newDetailClaimID', '$newClaimID','$detailLine_6','$detailDOS_6', '$procCode_6', '$procMod1_6','$procMod2_6', $amtBilled_6)";
                           
                    }
                    if($amtBilled_7 > 0)
                    {
                        $newDetailClaimID = $newClaimID.$detailLine_7;
                        //$newDetailClaimID = $newClaimID;

                        $sql_insert="INSERT INTO claim_detail(detailClaimId, claimRef, detailLine, detailDOS, procCode, procMod1, procMod2, amtBilled ) 
                        VALUES ('$newDetailClaimID', '$newClaimID','$detailLine_7','$detailDOS_7', '$procCode_7', '$procMod1_7','$procMod2_7', $amtBilled_7)";
                           
                    }
                    if($amtBilled_8 > 0)
                    {
                        $newDetailClaimID = $newClaimID.$detailLine_8;
                        //$newDetailClaimID = $newClaimID;

                        $sql_insert="INSERT INTO claim_detail(detailClaimId, claimRef, detailLine, detailDOS, procCode, procMod1, procMod2, amtBilled ) 
                        VALUES ('$newDetailClaimID', '$newClaimID','$detailLine_8','$detailDOS_8', '$procCode_8', '$procMod1_8','$procMod2_8', $amtBilled_8)";
                           
                    }
                    if($amtBilled_9 > 0)
                    {
                        $newDetailClaimID = $newClaimID.$detailLine_9;
                        //$newDetailClaimID = $newClaimID;

                        $sql_insert="INSERT INTO claim_detail(detailClaimId, claimRef, detailLine, detailDOS, procCode, procMod1, procMod2, amtBilled ) 
                        VALUES ('$newDetailClaimID', '$newClaimID','$detailLine_9','$detailDOS_9', '$procCode_9', '$procMod1_9','$procMod2_9', $amtBilled_9)";
                           
                    }
                    if($amtBilled_10 > 0)
                    {
                        $newDetailClaimID = $newClaimID.$detailLine_10;
                        //$newDetailClaimID = $newClaimID;

                        $sql_insert="INSERT INTO claim_detail(detailClaimId, claimRef, detailLine, detailDOS, procCode, procMod1, procMod2, amtBilled ) 
                        VALUES ('$newDetailClaimID', '$newClaimID','$detailLine_10','$detailDOS_10', '$procCode_10', '$procMod1_10','$procMod2_10', $amtBilled_10)";
                           
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

