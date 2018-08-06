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
                    
                    $claimID = $_GET['claimID'];

                    $sql="SELECT * FROM claimheader WHERE claimID = $claimID ";
                    $sql2="SELECT * FROM claimdetail WHERE claimID = $claimID ";

                    $result=mysqli_query($link,$sql);
                    $result2=mysqli_query($link,$sql2);


                    $row=mysqli_fetch_array($result);
                    
                    echo "<br><div id='claimHeader' style='margin-left:0px'><h4>CLAIM HEADER</h4></div>";

                    $result=mysqli_query($link,$sql);
                   
                    $row=mysqli_fetch_array($result);
                   
                    $memberID=$row["memberID"];
                    $providerID=$row["providerID"];
                    $fromDOS=$row["fromDOS"];
                    $toDOS=$row["toDOS"];
                    $diagnosis1=$row["diagnosis1"];
                    $diagnosis2=$row["diagnosis2"];
                    $diagnosis3=$row["diagnosis3"];
                    $diagnosis4=$row["diagnosis4"];
                    $diagnosis5=$row["diagnosis5"];
                    $submittedDate=$row["submittedDate"];
                    $claimStatus=$row["claimStatus"];
                    $processedDate=$row["processedDate"];
                    $claimPaidDate=$row["claimPaidDate"];
                    $claimPaidAmt=$row["claimPaidAmt"];
                    $checkNbr=$row["checkNbr"];
                    $insurerComments=$row["insurerComments"];

                    echo "<table class='tbl_claimDetail' width='70%' cellspacing='0'>";
                        
                    echo"<tr>
                    <th>Claim ID</th>
                    <th>Member ID</th>
                    <th>Provider ID</th>
                    <th>From DOS</th>
                    <th>To DOS</th>
                    <th>Diagnosis1</th>
                    <th>Diagnosis2</th>
                    <th>Diagnosis3</th>
                    <th>Diagnosis4 </th>
                    <th>Diagnosis5 </th>
                    </tr>
                    <tr>
                    <td>$claimID</td>
                    <td>$memberID</td>
                    <td>$providerID</td>
                    <td>$fromDOS</td>
                    <td>$toDOS</td>
                    <td>$diagnosis1</td> ";?>
                    <td><?php echo $diagnosis2 ?: '-'; ?></td>
                    <td><?php echo $diagnosis3 ?: '-'; ?></td>
                    <td><?php echo $diagnosis4 ?: '-'; ?></td>
                    <td><?php echo $diagnosis5 ?: '-'; ?></td>
                    </tr>
                    </table>

                    <table class='tbl_claimDetail' width='50%' cellspacing='0'>
                        <div class="tablePart2">
                    <tr>
                    <th>Submitted</th>
                    <th>Status</th>
                    <th style="color:#c2c944;">Processed</th>
                    <th style="color:#c2c944;">Paid</th>
                    <th style="color:#c2c944;">Paid Amt</th>
                    <th style="color:#c2c944;">Check Nbr</th>
                    <th style="color:#c2c944;">Insurer Comments</th>
                    </tr>
                    <tr>
                    <td><?php echo $submittedDate ?: '-'; ?></td>
                    <td><?php echo $claimStatus ?: '-'; ?></td>
                    <td><?php echo $processedDate ?: '-'; ?></td>
                    <td><?php echo $claimPaidDate ?: '-'; ?></td>
                    <td><?php echo $claimPaidAmt ?: '-'; ?></td>
                    <td><?php echo $checkNbr ?: '-'; ?></td>
                    <td><?php echo $insurerComments ?: '-'; ?></td>
                    </tr>
                    </div>
                    </table>
                    
                    <?php


                    if(mysqli_num_rows($result2) > 0)
                    {
                        echo "<div class='detailTablePart1'>";
                        echo "<br><div id='claimHeader' style='margin-left:0px'><h4>CLAIM DETAIL</h4></div>";
                        echo "<table class='tbl_claimDetail' min-width='70%' margin-top='25px' cellspacing='0'>";

                        echo "<tr >
                        <th>Claim ID</th>
                        <th>Detail Line</th>
                        <th>Detail DOS</th>
                        <th>Proc Code</th>
                        <th>Mod1</th>
                        <th>Mod2</th>
                        <th>Billed Amt</th>
                        <th style='color:#c2c944;'>Insurer Adj Amt</th>
                        <th style='color:#c2c944;'>Insurer Ad Code</th>
                        <th style='color:#c2c944;'>Insurer Adj Comment</th>
                        <th style='color:#c2c944;'>Insurer Paid Amt </th>
                        </tr>";

                        while($row2=mysqli_fetch_array($result2))
                        {
                            $detailLine=$row2["detailLine"];
                            $detailDOS=$row2["detailDOS"];
                            $procCode=$row2["procCode"];
                            $procMod1=$row2["procMod1"];
                            $procMod2=$row2["procMod2"];
                            $amtBilled=$row2["amtBilled"];
                            $insurerAdjAmt=$row2["insurerAdjAmt"];
                            $insurerAdjCode=$row2["insurerAdjCode"];
                            $insurerAdjComment=$row2["insurerAdjComment"];
                            $insurerPaidAmt=$row2["insurerPaidAmt"];

                            echo"<tr>
                            <td>$claimID</td>
                            <td>$detailLine</td>
                            <td>$detailDOS</td>
                            <td>$procCode</td>"?>
                            <td><?php echo $procMod1?: '-'; ?></td>
                            <td><?php echo $procMod2?: '-'; ?></td>
                            <td><?php echo $amtBilled?: '-'; ?></td>
                            <td><?php echo $insurerAdjAmt?: '-'; ?></td>
                            <td><?php echo $insurerAdjCode?: '-'; ?></td>
                            <td><?php echo $insurerAdjComment?: '-'; ?></td>
                            <td><?php echo $insurerPaidAmt?: '-'; ?></td>
                            <?php
                            echo"</tr>";
                        }

                        echo"</table>
                        </div>";
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

