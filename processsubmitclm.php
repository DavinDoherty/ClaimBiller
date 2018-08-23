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
    <?php header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache"); ?>
</head>
<body>

                <?php  session_start();
                    if(!isset($_SESSION['username']))
                    {
                        header("Location:index.php");
                    }
                ?>

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

                    if($_POST["detailLine_2"] > 0)
                    {
                        $detailLine_2=$_POST["detailLine_2"];
                        $procCode_2=$_POST["procCode_2"];
                        $detailDOS_2=date($_POST["detailDOS_2"]);
                        $procMod1_2=$_POST["procMod1_2"];
                        $procMod2_2=$_POST["procMod2_2"];
                        $amtBilled_2=floatval($_POST["amtBilled_2"]);
                    }
                    if($_POST["detailLine_3"] > 0)
                    {
                        $detailLine_3=$_POST["detailLine_3"];
                        $procCode_3=$_POST["procCode_3"];
                        $detailDOS_3=date($_POST["detailDOS_3"]);
                        $procMod1_3=$_POST["procMod1_3"];
                        $procMod2_3=$_POST["procMod2_3"];
                        $amtBilled_3=floatval($_POST["amtBilled_3"]);
                    }

                    //echo "Line1: ".$detailLine_1."<br>".$procCode_1."<br>".$detailDOS_1."<br>".$procMod1_1."<br>".$procMod2_1."<br>".$amtBilled_1."<br><br>";
                    //echo "Line2: ".$detailLine_2."<br>".$procCode_2."<br>".$detailDOS_2."<br>".$procMod1_2."<br>".$procMod2_2."<br>".$amtBilled_2."<br><br>";
                    //echo "Line3: ".$detailLine_3."<br>".$procCode_3."<br>".$detailDOS_3."<br>".$procMod1_3."<br>".$procMod2_3."<br>".$amtBilled_3."<br><br>";

                    //Get Last Claim Number for Member (if applicable) to assign new claim number.
                    $clmNbr = 1;
                    $newClaimID = 1;

                    $sql="SELECT claimID from claim_header WHERE memberID = $memberID ORDER BY claimID DESC LIMIT 1 ";
                    
                    $result=mysqli_query($link,$sql);
                    
                    $queryRowCount = mysqli_num_rows($result); 
                  
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
                        echo "New claim number assigned"."<br>";
                        $clmNbr = $memberID . str_pad($clmNbr, 3, '0', STR_PAD_LEFT); 
                        echo "clmNbr First Assigned: $clmNbr"."<br>";
                        $clmNbr=(int)$clmNbr;

                        $newClaimID = (int)$clmNbr;
                    }
                    echo "Member To Assign: $memberID"."<br>";
                    echo "NewClaim: $newClaimID"."<br>";
                  
                    echo "Member: $memberID"."<br>".$fromDOS."<br>".$toDOS."<br>".$diagnosis1."<br>".$diagnosis2."<br>".$diagnosis3."<br>".$diagnosis4."<br>".$diagnosis5."<br><br>";
                   

                    //Combine claim number and detail line number to create unique PK for Detail table.
                    $newClaimID = (int)$newClaimID.(int)$detailLine_1;
                    echo "newClaimID - clmNbr: $clmNbr <br>";
                  
                    
                    echo "DetailClaimIDToAdd (clmNbr):".$clmNbr."<br>";

                    $sql_insert="INSERT INTO claim_detail(detailClaimId, detailLine, detailDOS, procCode, procMod1, procMod2, amtBilled ) 
                    VALUES ($clmNbr ,'$detailLine_1','$detailDOS_1', '$procCode_1', '$procMod1_1','$procMod2_1', $amtBilled_1)";
                    /*
                    if($detailLine_2 > 0)
                    {
                        $newClaimID = $newClaimID.(int)$detailLine_2;
                        $newDetailClaimID = (int)$newClaimID;

                        $sql_insert="INSERT INTO claim_detail(detailClaimId, detailLine, detailDOS, procCode, procMod1, procMod2, amtBilled ) 
                        VALUES ($newDetailClaimID,'$detailLine_2','$detailDOS_2', '$procCode_2', '$procMod1_2','$procMod2_2', $amtBilled_2)";
                    }
                    if($detailLine_3 > 0)
                    {
                        $newClaimID = $newClaimID.(int)$detailLine_3;
                        $newDetailClaimID = (int)$newClaimID;

                        $sql_insert="INSERT INTO claim_detail(detailClaimId, detailLine, detailDOS, procCode, procMod1, procMod2, amtBilled ) 
                        VALUES ($newDetailClaimID,'$detailLine_3','$detailDOS_3', '$procCode_3', '$procMod1_3','$procMod2_3', $amtBilled_3)";
                    }
*/
                    if(mysqli_query($link, $sql_insert)) 
                    {
                        echo "<h3>Claim Submitted</h3>";
                    }
                    else 
                    {
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

