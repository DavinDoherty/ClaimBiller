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

                    $claimPaidAmt = 0;
                    
                    $sql="SELECT h.claimID, h.memberID, h.providerID, h.fromDOS, h.toDOS, h.submittedDate, h.claimStatus, h.processedDate, 
                          SUM(d.insurerPaidAmt) AS claimPaidAmt, h.insurerComments  
                          FROM claim_header h 
                          JOIN claim_detail d ON d.claimRef = h.claimID 
                          WHERE h.complete = 'N'
                          GROUP BY h.claimID, h.memberID, h.providerID, h.fromDOS, h.toDOS, h.submittedDate, 
                          h.claimStatus, h.processedDate, h.insurerComments;";

                    echo "<div style='margin-left:-30px; margin-top: 10px;' >ALL OPEN CLAIMS</div><br>";

                    $result=mysqli_query($link,$sql);
                    
                    if(mysqli_num_rows($result) > 0)
                    {
                        echo "<table class='tbl_openclaims' width='90%' cellspacing='0'>";
                        
                        echo"<tr>
                        <th>Select</th>
                        <th>Claim ID </th>
                        <th>Member ID</th>
                        <th>Provider ID</th>
                        <th>From DOS </th>
                        <th>To DOS</th>
                        <th>Submitted Date</th>
                        <th>Claim Status</th>
                        <th style='color:#c2c944';>Processed Date </th>
                        <th style='color:#c2c944'>Claim Paid Amt</th>
                        <th style='color:#c2c944'>Insurer Comments </th>
                        <th style='text-align:center;'>Details</th>
                        </tr>";

                        while($row=mysqli_fetch_array($result))
                        {
                            $claimID=$row["claimID"];
                            $memberID=$row["memberID"];
                            $providerID=$row["providerID"];
                            $fromDOS=$row["fromDOS"];
                            $toDOS=$row["toDOS"];
                            $submittedDate=$row["submittedDate"];
                            $claimStatus=$row["claimStatus"];
                            $processedDate=$row["processedDate"];
                            $claimPaidAmt=number_format((float)$row["claimPaidAmt"], 2, '.', '');
                            $insurerComments=$row["insurerComments"];

                            echo "<tr >
                            <td style=align='center'><font color='#7DA3A1'><a href='archiveclaim.php?claimID=$claimID'>Archive</a></font></td>
                            <td style='width:8%;' align='center'>$claimID</td>
                            <td style='min-width:8%;'>$memberID</td>
                            <td style='min-width:8%;'>$providerID</td>
                            <td style='min-width:12%;'>$fromDOS</td>
                            <td style='min-width:12%;'>$toDOS</td>
                            <td style='min-width:12%;'>$submittedDate</td>" ?>
                            <td <?php if($claimStatus == 'Denied' ) {echo('style="color:red"'); } 
                                      elseif($claimStatus == 'Paid') {echo('style="color:green"'); } 
                                      else { echo('style="color:grey"'); } ?>><?php echo $claimStatus ?></td>
                            <td><?php echo $processedDate ?: '-'; ?></td>
                            <td><?php echo $claimPaidAmt ?: '-'; ?></td>
                            <td><?php echo $insurerComments ?: '-'; ?></td>
                           <?php echo "
                            <td style='min-width:40px;'><button class='btn_nav2'><a href='viewclaimdetail.php?claimID=$claimID&page=openrecords'>Detail</a></button></td>
                            
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

